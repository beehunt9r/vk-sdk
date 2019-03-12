<?php
namespace Hydrogen;

use CURLFile;
use OutOfRangeException;
use Hydrogen\Exceptions\RequestException;
use Hydrogen\Exceptions\ResponseException;

/**
 * Client
 * @package Hydrogen
 * @author Maxim Alexeev
 * @license ISC
 */
class Client
{
    /**
     * @var string
     */
    private $access_token;

    /**
     * @var int
     */
    private $language;

    /**
     * @var string
     */
    private $version;

    /**
     * @var resource
     */
    private $resource;

    /**
     * @var array
     */
    private $method_parts = [];

    public function __construct(string $access_token, string $version = '5.92', int $language = Language::RUSSIAN)
    {
        $this->access_token = $access_token;
        $this->language = $language;
        $this->version = $version;
        $this->resource = curl_init();
    }
    
    /**
     * @param string $name
     * @throws OutOfRangeException
     */
    public function __get(string $name)
    {
        if (count($this->method_parts) > 0) {
            throw new OutOfRangeException('The method is characterized by only one controller!');
        }

        $this->method_parts[] = $name;
        return $this;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @throws RequestException
     * @throws ResponseException
     */
    public function __call(string $name, array $arguments)
    {
        $this->method_parts[] = $name;
        array_unshift($arguments, implode('.', $this->method_parts));
        $this->method_parts = [];
        return call_user_func_array([$this, 'call'], $arguments);
    }

    /**
     * @param string $method
     * @param array $options
     * 
     * @return mixed
     * @throws RequestException
     * @throws ResponseException
     */
    public function call(string $method, array $options = [])
    {
        $options['access_token'] = $this->access_token;
        $options['lang'] = $this->language;
        $options['v'] = $this->version;

        curl_reset($this->resource);
        curl_setopt_array($this->resource, [
            CURLOPT_URL => 'https://api.vk.com/method/'.$method,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $options
        ]);

        $response = curl_exec($this->resource);
        if ($response === false) {
            throw new RequestException(curl_error($this->resource), curl_errno($this->resource));
        }

        $data = json_decode($response, true);
        if (isset($data['error'])) {
            $error = $data['error'];
            throw new ResponseException($error['error_msg'], $error['error_code']);
        }
        
        return $data['response'] ?? $data;
    }

    /**
     * @param string $url
     * @param string $parameter
     * @param string $path
     * 
     * @return mixed
     * @throws RequestException
     */
    public function upload(string $url, string $parameter, string $path)
    {
        curl_reset($this->resource);
        curl_setopt_array($this->resource, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => [
                $parameter => new CURLFile($path)
            ]
        ]);

        $response = curl_exec($this->resource);
        if ($response === false) {
            throw new RequestException(curl_error($this->resource), curl_errno($this->resource));
        }

        return json_decode($response, true);
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }

    /**
     * @return int
     */
    public function getLanguage(): int
    {
        return $this->language;
    }
    
    /**
     * @param int $language
     */
    public function setLanguage(int $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    
    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function __destruct()
    {
        curl_close($this->resource);
    }
}
