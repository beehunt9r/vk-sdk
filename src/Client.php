<?php

namespace MaxGoody\Hydrogen;

use CURLFile;
use InvalidArgumentException;
use MaxGoody\Hydrogen\Enums\Language;
use MaxGoody\Hydrogen\Exceptions\RequestException;
use MaxGoody\Hydrogen\Exceptions\ResponseException;
use OutOfRangeException;

/**
 * @package MaxGoody\Hydrogen
 * @author Maksim Alekseev <maksimgoody@gmail.com>
 * @license MIT
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

    public function __construct(string $access_token, string $version = '5.101', int $language = Language::RUSSIAN)
    {
        $this->access_token = $access_token;
        $this->language = $language;
        $this->version = $version;
        $this->resource = curl_init();
    }

    /**
     * @param string $name
     *
     * @return Client
     * @throws OutOfRangeException
     */
    public function __get(string $name): self
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
     *
     * @return mixed
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
            CURLOPT_POSTFIELDS => $options,
        ]);

        return $this->sendAndDecode();
    }

    /**
     * @param string $url
     * @param string $parameter
     * @param string $path
     *
     * @return mixed
     * @throws RequestException
     * @throws ResponseException
     */
    public function upload(string $url, string $parameter, string $path)
    {
        if (false === is_file($path)) {
            throw new InvalidArgumentException('File is not exists ['.$path.'].');
        }

        curl_reset($this->resource);
        curl_setopt_array($this->resource, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => [
                $parameter => new CURLFile($path, mime_content_type($path), pathinfo($path, PATHINFO_BASENAME)),
            ],
        ]);

        return $this->sendAndDecode();
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

    /**
     * @return mixed
     * @throws RequestException
     * @throws ResponseException
     */
    private function sendAndDecode()
    {
        $response = curl_exec($this->resource);
        if (false === $response) {
            throw new RequestException('cURL error ['.curl_error($this->resource).'].', curl_errno($this->resource));
        }

        $code = curl_getinfo($this->resource, CURLINFO_RESPONSE_CODE);
        if (200 !== $code) {
            throw new ResponseException('Invalid http code ['.$code.'].');
        }

        $data = json_decode($response, true);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new ResponseException('Invalid JSON ['.json_last_error_msg().'].', json_last_error());
        }

        if (true === isset($data['error'])) {
            $error = $data['error'];
            throw new ResponseException('API error ['.$error['error_msg'].'].', $error['error_code']);
        }

        return $data['response'] ?? $data;
    }
}
