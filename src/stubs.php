<?php

namespace MaxGoody\Hydrogen {

    class Client
    {
        /**
         * @var \MaxGoody\Hydrogen\Groups\Account
         */
        public $account;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Ads
         */
        public $ads;

        /**
         * @var \MaxGoody\Hydrogen\Groups\AppWidgets
         */
        public $appWidgets;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Apps
         */
        public $apps;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Auth
         */
        public $auth;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Board
         */
        public $board;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Database
         */
        public $database;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Docs
         */
        public $docs;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Fave
         */
        public $fave;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Friends
         */
        public $friends;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Gifts
         */
        public $gifts;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Groups
         */
        public $groups;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Leads
         */
        public $leads;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Likes
         */
        public $likes;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Market
         */
        public $market;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Messages
         */
        public $messages;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Newsfeed
         */
        public $newsfeed;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Notes
         */
        public $notes;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Notifications
         */
        public $notifications;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Orders
         */
        public $orders;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Pages
         */
        public $pages;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Photos
         */
        public $photos;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Polls
         */
        public $polls;

        /**
         * @var \MaxGoody\Hydrogen\Groups\PrettyCards
         */
        public $prettyCards;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Search
         */
        public $search;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Secure
         */
        public $secure;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Stats
         */
        public $stats;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Status
         */
        public $status;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Storage
         */
        public $storage;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Stories
         */
        public $stories;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Streaming
         */
        public $streaming;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Users
         */
        public $users;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Utils
         */
        public $utils;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Video
         */
        public $video;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Wall
         */
        public $wall;

        /**
         * @var \MaxGoody\Hydrogen\Groups\Widgets
         */
        public $widgets;
    }
}

namespace MaxGoody\Hydrogen\Groups {

    class Account
    {
        /**
         * @param $owner_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.ban
         */
        public function ban(array $parameters = [])
        {
            //
        }

        /**
         * Changes a user password after access is successfully restored with the [vk.com/dev/auth.restore|auth.restore] method.
         *
         * @param $restore_sid string Session id received after the [vk.com/dev/auth.restore|auth.restore] method is executed. (If the password is changed right after the access was restored)
         * @param $change_password_hash string Hash received after a successful OAuth authorization with a code got by SMS. (If the password is changed right after the access was restored)
         * @param $old_password string Current user password.
         * @param $new_password string New password that will be set as a current
         *
         * @return array
         *
         * @see https://vk.com/dev/account.changePassword
         */
        public function changePassword(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
         *
         * @param $offset integer
         * @param $count integer Number of results to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/account.getActiveOffers
         */
        public function getActiveOffers(array $parameters = [])
        {
            //
        }

        /**
         * Gets settings of the user in this application.
         *
         * @param $user_id integer User ID whose settings information shall be got. By default: current user.
         *
         * @return integer
         *
         * @see https://vk.com/dev/account.getAppPermissions
         */
        public function getAppPermissions(array $parameters = [])
        {
            //
        }

        /**
         * Returns a user's blacklist.
         *
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of results to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/account.getBanned
         */
        public function getBanned(array $parameters = [])
        {
            //
        }

        /**
         * Returns non-null values of user counters.
         *
         * @param $filter array Counters to be returned.
         *
         * @return int
         *
         * @see https://vk.com/dev/account.getCounters
         */
        public function getCounters(array $parameters = [])
        {
            //
        }

        /**
         * Returns current account info.
         *
         * @param $fields array Fields to return. Possible values: *'country' — user country,, *'https_required' — is "HTTPS only" option enabled,, *'own_posts_default' — is "Show my posts only" option is enabled,, *'no_wall_replies' — are wall replies disabled or not,, *'intro' — is intro passed by user or not,, *'lang' — user language. By default: all.
         *
         * @return int
         *
         * @see https://vk.com/dev/account.getInfo
         */
        public function getInfo(array $parameters = [])
        {
            //
        }

        /**
         * Returns the current account info.
         *
         * @return int
         *
         * @see https://vk.com/dev/account.getProfileInfo
         */
        public function getProfileInfo(array $parameters = [])
        {
            //
        }

        /**
         * Gets settings of push notifications.
         *
         * @param $device_id string Unique device ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/account.getPushSettings
         */
        public function getPushSettings(array $parameters = [])
        {
            //
        }

        /**
         * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications
         *
         * @param $token string Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications)
         * @param $device_model string String name of device model.
         * @param $device_year integer Device year.
         * @param $device_id string Unique device ID.
         * @param $system_version string String version of device operating system.
         * @param $settings string Push settings in a [vk.com/dev/push_settings|special format].
         * @param $sandbox boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.registerDevice
         */
        public function registerDevice(array $parameters = [])
        {
            //
        }

        /**
         * Edits current profile info.
         *
         * @param $first_name string User first name.
         * @param $last_name string User last name.
         * @param $maiden_name string User maiden name (female only)
         * @param $screen_name string User screen name.
         * @param $cancel_request_id integer ID of the name change request to be canceled. If this parameter is sent, all the others are ignored.
         * @param $sex integer User sex. Possible values: , * '1' – female,, * '2' – male.
         * @param $relation integer User relationship status. Possible values: , * '1' – single,, * '2' – in a relationship,, * '3' – engaged,, * '4' – married,, * '5' – it's complicated,, * '6' – actively searching,, * '7' – in love,, * '0' – not specified.
         * @param $relation_partner_id integer ID of the relationship partner.
         * @param $bdate string User birth date, format: DD.MM.YYYY.
         * @param $bdate_visibility integer Birth date visibility. Returned values: , * '1' – show birth date,, * '2' – show only month and day,, * '0' – hide birth date.
         * @param $home_town string User home town.
         * @param $country_id integer User country.
         * @param $city_id integer User city.
         * @param $status string Status text.
         *
         * @return array
         *
         * @see https://vk.com/dev/account.saveProfileInfo
         */
        public function saveProfileInfo(array $parameters = [])
        {
            //
        }

        /**
         * Allows to edit the current account info.
         *
         * @param $name string Setting name.
         * @param $value string Setting value.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setInfo
         */
        public function setInfo(array $parameters = [])
        {
            //
        }

        /**
         * Sets an application screen name (up to 17 characters), that is shown to the user in the left menu.
         *
         * @param $user_id integer User ID.
         * @param $name string Application screen name.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setNameInMenu
         */
        public function setNameInMenu(array $parameters = [])
        {
            //
        }

        /**
         * Marks a current user as offline.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setOffline
         */
        public function setOffline(array $parameters = [])
        {
            //
        }

        /**
         * Marks the current user as online for 15 minutes.
         *
         * @param $voip boolean '1' if videocalls are available for current device.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setOnline
         */
        public function setOnline(array $parameters = [])
        {
            //
        }

        /**
         * Change push settings.
         *
         * @param $device_id string Unique device ID.
         * @param $settings string Push settings in a [vk.com/dev/push_settings|special format].
         * @param $key string Notification key.
         * @param $value array New value for the key in a [vk.com/dev/push_settings|special format].
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setPushSettings
         */
        public function setPushSettings(array $parameters = [])
        {
            //
        }

        /**
         * Mutes push notifications for the set period of time.
         *
         * @param $device_id string Unique device ID.
         * @param $time integer Time in seconds for what notifications should be disabled. '-1' to disable forever.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
         * @param $sound integer '1' — to enable sound in this dialog, '0' — to disable sound. Only if 'peer_id' contains user or community ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.setSilenceMode
         */
        public function setSilenceMode(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.unban
         */
        public function unban(array $parameters = [])
        {
            //
        }

        /**
         * Unsubscribes a device from push notifications.
         *
         * @param $device_id string Unique device ID.
         * @param $sandbox boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/account.unregisterDevice
         */
        public function unregisterDevice(array $parameters = [])
        {
            //
        }
    }

    class Ads
    {
        /**
         * Adds managers and/or supervisors to advertising account.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe added managers. Description of 'user_specification' objects see below.
         *
         * @return boolean
         *
         * @see https://vk.com/dev/ads.addOfficeUsers
         */
        public function addOfficeUsers(array $parameters = [])
        {
            //
        }

        /**
         * Allows to check the ad link.
         *
         * @param $account_id integer Advertising account ID.
         * @param $link_type string Object type: *'community' — community,, *'post' — community post,, *'application' — VK application,, *'video' — video,, *'site' — external site.
         * @param $link_url string Object URL.
         * @param $campaign_id integer Campaign ID
         *
         * @return int
         *
         * @see https://vk.com/dev/ads.checkLink
         */
        public function checkLink(array $parameters = [])
        {
            //
        }

        /**
         * Creates ads.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe created ads. Description of 'ad_specification' objects see below.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.createAds
         */
        public function createAds(array $parameters = [])
        {
            //
        }

        /**
         * Creates advertising campaigns.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe created campaigns. Description of 'campaign_specification' objects see below.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.createCampaigns
         */
        public function createCampaigns(array $parameters = [])
        {
            //
        }

        /**
         * Creates clients of an advertising agency.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe created campaigns. Description of 'client_specification' objects see below.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.createClients
         */
        public function createClients(array $parameters = [])
        {
            //
        }

        /**
         * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'Only for advertising agencies.', ID of the client with the advertising account where the group will be created.
         * @param $name string Name of the target group — a string up to 64 characters long.
         * @param $lifetime integer 'For groups with auditory created with pixel code only.', , Number of days after that users will be automatically removed from the group.
         * @param $target_pixel_id integer
         * @param $target_pixel_rules string
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.createTargetGroup
         */
        public function createTargetGroup(array $parameters = [])
        {
            //
        }

        /**
         * Archives ads.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids string Serialized JSON array with ad IDs.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.deleteAds
         */
        public function deleteAds(array $parameters = [])
        {
            //
        }

        /**
         * Archives advertising campaigns.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids string Serialized JSON array with IDs of deleted campaigns.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.deleteCampaigns
         */
        public function deleteCampaigns(array $parameters = [])
        {
            //
        }

        /**
         * Archives clients of an advertising agency.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids string Serialized JSON array with IDs of deleted clients.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.deleteClients
         */
        public function deleteClients(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a retarget group.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
         * @param $target_group_id integer Group ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/ads.deleteTargetGroup
         */
        public function deleteTargetGroup(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of advertising accounts.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getAccounts
         */
        public function getAccounts(array $parameters = [])
        {
            //
        }

        /**
         * Returns number of ads.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ad_ids string Filter by ads. Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.
         * @param $campaign_ids string Filter by advertising campaigns. Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.
         * @param $client_id integer 'Available and required for advertising agencies.' ID of the client ads are retrieved from.
         * @param $include_deleted boolean Flag that specifies whether archived ads shall be shown: *0 — show only active ads,, *1 — show all ads.
         * @param $limit integer Limit of number of returned ads. Used only if ad_ids parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
         * @param $offset integer Offset. Used in the same cases as 'limit' parameter.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getAds
         */
        public function getAds(array $parameters = [])
        {
            //
        }

        /**
         * Returns descriptions of ad layouts.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ad_ids string Filter by ads. Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.
         * @param $campaign_ids string Filter by advertising campaigns. Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.
         * @param $client_id integer 'For advertising agencies.' ID of the client ads are retrieved from.
         * @param $include_deleted boolean Flag that specifies whether archived ads shall be shown. *0 — show only active ads,, *1 — show all ads.
         * @param $limit integer Limit of number of returned ads. Used only if 'ad_ids' parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
         * @param $offset integer Offset. Used in the same cases as 'limit' parameter.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getAdsLayout
         */
        public function getAdsLayout(array $parameters = [])
        {
            //
        }

        /**
         * Returns ad targeting parameters.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ad_ids string Filter by ads. Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.
         * @param $campaign_ids string Filter by advertising campaigns. Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.
         * @param $client_id integer 'For advertising agencies.' ID of the client ads are retrieved from.
         * @param $include_deleted boolean flag that specifies whether archived ads shall be shown: *0 — show only active ads,, *1 — show all ads.
         * @param $limit integer Limit of number of returned ads. Used only if 'ad_ids' parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
         * @param $offset integer Offset needed to return a specific subset of results.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getAdsTargeting
         */
        public function getAdsTargeting(array $parameters = [])
        {
            //
        }

        /**
         * Returns current budget of the advertising account.
         *
         * @param $account_id integer Advertising account ID.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.getBudget
         */
        public function getBudget(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of campaigns in an advertising account.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'For advertising agencies'. ID of the client advertising campaigns are retrieved from.
         * @param $include_deleted boolean Flag that specifies whether archived ads shall be shown. *0 — show only active campaigns,, *1 — show all campaigns.
         * @param $campaign_ids string Filter of advertising campaigns to show. Serialized JSON array with campaign IDs. Only campaigns that exist in 'campaign_ids' and belong to the specified advertising account will be shown. If the parameter is null, all campaigns will be shown.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getCampaigns
         */
        public function getCampaigns(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of possible ad categories.
         *
         * @param $lang string Language. The full list of supported languages is [vk.com/dev/api_requests|here].
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getCategories
         */
        public function getCategories(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of advertising agency's clients.
         *
         * @param $account_id integer Advertising account ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getClients
         */
        public function getClients(array $parameters = [])
        {
            //
        }

        /**
         * Returns demographics for ads or campaigns.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids_type string Type of requested objects listed in 'ids' parameter: *ad — ads,, *campaign — campaigns.
         * @param $ids string IDs requested ads or campaigns, separated with a comma, depending on the value set in 'ids_type'. Maximum 2000 objects.
         * @param $period string Data grouping by dates: *day — statistics by days,, *month — statistics by months,, *overall — overall statistics. 'date_from' and 'date_to' parameters set temporary limits.
         * @param $date_from string Date to show statistics from. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — day it was created on,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — month it was created in,, *overall: 0.
         * @param $date_to string Date to show statistics to. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — current day,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — current month,, *overall: 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getDemographics
         */
        public function getDemographics(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
         *
         * @param $account_id integer Advertising account ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/ads.getFloodStats
         */
        public function getFloodStats(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of managers and supervisors of advertising account.
         *
         * @param $account_id integer Advertising account ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getOfficeUsers
         */
        public function getOfficeUsers(array $parameters = [])
        {
            //
        }

        /**
         * Returns detailed statistics of promoted posts reach from campaigns and ads.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids_type string Type of requested objects listed in 'ids' parameter: *ad — ads,, *campaign — campaigns.
         * @param $ids string IDs requested ads or campaigns, separated with a comma, depending on the value set in 'ids_type'. Maximum 100 objects.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getPostsReach
         */
        public function getPostsReach(array $parameters = [])
        {
            //
        }

        /**
         * Returns a reason of ad rejection for pre-moderation.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ad_id integer Ad ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/ads.getRejectionReason
         */
        public function getRejectionReason(array $parameters = [])
        {
            //
        }

        /**
         * Returns statistics of performance indicators for ads, campaigns, clients or the whole account.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids_type string Type of requested objects listed in 'ids' parameter: *ad — ads,, *campaign — campaigns,, *client — clients,, *office — account.
         * @param $ids string IDs requested ads, campaigns, clients or account, separated with a comma, depending on the value set in 'ids_type'. Maximum 2000 objects.
         * @param $period string Data grouping by dates: *day — statistics by days,, *month — statistics by months,, *overall — overall statistics. 'date_from' and 'date_to' parameters set temporary limits.
         * @param $date_from string Date to show statistics from. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — day it was created on,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — month it was created in,, *overall: 0.
         * @param $date_to string Date to show statistics to. For different value of 'period' different date format is used: *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011, **0 — current day,, *month: YYYY-MM, example: 2011-09 — September 2011, **0 — current month,, *overall: 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getStatistics
         */
        public function getStatistics(array $parameters = [])
        {
            //
        }

        /**
         * Returns a set of auto-suggestions for various targeting parameters.
         *
         * @param $section string Section, suggestions are retrieved in. Available values: *countries — request of a list of countries. If q is not set or blank, a short list of countries is shown. Otherwise, a full list of countries is shown. *regions — requested list of regions. 'country' parameter is required. *cities — requested list of cities. 'country' parameter is required. *districts — requested list of districts. 'cities' parameter is required. *stations — requested list of subway stations. 'cities' parameter is required. *streets — requested list of streets. 'cities' parameter is required. *schools — requested list of educational organizations. 'cities' parameter is required. *interests — requested list of interests. *positions — requested list of positions (professions). *group_types — requested list of group types. *religions — requested list of religious commitments. *browsers — requested list of browsers and mobile devices.
         * @param $ids string Objects IDs separated by commas. If the parameter is passed, 'q, country, cities' should not be passed.
         * @param $q string Filter-line of the request (for countries, regions, cities, streets, schools, interests, positions).
         * @param $country integer ID of the country objects are searched in.
         * @param $cities string IDs of cities where objects are searched in, separated with a comma.
         * @param $lang string Language of the returned string values. Supported languages: *ru — Russian,, *ua — Ukrainian,, *en — English.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getSuggestions
         */
        public function getSuggestions(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of target groups.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'Only for advertising agencies.', ID of the client with the advertising account where the group will be created.
         * @param $extended boolean '1' — to return pixel code.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.getTargetGroups
         */
        public function getTargetGroups(array $parameters = [])
        {
            //
        }

        /**
         * Returns the size of targeting audience, and also recommended values for CPC and CPM.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer
         * @param $criteria string Serialized JSON object that describes targeting parameters. Description of 'criteria' object see below.
         * @param $ad_id integer ID of an ad which targeting parameters shall be analyzed.
         * @param $ad_format integer Ad format. Possible values: *'1' — image and text,, *'2' — big image,, *'3' — exclusive format,, *'4' — community, square image,, *'7' — special app format,, *'8' — special community format,, *'9' — post in community,, *'10' — app board.
         * @param $ad_platform string Platforms to use for ad showing. Possible values: (for 'ad_format' = '1'), *'0' — VK and partner sites,, *'1' — VK only. (for 'ad_format' = '9'), *'all' — all platforms,, *'desktop' — desktop version,, *'mobile' — mobile version and apps.
         * @param $ad_platform_no_wall string
         * @param $ad_platform_no_ad_network string
         * @param $link_url string URL for the advertised object.
         * @param $link_domain string Domain of the advertised object.
         *
         * @return int
         *
         * @see https://vk.com/dev/ads.getTargetingStats
         */
        public function getTargetingStats(array $parameters = [])
        {
            //
        }

        /**
         * Returns URL to upload an ad photo to.
         *
         * @param $ad_format integer Ad format: *1 — image and text,, *2 — big image,, *3 — exclusive format,, *4 — community, square image,, *7 — special app format.
         * @param $icon integer
         *
         * @return string
         *
         * @see https://vk.com/dev/ads.getUploadURL
         */
        public function getUploadURL(array $parameters = [])
        {
            //
        }

        /**
         * Returns URL to upload an ad video to.
         *
         * @return string
         *
         * @see https://vk.com/dev/ads.getVideoUploadURL
         */
        public function getVideoUploadURL(array $parameters = [])
        {
            //
        }

        /**
         * Imports a list of advertiser's contacts to count VK registered users against the target group.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
         * @param $target_group_id integer Target group ID.
         * @param $contacts string List of phone numbers, emails or user IDs separated with a comma.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.importTargetContacts
         */
        public function importTargetContacts(array $parameters = [])
        {
            //
        }

        /**
         * Removes managers and/or supervisors from advertising account.
         *
         * @param $account_id integer Advertising account ID.
         * @param $ids string Serialized JSON array with IDs of deleted managers.
         *
         * @return boolean
         *
         * @see https://vk.com/dev/ads.removeOfficeUsers
         */
        public function removeOfficeUsers(array $parameters = [])
        {
            //
        }

        /**
         * Edits ads.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe changes in ads. Description of 'ad_edit_specification' objects see below.
         *
         * @return array
         *
         * @see https://vk.com/dev/ads.updateAds
         */
        public function updateAds(array $parameters = [])
        {
            //
        }

        /**
         * Edits advertising campaigns.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe changes in campaigns. Description of 'campaign_mod' objects see below.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.updateCampaigns
         */
        public function updateCampaigns(array $parameters = [])
        {
            //
        }

        /**
         * Edits clients of an advertising agency.
         *
         * @param $account_id integer Advertising account ID.
         * @param $data string Serialized JSON array of objects that describe changes in clients. Description of 'client_mod' objects see below.
         *
         * @return integer
         *
         * @see https://vk.com/dev/ads.updateClients
         */
        public function updateClients(array $parameters = [])
        {
            //
        }

        /**
         * Edits a retarget group.
         *
         * @param $account_id integer Advertising account ID.
         * @param $client_id integer 'Only for advertising agencies.' , ID of the client with the advertising account where the group will be created.
         * @param $target_group_id integer Group ID.
         * @param $name string New name of the target group — a string up to 64 characters long.
         * @param $domain string Domain of the site where user accounting code will be placed.
         * @param $lifetime integer 'Only for the groups that get audience from sites with user accounting code.', Time in days when users added to a retarget group will be automatically excluded from it. '0' – automatic exclusion is off.
         * @param $target_pixel_id integer
         * @param $target_pixel_rules string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/ads.updateTargetGroup
         */
        public function updateTargetGroup(array $parameters = [])
        {
            //
        }
    }

    class AppWidgets
    {
        /**
         * Allows to update community app widget
         *
         * @param $code string
         * @param $type string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/appWidgets.update
         */
        public function update(array $parameters = [])
        {
            //
        }
    }

    class Apps
    {
        /**
         * Deletes all request notifications from the current app.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/apps.deleteAppRequests
         */
        public function deleteAppRequests(array $parameters = [])
        {
            //
        }

        /**
         * Returns applications data.
         *
         * @param $app_id integer Application ID
         * @param $app_ids array List of application ID
         * @param $platform string platform. Possible values: *'ios' — iOS,, *'android' — Android,, *'winphone' — Windows Phone,, *'web' — приложения на vk.com. By default: 'web'.
         * @param $extended boolean
         * @param $return_friends boolean
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities', (only if return_friends - 1)
         * @param $name_case string Case for declension of user name and surname: 'nom' — nominative (default),, 'gen' — genitive,, 'dat' — dative,, 'acc' — accusative,, 'ins' — instrumental,, 'abl' — prepositional. (only if 'return_friends' = '1')
         *
         * @return array
         *
         * @see https://vk.com/dev/apps.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of applications (apps) available to users in the App Catalog.
         *
         * @param $sort string Sort order: 'popular_today' — popular for one day (default), 'visitors' — by visitors number , 'create_date' — by creation date, 'growth_rate' — by growth rate, 'popular_week' — popular for one week
         * @param $offset integer Offset required to return a specific subset of apps.
         * @param $count integer Number of apps to return.
         * @param $platform string
         * @param $extended boolean '1' — to return additional fields 'screenshots', 'MAU', 'catalog_position', and 'international'. If set, 'count' must be less than or equal to '100'. '0' — not to return additional fields (default).
         * @param $return_friends boolean
         * @param $fields array
         * @param $name_case string
         * @param $q string Search query string.
         * @param $genre_id integer
         * @param $filter string 'installed' — to return list of installed apps (only for mobile platform).
         *
         * @return array
         *
         * @see https://vk.com/dev/apps.getCatalog
         */
        public function getCatalog(array $parameters = [])
        {
            //
        }

        /**
         * Creates friends list for requests and invites in current app.
         *
         * @param $extended boolean
         * @param $count integer List size.
         * @param $offset integer
         * @param $type string List type. Possible values: * 'invite' — available for invites (don't play the game),, * 'request' — available for request (play the game). By default: 'invite'.
         * @param $fields array Additional profile fields, see [vk.com/dev/fields|description].
         *
         * @return array
         *
         * @see https://vk.com/dev/apps.getFriendsList
         */
        public function getFriendsList(array $parameters = [])
        {
            //
        }

        /**
         * Returns players rating in the game.
         *
         * @param $type string Leaderboard type. Possible values: *'level' — by level,, *'points' — by mission points,, *'score' — by score ().
         * @param $global boolean Rating type. Possible values: *'1' — global rating among all players,, *'0' — rating among user friends.
         * @param $extended boolean 1 — to return additional info about users
         *
         * @return array
         *
         * @see https://vk.com/dev/apps.getLeaderboard
         */
        public function getLeaderboard(array $parameters = [])
        {
            //
        }

        /**
         * Returns scopes for auth
         *
         * @param $type string
         *
         * @return array
         *
         * @see https://vk.com/dev/apps.getScopes
         */
        public function getScopes(array $parameters = [])
        {
            //
        }

        /**
         * Returns user score in app
         *
         * @param $user_id integer
         *
         * @return integer
         *
         * @see https://vk.com/dev/apps.getScore
         */
        public function getScore(array $parameters = [])
        {
            //
        }

        /**
         * Sends a request to another user in an app that uses VK authorization.
         *
         * @param $user_id integer id of the user to send a request
         * @param $text string request text
         * @param $type string request type. Values: 'invite' – if the request is sent to a user who does not have the app installed,, 'request' – if a user has already installed the app
         * @param $name string
         * @param $key string special string key to be sent with the request
         * @param $separate boolean
         *
         * @return integer
         *
         * @see https://vk.com/dev/apps.sendRequest
         */
        public function sendRequest(array $parameters = [])
        {
            //
        }
    }

    class Auth
    {
        /**
         * Checks a user's phone number for correctness.
         *
         * @param $phone string Phone number.
         * @param $client_id integer User ID.
         * @param $client_secret string
         * @param $auth_by_phone boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/auth.checkPhone
         */
        public function checkPhone(array $parameters = [])
        {
            //
        }

        /**
         * Allows to restore account access using a code received via SMS. " This method is only available for apps with [vk.com/dev/auth_direct|Direct authorization] access. "
         *
         * @param $phone string User phone number.
         * @param $last_name string User last name.
         *
         * @return array
         *
         * @see https://vk.com/dev/auth.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }
    }

    class Board
    {
        /**
         * Creates a new topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $title string Topic title.
         * @param $text string Text of the topic.
         * @param $from_group boolean For a community: '1' — to post the topic as by the community, '0' — to post the topic as by the user (default)
         * @param $attachments array List of media objects attached to the topic, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID. Example: "photo100172_166443618,photo66748_265827614", , "NOTE: If you try to attach more than one reference, an error will be thrown.",
         *
         * @return integer
         *
         * @see https://vk.com/dev/board.addTopic
         */
        public function addTopic(array $parameters = [])
        {
            //
        }

        /**
         * Closes a topic on a community's discussion board so that comments cannot be posted.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.closeTopic
         */
        public function closeTopic(array $parameters = [])
        {
            //
        }

        /**
         * Adds a comment on a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer ID of the topic to be commented on.
         * @param $message string (Required if 'attachments' is not set.) Text of the comment.
         * @param $attachments array (Required if 'text' is not set.) List of media objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID.
         * @param $from_group boolean '1' — to post the comment as by the community, '0' — to post the comment as by the user (default)
         * @param $sticker_id integer Sticker ID.
         * @param $guid string Unique identifier to avoid repeated comments.
         *
         * @return integer
         *
         * @see https://vk.com/dev/board.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a comment on a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         * @param $comment_id integer Comment ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a topic from a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.deleteTopic
         */
        public function deleteTopic(array $parameters = [])
        {
            //
        }

        /**
         * Edits a comment on a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         * @param $comment_id integer ID of the comment on the topic.
         * @param $message string (Required if 'attachments' is not set). New comment text.
         * @param $attachments array (Required if 'message' is not set.) List of media objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID. Example: "photo100172_166443618,photo66748_265827614"
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits the title of a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         * @param $title string New title of the topic.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.editTopic
         */
        public function editTopic(array $parameters = [])
        {
            //
        }

        /**
         * Pins a topic (fixes its place) to the top of a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.fixTopic
         */
        public function fixTopic(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         * @param $need_likes boolean '1' — to return the 'likes' field, '0' — not to return the 'likes' field (default)
         * @param $start_comment_id integer
         * @param $offset integer Offset needed to return a specific subset of comments.
         * @param $count integer Number of comments to return.
         * @param $extended boolean '1' — to return information about users who posted comments, '0' — to return no additional fields (default)
         * @param $sort string Sort order: 'asc' — by creation date in chronological order, 'desc' — by creation date in reverse chronological order,
         *
         * @return array
         *
         * @see https://vk.com/dev/board.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of topics on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_ids array IDs of topics to be returned (100 maximum). By default, all topics are returned. If this parameter is set, the 'order', 'offset', and 'count' parameters are ignored.
         * @param $order integer Sort order: '1' — by date updated in reverse chronological order. '2' — by date created in reverse chronological order. '-1' — by date updated in chronological order. '-2' — by date created in chronological order. If no sort order is specified, topics are returned in the order specified by the group administrator. Pinned topics are returned first, regardless of the sorting.
         * @param $offset integer Offset needed to return a specific subset of topics.
         * @param $count integer Number of topics to return.
         * @param $extended boolean '1' — to return information about users who created topics or who posted there last, '0' — to return no additional fields (default)
         * @param $preview integer '1' — to return the first comment in each topic,, '2' — to return the last comment in each topic,, '0' — to return no comments. By default: '0'.
         * @param $preview_length integer Number of characters after which to truncate the previewed comment. To preview the full comment, specify '0'.
         *
         * @return array
         *
         * @see https://vk.com/dev/board.getTopics
         */
        public function getTopics(array $parameters = [])
        {
            //
        }

        /**
         * Re-opens a previously closed topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.openTopic
         */
        public function openTopic(array $parameters = [])
        {
            //
        }

        /**
         * Restores a comment deleted from a topic on a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         * @param $comment_id integer Comment ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }

        /**
         * Unpins a pinned topic from the top of a community's discussion board.
         *
         * @param $group_id integer ID of the community that owns the discussion board.
         * @param $topic_id integer Topic ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/board.unfixTopic
         */
        public function unfixTopic(array $parameters = [])
        {
            //
        }
    }

    class Database
    {
        /**
         * Returns list of chairs on a specified faculty.
         *
         * @param $faculty_id integer id of the faculty to get chairs from
         * @param $offset integer offset required to get a certain subset of chairs
         * @param $count integer amount of chairs to get
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getChairs
         */
        public function getChairs(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of cities.
         *
         * @param $country_id integer Country ID.
         * @param $region_id integer Region ID.
         * @param $q string Search query.
         * @param $need_all boolean '1' — to return all cities in the country, '0' — to return major cities in the country (default),
         * @param $offset integer Offset needed to return a specific subset of cities.
         * @param $count integer Number of cities to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getCities
         */
        public function getCities(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about cities by their IDs.
         *
         * @param $city_ids array City IDs.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getCitiesById
         */
        public function getCitiesById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of countries.
         *
         * @param $need_all boolean '1' — to return a full list of all countries, '0' — to return a list of countries near the current user's country (default).
         * @param $code string Country codes in [vk.com/dev/country_codes|ISO 3166-1 alpha-2] standard.
         * @param $offset integer Offset needed to return a specific subset of countries.
         * @param $count integer Number of countries to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getCountries
         */
        public function getCountries(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about countries by their IDs.
         *
         * @param $country_ids array Country IDs.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getCountriesById
         */
        public function getCountriesById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of faculties (i.e., university departments).
         *
         * @param $university_id integer University ID.
         * @param $offset integer Offset needed to return a specific subset of faculties.
         * @param $count integer Number of faculties to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getFaculties
         */
        public function getFaculties(array $parameters = [])
        {
            //
        }

        /**
         * Get metro stations by city
         *
         * @param $city_id integer
         * @param $offset integer
         * @param $count integer
         * @param $extended boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getMetroStations
         */
        public function getMetroStations(array $parameters = [])
        {
            //
        }

        /**
         * Get metro station by his id
         *
         * @param $station_ids array
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getMetroStationsById
         */
        public function getMetroStationsById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of regions.
         *
         * @param $country_id integer Country ID, received in [vk.com/dev/database.getCountries|database.getCountries] method.
         * @param $q string Search query.
         * @param $offset integer Offset needed to return specific subset of regions.
         * @param $count integer Number of regions to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getRegions
         */
        public function getRegions(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of school classes specified for the country.
         *
         * @param $country_id integer Country ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getSchoolClasses
         */
        public function getSchoolClasses(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of schools.
         *
         * @param $q string Search query.
         * @param $city_id integer City ID.
         * @param $offset integer Offset needed to return a specific subset of schools.
         * @param $count integer Number of schools to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getSchools
         */
        public function getSchools(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of higher education institutions.
         *
         * @param $q string Search query.
         * @param $country_id integer Country ID.
         * @param $city_id integer City ID.
         * @param $offset integer Offset needed to return a specific subset of universities.
         * @param $count integer Number of universities to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/database.getUniversities
         */
        public function getUniversities(array $parameters = [])
        {
            //
        }
    }

    class Docs
    {
        /**
         * Copies a document to a user's or community's document list.
         *
         * @param $owner_id integer ID of the user or community that owns the document. Use a negative value to designate a community ID.
         * @param $doc_id integer Document ID.
         * @param $access_key string Access key. This parameter is required if 'access_key' was returned with the document's data.
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a user or community document.
         *
         * @param $owner_id integer ID of the user or community that owns the document. Use a negative value to designate a community ID.
         * @param $doc_id integer Document ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/docs.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Edits a document.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $doc_id integer Document ID.
         * @param $title string Document title.
         * @param $tags array Document tags.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/docs.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Returns detailed information about user or community documents.
         *
         * @param $count integer Number of documents to return. By default, all documents.
         * @param $offset integer Offset needed to return a specific subset of documents.
         * @param $type integer
         * @param $owner_id integer ID of the user or community that owns the documents. Use a negative value to designate a community ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about documents by their IDs.
         *
         * @param $docs array Document IDs. Example: , "66748_91488,66748_91455",
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for document upload.
         *
         * @param $type string Document type.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
         *
         * @return mixed
         *
         * @see https://vk.com/dev/docs.getMessagesUploadServer
         */
        public function getMessagesUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns documents types available for current user.
         *
         * @param $owner_id integer ID of the user or community that owns the documents. Use a negative value to designate a community ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.getTypes
         */
        public function getTypes(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for document upload.
         *
         * @param $group_id integer Community ID (if the document will be uploaded to the community).
         *
         * @return mixed
         *
         * @see https://vk.com/dev/docs.getUploadServer
         */
        public function getUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for document upload onto a user's or community's wall.
         *
         * @param $group_id integer Community ID (if the document will be uploaded to the community).
         *
         * @return mixed
         *
         * @see https://vk.com/dev/docs.getWallUploadServer
         */
        public function getWallUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Saves a document after [vk.com/dev/upload_files_2|uploading it to a server].
         *
         * @param $file string This parameter is returned when the file is [vk.com/dev/upload_files_2|uploaded to the server].
         * @param $title string Document title.
         * @param $tags string Document tags.
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.save
         */
        public function save(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of documents matching the search criteria.
         *
         * @param $q string Search query string.
         * @param $search_own boolean
         * @param $count integer Number of results to return.
         * @param $offset integer Offset needed to return a specific subset of results.
         *
         * @return array
         *
         * @see https://vk.com/dev/docs.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Fave
    {
        /**
         * @param $url string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addArticle
         */
        public function addArticle(array $parameters = [])
        {
            //
        }

        /**
         * Adds a link to user faves.
         *
         * @param $link string Link URL.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addLink
         */
        public function addLink(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addPage
         */
        public function addPage(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $id integer
         * @param $access_key string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addPost
         */
        public function addPost(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $id integer
         * @param $access_key string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addProduct
         */
        public function addProduct(array $parameters = [])
        {
            //
        }

        /**
         * @param $name string
         *
         * @return int
         *
         * @see https://vk.com/dev/fave.addTag
         */
        public function addTag(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $id integer
         * @param $access_key string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.addVideo
         */
        public function addVideo(array $parameters = [])
        {
            //
        }

        /**
         * @param $id integer
         * @param $name string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.editTag
         */
        public function editTag(array $parameters = [])
        {
            //
        }

        /**
         * @param $extended boolean '1' — to return additional 'wall', 'profiles', and 'groups' fields. By default: '0'.
         * @param $item_type string
         * @param $tag_id integer Tag ID.
         * @param $offset integer Offset needed to return a specific subset of users.
         * @param $count integer Number of users to return.
         * @param $fields string
         * @param $is_from_snackbar boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/fave.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * @param $offset integer
         * @param $count integer
         * @param $type string
         * @param $fields array
         * @param $tag_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/fave.getPages
         */
        public function getPages(array $parameters = [])
        {
            //
        }

        /**
         * @return array
         *
         * @see https://vk.com/dev/fave.getTags
         */
        public function getTags(array $parameters = [])
        {
            //
        }

        /**
         * @return mixed
         *
         * @see https://vk.com/dev/fave.markSeen
         */
        public function markSeen(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $article_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removeArticle
         */
        public function removeArticle(array $parameters = [])
        {
            //
        }

        /**
         * Removes link from the user's faves.
         *
         * @param $link_id string Link ID (can be obtained by [vk.com/dev/faves.getLinks|faves.getLinks] method).
         * @param $link string Link URL
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removeLink
         */
        public function removeLink(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removePage
         */
        public function removePage(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removePost
         */
        public function removePost(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removeProduct
         */
        public function removeProduct(array $parameters = [])
        {
            //
        }

        /**
         * @param $id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.removeTag
         */
        public function removeTag(array $parameters = [])
        {
            //
        }

        /**
         * @param $ids array
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.reorderTags
         */
        public function reorderTags(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $group_id integer
         * @param $tag_ids array
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.setPageTags
         */
        public function setPageTags(array $parameters = [])
        {
            //
        }

        /**
         * @param $item_type string
         * @param $item_owner_id integer
         * @param $item_id integer
         * @param $tag_ids array
         * @param $link_id string
         * @param $link_url string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.setTags
         */
        public function setTags(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/fave.trackPageInteraction
         */
        public function trackPageInteraction(array $parameters = [])
        {
            //
        }
    }

    class Friends
    {
        /**
         * Approves or creates a friend request.
         *
         * @param $user_id integer ID of the user whose friend request will be approved or to whom a friend request will be sent.
         * @param $text string Text of the message (up to 500 characters) for the friend request, if any.
         * @param $follow boolean '1' to pass an incoming request to followers list.
         *
         * @return integer
         *
         * @see https://vk.com/dev/friends.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Creates a new friend list for the current user.
         *
         * @param $name string Name of the friend list.
         * @param $user_ids array IDs of users to be added to the friend list.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.addList
         */
        public function addList(array $parameters = [])
        {
            //
        }

        /**
         * Checks the current user's friendship status with other specified users.
         *
         * @param $user_ids array IDs of the users whose friendship status to check.
         * @param $need_sign boolean '1' — to return 'sign' field. 'sign' is md5("{id}_{user_id}_{friends_status}_{application_secret}"), where id is current user ID. This field allows to check that data has not been modified by the client. By default: '0'.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.areFriends
         */
        public function areFriends(array $parameters = [])
        {
            //
        }

        /**
         * Declines a friend request or deletes a user from the current user's friend list.
         *
         * @param $user_id integer ID of the user whose friend request is to be declined or who is to be deleted from the current user's friend list.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Marks all incoming friend requests as viewed.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/friends.deleteAllRequests
         */
        public function deleteAllRequests(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a friend list of the current user.
         *
         * @param $list_id integer ID of the friend list to delete.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/friends.deleteList
         */
        public function deleteList(array $parameters = [])
        {
            //
        }

        /**
         * Edits the friend lists of the selected user.
         *
         * @param $user_id integer ID of the user whose friend list is to be edited.
         * @param $list_ids array IDs of the friend lists to which to add the user.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/friends.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits a friend list of the current user.
         *
         * @param $name string Name of the friend list.
         * @param $list_id integer Friend list ID.
         * @param $user_ids array IDs of users in the friend list.
         * @param $add_user_ids array (Applies if 'user_ids' parameter is not set.), User IDs to add to the friend list.
         * @param $delete_user_ids array (Applies if 'user_ids' parameter is not set.), User IDs to delete from the friend list.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/friends.editList
         */
        public function editList(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of user IDs or detailed information about a user's friends.
         *
         * @param $user_id integer User ID. By default, the current user ID.
         * @param $order string Sort order: , 'name' — by name (enabled only if the 'fields' parameter is used), 'hints' — by rating, similar to how friends are sorted in My friends section, , This parameter is available only for [vk.com/dev/standalone|desktop applications].
         * @param $list_id integer ID of the friend list returned by the [vk.com/dev/friends.getLists|friends.getLists] method to be used as the source. This parameter is taken into account only when the uid parameter is set to the current user ID. This parameter is available only for [vk.com/dev/standalone|desktop applications].
         * @param $count integer Number of friends to return.
         * @param $offset integer Offset needed to return a specific subset of friends.
         * @param $fields array Profile fields to return. Sample values: 'uid', 'first_name', 'last_name', 'nickname', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'domain', 'has_mobile', 'rate', 'contacts', 'education'.
         * @param $name_case string Case for declension of user name and surname: , 'nom' — nominative (default) , 'gen' — genitive , 'dat' — dative , 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         * @param $ref string
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of the current user's friends who installed the application.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getAppUsers
         */
        public function getAppUsers(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
         *
         * @param $phones array List of phone numbers in MSISDN format (maximum 1000). Example: "+79219876543,+79111234567"
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getByPhones
         */
        public function getByPhones(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the user's friend lists.
         *
         * @param $user_id integer User ID.
         * @param $return_system boolean '1' — to return system friend lists. By default: '0'.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getLists
         */
        public function getLists(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of user IDs of the mutual friends of two users.
         *
         * @param $source_uid integer ID of the user whose friends will be checked against the friends of the user specified in 'target_uid'.
         * @param $target_uid integer ID of the user whose friends will be checked against the friends of the user specified in 'source_uid'.
         * @param $target_uids array IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
         * @param $order string Sort order: 'random' — random order
         * @param $count integer Number of mutual friends to return.
         * @param $offset integer Offset needed to return a specific subset of mutual friends.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getMutual
         */
        public function getMutual(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of user IDs of a user's friends who are online.
         *
         * @param $user_id integer User ID.
         * @param $list_id integer Friend list ID. If this parameter is not set, information about all online friends is returned.
         * @param $online_mobile boolean '1' — to return an additional 'online_mobile' field, '0' — (default),
         * @param $order string Sort order: 'random' — random order
         * @param $count integer Number of friends to return.
         * @param $offset integer Offset needed to return a specific subset of friends.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getOnline
         */
        public function getOnline(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of user IDs of the current user's recently added friends.
         *
         * @param $count integer Number of recently added friends to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getRecent
         */
        public function getRecent(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about the current user's incoming and outgoing friend requests.
         *
         * @param $offset integer Offset needed to return a specific subset of friend requests.
         * @param $count integer Number of friend requests to return (default 100, maximum 1000).
         * @param $extended boolean '1' — to return response messages from users who have sent a friend request or, if 'suggested' is set to '1', to return a list of suggested friends
         * @param $need_mutual boolean '1' — to return a list of mutual friends (up to 20), if any
         * @param $out boolean '1' — to return outgoing requests, '0' — to return incoming requests (default)
         * @param $sort integer Sort order: '1' — by number of mutual friends, '0' — by date
         * @param $need_viewed boolean
         * @param $suggested boolean '1' — to return a list of suggested friends, '0' — to return friend requests (default)
         * @param $ref string
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getRequests
         */
        public function getRequests(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of profiles of users whom the current user may know.
         *
         * @param $filter array Types of potential friends to return: 'mutual' — users with many mutual friends , 'contacts' — users found with the [vk.com/dev/account.importContacts|account.importContacts] method , 'mutual_contacts' — users who imported the same contacts as the current user with the [vk.com/dev/account.importContacts|account.importContacts] method
         * @param $count integer Number of suggestions to return.
         * @param $offset integer Offset needed to return a specific subset of suggestions.
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.
         * @param $name_case string Case for declension of user name and surname: , 'nom' — nominative (default) , 'gen' — genitive , 'dat' — dative , 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.getSuggestions
         */
        public function getSuggestions(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of friends matching the search criteria.
         *
         * @param $user_id integer User ID.
         * @param $q string Search query string (e.g., 'Vasya Babich').
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online',
         * @param $name_case string Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         * @param $offset integer Offset needed to return a specific subset of friends.
         * @param $count integer Number of friends to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/friends.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Gifts
    {
        /**
         * Returns a list of user gifts.
         *
         * @param $user_id integer User ID.
         * @param $count integer Number of gifts to return.
         * @param $offset integer Offset needed to return a specific subset of results.
         *
         * @return array
         *
         * @see https://vk.com/dev/gifts.get
         */
        public function get(array $parameters = [])
        {
            //
        }
    }

    class Groups
    {
        /**
         * @param $group_id integer
         * @param $title string
         * @param $address string
         * @param $additional_address string
         * @param $country_id integer
         * @param $city_id integer
         * @param $metro_id integer
         * @param $latitude number
         * @param $longitude number
         * @param $phone string
         * @param $work_info_status string
         * @param $timetable string
         * @param $is_main_address boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.addAddress
         */
        public function addAddress(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $url string
         * @param $title string
         * @param $secret_key string
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.addCallbackServer
         */
        public function addCallbackServer(array $parameters = [])
        {
            //
        }

        /**
         * Allows to add a link to the community.
         *
         * @param $group_id integer Community ID.
         * @param $link string Link URL.
         * @param $text string Description text for the link.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.addLink
         */
        public function addLink(array $parameters = [])
        {
            //
        }

        /**
         * Allows to approve join request to the community.
         *
         * @param $group_id integer Community ID.
         * @param $user_id integer User ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.approveRequest
         */
        public function approveRequest(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $owner_id integer
         * @param $end_date integer
         * @param $reason integer
         * @param $comment string
         * @param $comment_visible boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.ban
         */
        public function ban(array $parameters = [])
        {
            //
        }

        /**
         * Creates a new community.
         *
         * @param $title string Community title.
         * @param $description string Community description (ignored for 'type' = 'public').
         * @param $type string Community type. Possible values: *'group' – group,, *'event' – event,, *'public' – public page
         * @param $public_category integer Category ID (for 'type' = 'public' only).
         * @param $subtype integer Public page subtype. Possible values: *'1' – place or small business,, *'2' – company, organization or website,, *'3' – famous person or group of people,, *'4' – product or work of art.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.create
         */
        public function create(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $server_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.deleteCallbackServer
         */
        public function deleteCallbackServer(array $parameters = [])
        {
            //
        }

        /**
         * Allows to delete a link from the community.
         *
         * @param $group_id integer Community ID.
         * @param $link_id integer Link ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.deleteLink
         */
        public function deleteLink(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.disableOnline
         */
        public function disableOnline(array $parameters = [])
        {
            //
        }

        /**
         * Edits a community.
         *
         * @param $group_id integer Community ID.
         * @param $title string Community title.
         * @param $description string Community description.
         * @param $screen_name string Community screen name.
         * @param $access integer Community type. Possible values: *'0' – open,, *'1' – closed,, *'2' – private.
         * @param $website string Website that will be displayed in the community information field.
         * @param $subject string Community subject. Possible values: , *'1' – auto/moto,, *'2' – activity holidays,, *'3' – business,, *'4' – pets,, *'5' – health,, *'6' – dating and communication, , *'7' – games,, *'8' – IT (computers and software),, *'9' – cinema,, *'10' – beauty and fashion,, *'11' – cooking,, *'12' – art and culture,, *'13' – literature,, *'14' – mobile services and internet,, *'15' – music,, *'16' – science and technology,, *'17' – real estate,, *'18' – news and media,, *'19' – security,, *'20' – education,, *'21' – home and renovations,, *'22' – politics,, *'23' – food,, *'24' – industry,, *'25' – travel,, *'26' – work,, *'27' – entertainment,, *'28' – religion,, *'29' – family,, *'30' – sports,, *'31' – insurance,, *'32' – television,, *'33' – goods and services,, *'34' – hobbies,, *'35' – finance,, *'36' – photo,, *'37' – esoterics,, *'38' – electronics and appliances,, *'39' – erotic,, *'40' – humor,, *'41' – society, humanities,, *'42' – design and graphics.
         * @param $email string Organizer email (for events).
         * @param $phone string Organizer phone number (for events).
         * @param $rss string RSS feed address for import (available only to communities with special permission. Contact vk.com/support to get it.
         * @param $event_start_date integer Event start date in Unixtime format.
         * @param $event_finish_date integer Event finish date in Unixtime format.
         * @param $event_group_id integer Organizer community ID (for events only).
         * @param $public_category integer Public page category ID.
         * @param $public_subcategory integer Public page subcategory ID.
         * @param $public_date string Founding date of a company or organization owning the community in "dd.mm.YYYY" format.
         * @param $wall integer Wall settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (groups and events only),, *'3' – closed (groups and events only).
         * @param $topics integer Board topics settings. Possbile values: , *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $photos integer Photos settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $video integer Video settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $audio integer Audio settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $links boolean Links settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $events boolean Events settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $places boolean Places settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $contacts boolean Contacts settings (for public pages only). Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $docs integer Documents settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $wiki integer Wiki pages settings. Possible values: *'0' – disabled,, *'1' – open,, *'2' – limited (for groups and events only).
         * @param $messages boolean Community messages. Possible values: *'0' — disabled,, *'1' — enabled.
         * @param $articles boolean
         * @param $addresses boolean
         * @param $age_limits integer Community age limits. Possible values: *'1' — no limits,, *'2' — 16+,, *'3' — 18+.
         * @param $market boolean Market settings. Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $market_comments boolean market comments settings. Possible values: *'0' – disabled,, *'1' – enabled.
         * @param $market_country array Market delivery countries.
         * @param $market_city array Market delivery cities (if only one country is specified).
         * @param $market_currency integer Market currency settings. Possbile values: , *'643' – Russian rubles,, *'980' – Ukrainian hryvnia,, *'398' – Kazakh tenge,, *'978' – Euro,, *'840' – US dollars
         * @param $market_contact integer Seller contact for market. Set '0' for community messages.
         * @param $market_wiki integer ID of a wiki page with market description.
         * @param $obscene_filter boolean Obscene expressions filter in comments. Possible values: , *'0' – disabled,, *'1' – enabled.
         * @param $obscene_stopwords boolean Stopwords filter in comments. Possible values: , *'0' – disabled,, *'1' – enabled.
         * @param $obscene_words array Keywords for stopwords filter.
         * @param $main_section integer
         * @param $secondary_section integer
         * @param $country integer Country of the community.
         * @param $city integer City of the community.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $address_id integer
         * @param $title string
         * @param $address string
         * @param $additional_address string
         * @param $country_id integer
         * @param $city_id integer
         * @param $metro_id integer
         * @param $latitude number
         * @param $longitude number
         * @param $phone string
         * @param $work_info_status string
         * @param $timetable string
         * @param $is_main_address boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.editAddress
         */
        public function editAddress(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $server_id integer
         * @param $url string
         * @param $title string
         * @param $secret_key string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.editCallbackServer
         */
        public function editCallbackServer(array $parameters = [])
        {
            //
        }

        /**
         * Allows to edit a link in the community.
         *
         * @param $group_id integer Community ID.
         * @param $link_id integer Link ID.
         * @param $text string New description text for the link.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.editLink
         */
        public function editLink(array $parameters = [])
        {
            //
        }

        /**
         * Allows to add, remove or edit the community manager.
         *
         * @param $group_id integer Community ID.
         * @param $user_id integer User ID.
         * @param $role string Manager role. Possible values: *'moderator',, *'editor',, *'administrator'.
         * @param $is_contact boolean '1' — to show the manager in Contacts block of the community.
         * @param $contact_position string Position to show in Contacts block.
         * @param $contact_phone string Contact phone.
         * @param $contact_email string Contact e-mail.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.editManager
         */
        public function editManager(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.enableOnline
         */
        public function enableOnline(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the communities to which a user belongs.
         *
         * @param $user_id integer User ID.
         * @param $extended boolean '1' — to return complete information about a user's communities, '0' — to return a list of community IDs without any additional fields (default),
         * @param $filter array Types of communities to return: 'admin' — to return communities administered by the user , 'editor' — to return communities where the user is an administrator or editor, 'moder' — to return communities where the user is an administrator, editor, or moderator, 'groups' — to return only groups, 'publics' — to return only public pages, 'events' — to return only events
         * @param $fields array Profile fields to return.
         * @param $offset integer Offset needed to return a specific subset of communities.
         * @param $count integer Number of communities to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of community addresses.
         *
         * @param $group_id integer ID or screen name of the community.
         * @param $address_ids array
         * @param $latitude number Latitude of  the user geo position.
         * @param $longitude number Longitude of the user geo position.
         * @param $offset integer Offset needed to return a specific subset of community addresses.
         * @param $count integer Number of community addresses to return.
         * @param $fields array Address fields
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getAddresses
         */
        public function getAddresses(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of users on a community blacklist.
         *
         * @param $group_id integer Community ID.
         * @param $offset integer Offset needed to return a specific subset of users.
         * @param $count integer Number of users to return.
         * @param $fields array
         * @param $owner_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getBanned
         */
        public function getBanned(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about communities by their IDs.
         *
         * @param $group_ids array IDs or screen names of communities.
         * @param $group_id string ID or screen name of the community.
         * @param $fields array Group fields to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns Callback API confirmation code for the community.
         *
         * @param $group_id integer Community ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getCallbackConfirmationCode
         */
        public function getCallbackConfirmationCode(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $server_ids array
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getCallbackServers
         */
        public function getCallbackServers(array $parameters = [])
        {
            //
        }

        /**
         * Returns [vk.com/dev/callback_api|Callback API] notifications settings.
         *
         * @param $group_id integer Community ID.
         * @param $server_id integer Server ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.getCallbackSettings
         */
        public function getCallbackSettings(array $parameters = [])
        {
            //
        }

        /**
         * Returns communities list for a catalog category.
         *
         * @param $category_id integer Category id received from [vk.com/dev/groups.getCatalogInfo|groups.getCatalogInfo].
         * @param $subcategory_id integer Subcategory id received from [vk.com/dev/groups.getCatalogInfo|groups.getCatalogInfo].
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getCatalog
         */
        public function getCatalog(array $parameters = [])
        {
            //
        }

        /**
         * Returns categories list for communities catalog
         *
         * @param $extended boolean 1 – to return communities count and three communities for preview. By default: 0.
         * @param $subcategories boolean 1 – to return subcategories info. By default: 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getCatalogInfo
         */
        public function getCatalogInfo(array $parameters = [])
        {
            //
        }

        /**
         * Returns invited users list of a community
         *
         * @param $group_id integer Group ID to return invited users for.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of results to return.
         * @param $fields array List of additional fields to be returned. Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
         * @param $name_case string Case for declension of user name and surname. Possible values: *'nom' — nominative (default),, *'gen' — genitive,, *'dat' — dative,, *'acc' — accusative, , *'ins' — instrumental,, *'abl' — prepositional.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getInvitedUsers
         */
        public function getInvitedUsers(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of invitations to join communities and events.
         *
         * @param $offset integer Offset needed to return a specific subset of invitations.
         * @param $count integer Number of invitations to return.
         * @param $extended boolean '1' — to return additional [vk.com/dev/fields_groups|fields] for communities..
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getInvites
         */
        public function getInvites(array $parameters = [])
        {
            //
        }

        /**
         * Returns the data needed to query a Long Poll server for events
         *
         * @param $group_id integer Community ID
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.getLongPollServer
         */
        public function getLongPollServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns Long Poll notification settings
         *
         * @param $group_id integer Community ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.getLongPollSettings
         */
        public function getLongPollSettings(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of community members.
         *
         * @param $group_id string ID or screen name of the community.
         * @param $sort string Sort order. Available values: 'id_asc', 'id_desc', 'time_asc', 'time_desc'. 'time_asc' and 'time_desc' are availavle only if the method is called by the group's 'moderator'.
         * @param $offset integer Offset needed to return a specific subset of community members.
         * @param $count integer Number of community members to return.
         * @param $fields array List of additional fields to be returned. Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
         * @param $filter string *'friends' – only friends in this community will be returned,, *'unsure' – only those who pressed 'I may attend' will be returned (if it's an event).
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getMembers
         */
        public function getMembers(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of requests to the community.
         *
         * @param $group_id integer Community ID.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of results to return.
         * @param $fields array Profile fields to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.getRequests
         */
        public function getRequests(array $parameters = [])
        {
            //
        }

        /**
         * Returns community settings.
         *
         * @param $group_id integer Community ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.getSettings
         */
        public function getSettings(array $parameters = [])
        {
            //
        }

        /**
         * @return array
         *
         * @see https://vk.com/dev/groups.getTokenPermissions
         */
        public function getTokenPermissions(array $parameters = [])
        {
            //
        }

        /**
         * Allows to invite friends to the community.
         *
         * @param $group_id integer Community ID.
         * @param $user_id integer User ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.invite
         */
        public function invite(array $parameters = [])
        {
            //
        }

        /**
         * Returns information specifying whether a user is a member of a community.
         *
         * @param $group_id string ID or screen name of the community.
         * @param $user_id integer User ID.
         * @param $user_ids array User IDs.
         * @param $extended boolean '1' — to return an extended response with additional fields. By default: '0'.
         *
         * @return int
         *
         * @see https://vk.com/dev/groups.isMember
         */
        public function isMember(array $parameters = [])
        {
            //
        }

        /**
         * With this method you can join the group or public page, and also confirm your participation in an event.
         *
         * @param $group_id integer ID or screen name of the community.
         * @param $not_sure string Optional parameter which is taken into account when 'gid' belongs to the event: '1' — Perhaps I will attend, '0' — I will be there for sure (default), ,
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.join
         */
        public function join(array $parameters = [])
        {
            //
        }

        /**
         * With this method you can leave a group, public page, or event.
         *
         * @param $group_id integer ID or screen name of the community.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.leave
         */
        public function leave(array $parameters = [])
        {
            //
        }

        /**
         * Removes a user from the community.
         *
         * @param $group_id integer Community ID.
         * @param $user_id integer User ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.removeUser
         */
        public function removeUser(array $parameters = [])
        {
            //
        }

        /**
         * Allows to reorder links in the community.
         *
         * @param $group_id integer Community ID.
         * @param $link_id integer Link ID.
         * @param $after integer ID of the link after which to place the link with 'link_id'.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.reorderLink
         */
        public function reorderLink(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of communities matching the search criteria.
         *
         * @param $q string Search query string.
         * @param $type string Community type. Possible values: 'group, page, event.'
         * @param $country_id integer Country ID.
         * @param $city_id integer City ID. If this parameter is transmitted, country_id is ignored.
         * @param $future boolean '1' — to return only upcoming events. Works with the 'type' = 'event' only.
         * @param $market boolean '1' — to return communities with enabled market only.
         * @param $sort integer Sort order. Possible values: *'0' — default sorting (similar the full version of the site),, *'1' — by growth speed,, *'2'— by the "day attendance/members number" ratio,, *'3' — by the "Likes number/members number" ratio,, *'4' — by the "comments number/members number" ratio,, *'5' — by the "boards entries number/members number" ratio.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of communities to return. "Note that you can not receive more than first thousand of results, regardless of 'count' and 'offset' values."
         *
         * @return array
         *
         * @see https://vk.com/dev/groups.search
         */
        public function search(array $parameters = [])
        {
            //
        }

        /**
         * Allow to set notifications settings for group.
         *
         * @param $group_id integer Community ID.
         * @param $server_id integer Server ID.
         * @param $api_version string
         * @param $message_new boolean A new incoming message has been received ('0' — disabled, '1' — enabled).
         * @param $message_reply boolean A new outcoming message has been received ('0' — disabled, '1' — enabled).
         * @param $message_allow boolean Allowed messages notifications ('0' — disabled, '1' — enabled).
         * @param $message_edit boolean
         * @param $message_deny boolean Denied messages notifications ('0' — disabled, '1' — enabled).
         * @param $message_typing_state boolean
         * @param $photo_new boolean New photos notifications ('0' — disabled, '1' — enabled).
         * @param $audio_new boolean New audios notifications ('0' — disabled, '1' — enabled).
         * @param $video_new boolean New videos notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_new boolean New wall replies notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_edit boolean Wall replies edited notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_delete boolean A wall comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $wall_reply_restore boolean A wall comment has been restored ('0' — disabled, '1' — enabled).
         * @param $wall_post_new boolean New wall posts notifications ('0' — disabled, '1' — enabled).
         * @param $wall_repost boolean New wall posts notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_new boolean New board posts notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_edit boolean Board posts edited notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_restore boolean Board posts restored notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_delete boolean Board posts deleted notifications ('0' — disabled, '1' — enabled).
         * @param $photo_comment_new boolean New comment to photo notifications ('0' — disabled, '1' — enabled).
         * @param $photo_comment_edit boolean A photo comment has been edited ('0' — disabled, '1' — enabled).
         * @param $photo_comment_delete boolean A photo comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $photo_comment_restore boolean A photo comment has been restored ('0' — disabled, '1' — enabled).
         * @param $video_comment_new boolean New comment to video notifications ('0' — disabled, '1' — enabled).
         * @param $video_comment_edit boolean A video comment has been edited ('0' — disabled, '1' — enabled).
         * @param $video_comment_delete boolean A video comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $video_comment_restore boolean A video comment has been restored ('0' — disabled, '1' — enabled).
         * @param $market_comment_new boolean New comment to market item notifications ('0' — disabled, '1' — enabled).
         * @param $market_comment_edit boolean A market comment has been edited ('0' — disabled, '1' — enabled).
         * @param $market_comment_delete boolean A market comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $market_comment_restore boolean A market comment has been restored ('0' — disabled, '1' — enabled).
         * @param $poll_vote_new boolean A vote in a public poll has been added ('0' — disabled, '1' — enabled).
         * @param $group_join boolean Joined community notifications ('0' — disabled, '1' — enabled).
         * @param $group_leave boolean Left community notifications ('0' — disabled, '1' — enabled).
         * @param $group_change_settings boolean
         * @param $group_change_photo boolean
         * @param $group_officers_edit boolean
         * @param $user_block boolean User added to community blacklist
         * @param $user_unblock boolean User removed from community blacklist
         * @param $lead_forms_new boolean New form in lead forms
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.setCallbackSettings
         */
        public function setCallbackSettings(array $parameters = [])
        {
            //
        }

        /**
         * Sets Long Poll notification settings
         *
         * @param $group_id integer Community ID.
         * @param $enabled boolean Sets whether Long Poll is enabled ('0' — disabled, '1' — enabled).
         * @param $api_version string
         * @param $message_new boolean A new incoming message has been received ('0' — disabled, '1' — enabled).
         * @param $message_reply boolean A new outcoming message has been received ('0' — disabled, '1' — enabled).
         * @param $message_allow boolean Allowed messages notifications ('0' — disabled, '1' — enabled).
         * @param $message_deny boolean Denied messages notifications ('0' — disabled, '1' — enabled).
         * @param $message_edit boolean A message has been edited ('0' — disabled, '1' — enabled).
         * @param $message_typing_state boolean
         * @param $photo_new boolean New photos notifications ('0' — disabled, '1' — enabled).
         * @param $audio_new boolean New audios notifications ('0' — disabled, '1' — enabled).
         * @param $video_new boolean New videos notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_new boolean New wall replies notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_edit boolean Wall replies edited notifications ('0' — disabled, '1' — enabled).
         * @param $wall_reply_delete boolean A wall comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $wall_reply_restore boolean A wall comment has been restored ('0' — disabled, '1' — enabled).
         * @param $wall_post_new boolean New wall posts notifications ('0' — disabled, '1' — enabled).
         * @param $wall_repost boolean New wall posts notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_new boolean New board posts notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_edit boolean Board posts edited notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_restore boolean Board posts restored notifications ('0' — disabled, '1' — enabled).
         * @param $board_post_delete boolean Board posts deleted notifications ('0' — disabled, '1' — enabled).
         * @param $photo_comment_new boolean New comment to photo notifications ('0' — disabled, '1' — enabled).
         * @param $photo_comment_edit boolean A photo comment has been edited ('0' — disabled, '1' — enabled).
         * @param $photo_comment_delete boolean A photo comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $photo_comment_restore boolean A photo comment has been restored ('0' — disabled, '1' — enabled).
         * @param $video_comment_new boolean New comment to video notifications ('0' — disabled, '1' — enabled).
         * @param $video_comment_edit boolean A video comment has been edited ('0' — disabled, '1' — enabled).
         * @param $video_comment_delete boolean A video comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $video_comment_restore boolean A video comment has been restored ('0' — disabled, '1' — enabled).
         * @param $market_comment_new boolean New comment to market item notifications ('0' — disabled, '1' — enabled).
         * @param $market_comment_edit boolean A market comment has been edited ('0' — disabled, '1' — enabled).
         * @param $market_comment_delete boolean A market comment has been deleted ('0' — disabled, '1' — enabled).
         * @param $market_comment_restore boolean A market comment has been restored ('0' — disabled, '1' — enabled).
         * @param $poll_vote_new boolean A vote in a public poll has been added ('0' — disabled, '1' — enabled).
         * @param $group_join boolean Joined community notifications ('0' — disabled, '1' — enabled).
         * @param $group_leave boolean Left community notifications ('0' — disabled, '1' — enabled).
         * @param $group_change_settings boolean
         * @param $group_change_photo boolean
         * @param $group_officers_edit boolean
         * @param $user_block boolean User added to community blacklist
         * @param $user_unblock boolean User removed from community blacklist
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.setLongPollSettings
         */
        public function setLongPollSettings(array $parameters = [])
        {
            //
        }

        /**
         * @param $group_id integer
         * @param $owner_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/groups.unban
         */
        public function unban(array $parameters = [])
        {
            //
        }
    }

    class Leads
    {
        /**
         * Checks if the user can start the lead.
         *
         * @param $lead_id integer Lead ID.
         * @param $test_result integer Value to be return in 'result' field when test mode is used.
         * @param $test_mode boolean
         * @param $auto_start boolean
         * @param $age integer User age.
         * @param $country string User country code.
         *
         * @return int
         *
         * @see https://vk.com/dev/leads.checkUser
         */
        public function checkUser(array $parameters = [])
        {
            //
        }

        /**
         * Completes the lead started by user.
         *
         * @param $vk_sid string Session obtained as GET parameter when session started.
         * @param $secret string Secret key from the lead testing interface.
         * @param $comment string Comment text.
         *
         * @return int
         *
         * @see https://vk.com/dev/leads.complete
         */
        public function complete(array $parameters = [])
        {
            //
        }

        /**
         * Returns lead stats data.
         *
         * @param $lead_id integer Lead ID.
         * @param $secret string Secret key obtained from the lead testing interface.
         * @param $date_start string Day to start stats from (YYYY_MM_DD, e.g.2011-09-17).
         * @param $date_end string Day to finish stats (YYYY_MM_DD, e.g.2011-09-17).
         *
         * @return int
         *
         * @see https://vk.com/dev/leads.getStats
         */
        public function getStats(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of last user actions for the offer.
         *
         * @param $offer_id integer Offer ID.
         * @param $secret string Secret key obtained in the lead testing interface.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of results to return.
         * @param $status integer Action type. Possible values: *'0' — start,, *'1' — finish,, *'2' — blocking users,, *'3' — start in a test mode,, *'4' — finish in a test mode.
         * @param $reverse boolean Sort order. Possible values: *'1' — chronological,, *'0' — reverse chronological.
         *
         * @return array
         *
         * @see https://vk.com/dev/leads.getUsers
         */
        public function getUsers(array $parameters = [])
        {
            //
        }

        /**
         * Counts the metric event.
         *
         * @param $data string Metric data obtained in the lead interface.
         *
         * @return array
         *
         * @see https://vk.com/dev/leads.metricHit
         */
        public function metricHit(array $parameters = [])
        {
            //
        }

        /**
         * Creates new session for the user passing the offer.
         *
         * @param $lead_id integer Lead ID.
         * @param $secret string Secret key from the lead testing interface.
         * @param $uid integer
         * @param $aid integer
         * @param $test_mode boolean
         * @param $force boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/leads.start
         */
        public function start(array $parameters = [])
        {
            //
        }
    }

    class Likes
    {
        /**
         * Adds the specified object to the 'Likes' list of the current user.
         *
         * @param $type string Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion, 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
         * @param $owner_id integer ID of the user or community that owns the object.
         * @param $item_id integer Object ID.
         * @param $access_key string Access key required for an object owned by a private entity.
         *
         * @return array
         *
         * @see https://vk.com/dev/likes.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Deletes the specified object from the 'Likes' list of the current user.
         *
         * @param $type string Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion, 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
         * @param $owner_id integer ID of the user or community that owns the object.
         * @param $item_id integer Object ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/likes.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of users who added the specified object to their 'Likes' list.
         *
         * @param $type string , Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion, 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
         * @param $owner_id integer ID of the user, community, or application that owns the object. If the 'type' parameter is set as 'sitepage', the application ID is passed as 'owner_id'. Use negative value for a community id. If the 'type' parameter is not set, the 'owner_id' is assumed to be either the current user or the same application ID as if the 'type' parameter was set to 'sitepage'.
         * @param $item_id integer Object ID. If 'type' is set as 'sitepage', 'item_id' can include the 'page_id' parameter value used during initialization of the [vk.com/dev/Like|Like widget].
         * @param $page_url string URL of the page where the [vk.com/dev/Like|Like widget] is installed. Used instead of the 'item_id' parameter.
         * @param $filter string Filters to apply: 'likes' — returns information about all users who liked the object (default), 'copies' — returns information only about users who told their friends about the object
         * @param $friends_only integer Specifies which users are returned: '1' — to return only the current user's friends, '0' — to return all users (default)
         * @param $extended boolean Specifies whether extended information will be returned. '1' — to return extended information about users and communities from the 'Likes' list, '0' — to return no additional information (default)
         * @param $offset integer Offset needed to select a specific subset of users.
         * @param $count integer Number of user IDs to return (maximum '1000'). Default is '100' if 'friends_only' is set to '0', otherwise, the default is '10' if 'friends_only' is set to '1'.
         * @param $skip_own boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/likes.getList
         */
        public function getList(array $parameters = [])
        {
            //
        }

        /**
         * Checks for the object in the 'Likes' list of the specified user.
         *
         * @param $user_id integer User ID.
         * @param $type string Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion
         * @param $owner_id integer ID of the user or community that owns the object.
         * @param $item_id integer Object ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/likes.isLiked
         */
        public function isLiked(array $parameters = [])
        {
            //
        }
    }

    class Market
    {
        /**
         * Ads a new item to the market.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $name string Item name.
         * @param $description string Item description.
         * @param $category_id integer Item category ID.
         * @param $price number Item price.
         * @param $old_price number
         * @param $deleted boolean Item status ('1' — deleted, '0' — not deleted).
         * @param $main_photo_id integer Cover photo ID.
         * @param $photo_ids array IDs of additional photos.
         * @param $url string Url for button in market item.
         *
         * @return array
         *
         * @see https://vk.com/dev/market.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Creates new collection of items
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $title string Collection title.
         * @param $photo_id integer Cover photo ID.
         * @param $main_album boolean Set as main ('1' – set, '0' – no).
         *
         * @return array
         *
         * @see https://vk.com/dev/market.addAlbum
         */
        public function addAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Adds an item to one or multiple collections.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         * @param $album_ids array Collections IDs to add item to.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.addToAlbum
         */
        public function addToAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Creates a new comment for an item.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         * @param $message string Comment text (required if 'attachments' parameter is not specified)
         * @param $attachments array Comma-separated list of objects attached to a comment. The field is submitted the following way: , "'<owner_id>_<media_id>,<owner_id>_<media_id>'", , '' - media attachment type: "'photo' - photo, 'video' - video, 'audio' - audio, 'doc' - document", , '<owner_id>' - media owner id, '<media_id>' - media attachment id, , For example: "photo100172_166443618,photo66748_265827614",
         * @param $from_group boolean '1' - comment will be published on behalf of a community, '0' - on behalf of a user (by default).
         * @param $reply_to_comment integer ID of a comment to reply with current comment to.
         * @param $sticker_id integer Sticker ID.
         * @param $guid string Random value to avoid resending one comment.
         *
         * @return integer
         *
         * @see https://vk.com/dev/market.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes an item.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a collection of items.
         *
         * @param $owner_id integer ID of an collection owner community.
         * @param $album_id integer Collection ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.deleteAlbum
         */
        public function deleteAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Deletes an item's comment
         *
         * @param $owner_id integer identifier of an item owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
         * @param $comment_id integer comment id
         *
         * @return int
         *
         * @see https://vk.com/dev/market.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits an item.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         * @param $name string Item name.
         * @param $description string Item description.
         * @param $category_id integer Item category ID.
         * @param $price number Item price.
         * @param $deleted boolean Item status ('1' — deleted, '0' — not deleted).
         * @param $main_photo_id integer Cover photo ID.
         * @param $photo_ids array IDs of additional photos.
         * @param $url string Url for button in market item.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits a collection of items
         *
         * @param $owner_id integer ID of an collection owner community.
         * @param $album_id integer Collection ID.
         * @param $title string Collection title.
         * @param $photo_id integer Cover photo id
         * @param $main_album boolean Set as main ('1' – set, '0' – no).
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.editAlbum
         */
        public function editAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Chages item comment's text
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $comment_id integer Comment ID.
         * @param $message string New comment text (required if 'attachments' are not specified), , 2048 symbols maximum.
         * @param $attachments array Comma-separated list of objects attached to a comment. The field is submitted the following way: , "'<owner_id>_<media_id>,<owner_id>_<media_id>'", , '' - media attachment type: "'photo' - photo, 'video' - video, 'audio' - audio, 'doc' - document", , '<owner_id>' - media owner id, '<media_id>' - media attachment id, , For example: "photo100172_166443618,photo66748_265827614",
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns items list for a community.
         *
         * @param $owner_id integer ID of an item owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
         * @param $album_id integer
         * @param $count integer Number of items to return.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $extended boolean '1' – method will return additional fields: 'likes, can_comment, car_repost, photos'. These parameters are not returned by default.
         *
         * @return array
         *
         * @see https://vk.com/dev/market.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns items album's data
         *
         * @param $owner_id integer identifier of an album owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
         * @param $album_ids array collections identifiers to obtain data from
         *
         * @return array
         *
         * @see https://vk.com/dev/market.getAlbumById
         */
        public function getAlbumById(array $parameters = [])
        {
            //
        }

        /**
         * Returns community's collections list.
         *
         * @param $owner_id integer ID of an items owner community.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of items to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/market.getAlbums
         */
        public function getAlbums(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about market items by their ids.
         *
         * @param $item_ids array Comma-separated ids list: {user id}_{item id}. If an item belongs to a community -{community id} is used. " 'Videos' value example: , '-4363_136089719,13245770_137352259'"
         * @param $extended boolean '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
         *
         * @return array
         *
         * @see https://vk.com/dev/market.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of market categories.
         *
         * @param $count integer Number of results to return.
         * @param $offset integer Offset needed to return a specific subset of results.
         *
         * @return array
         *
         * @see https://vk.com/dev/market.getCategories
         */
        public function getCategories(array $parameters = [])
        {
            //
        }

        /**
         * Returns comments list for an item.
         *
         * @param $owner_id integer ID of an item owner community
         * @param $item_id integer Item ID.
         * @param $need_likes boolean '1' — to return likes info.
         * @param $start_comment_id integer ID of a comment to start a list from (details below).
         * @param $offset integer
         * @param $count integer Number of results to return.
         * @param $sort string Sort order ('asc' — from old to new, 'desc' — from new to old)
         * @param $extended boolean '1' — comments will be returned as numbered objects, in addition lists of 'profiles' and 'groups' objects will be returned.
         * @param $fields array List of additional profile fields to return. See the [vk.com/dev/fields|details]
         *
         * @return array
         *
         * @see https://vk.com/dev/market.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Removes an item from one or multiple collections.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         * @param $album_ids array Collections IDs to remove item from.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.removeFromAlbum
         */
        public function removeFromAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Reorders the collections list.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $album_id integer Collection ID.
         * @param $before integer ID of a collection to place current collection before it.
         * @param $after integer ID of a collection to place current collection after it.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.reorderAlbums
         */
        public function reorderAlbums(array $parameters = [])
        {
            //
        }

        /**
         * Changes item place in a collection.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $album_id integer ID of a collection to reorder items in. Set 0 to reorder full items list.
         * @param $item_id integer Item ID.
         * @param $before integer ID of an item to place current item before it.
         * @param $after integer ID of an item to place current item after it.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.reorderItems
         */
        public function reorderItems(array $parameters = [])
        {
            //
        }

        /**
         * Sends a complaint to the item.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Item ID.
         * @param $reason integer Complaint reason. Possible values: *'0' — spam,, *'1' — child porn,, *'2' — extremism,, *'3' — violence,, *'4' — drugs propaganda,, *'5' — adult materials,, *'6' — insult.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.report
         */
        public function report(array $parameters = [])
        {
            //
        }

        /**
         * Sends a complaint to the item's comment.
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $comment_id integer Comment ID.
         * @param $reason integer Complaint reason. Possible values: *'0' — spam,, *'1' — child porn,, *'2' — extremism,, *'3' — violence,, *'4' — drugs propaganda,, *'5' — adult materials,, *'6' — insult.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.reportComment
         */
        public function reportComment(array $parameters = [])
        {
            //
        }

        /**
         * Restores recently deleted item
         *
         * @param $owner_id integer ID of an item owner community.
         * @param $item_id integer Deleted item ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/market.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }

        /**
         * Restores a recently deleted comment
         *
         * @param $owner_id integer identifier of an item owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
         * @param $comment_id integer deleted comment id
         *
         * @return int
         *
         * @see https://vk.com/dev/market.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }

        /**
         * Searches market items in a community's catalog
         *
         * @param $owner_id integer ID of an items owner community.
         * @param $album_id integer
         * @param $q string Search query, for example "pink slippers".
         * @param $price_from integer Minimum item price value.
         * @param $price_to integer Maximum item price value.
         * @param $tags array Comma-separated tag IDs list.
         * @param $sort integer
         * @param $rev integer '0' — do not use reverse order, '1' — use reverse order
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $count integer Number of items to return.
         * @param $extended boolean '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
         * @param $status integer
         *
         * @return array
         *
         * @see https://vk.com/dev/market.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Messages
    {
        /**
         * Adds a new user to a chat.
         *
         * @param $chat_id integer Chat ID.
         * @param $user_id integer ID of the user to be added to the chat.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.addChatUser
         */
        public function addChatUser(array $parameters = [])
        {
            //
        }

        /**
         * Allows sending messages from community to the current user.
         *
         * @param $group_id integer Group ID.
         * @param $key string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.allowMessagesFromGroup
         */
        public function allowMessagesFromGroup(array $parameters = [])
        {
            //
        }

        /**
         * Creates a chat with several participants.
         *
         * @param $user_ids array IDs of the users to be added to the chat.
         * @param $title string Chat title.
         *
         * @return integer
         *
         * @see https://vk.com/dev/messages.createChat
         */
        public function createChat(array $parameters = [])
        {
            //
        }

        /**
         * Deletes one or more messages.
         *
         * @param $message_ids array Message IDs.
         * @param $spam boolean '1' — to mark message as spam.
         * @param $group_id integer Group ID (for group messages with user access token)
         * @param $delete_for_all boolean '1' — delete message for for all.
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a chat's cover picture.
         *
         * @param $chat_id integer Chat ID.
         * @param $group_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.deleteChatPhoto
         */
        public function deleteChatPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Deletes all private messages in a conversation.
         *
         * @param $user_id integer User ID. To clear a chat history use 'chat_id'
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $group_id integer Group ID (for group messages with user access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.deleteConversation
         */
        public function deleteConversation(array $parameters = [])
        {
            //
        }

        /**
         * Denies sending message from community to the current user.
         *
         * @param $group_id integer Group ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.denyMessagesFromGroup
         */
        public function denyMessagesFromGroup(array $parameters = [])
        {
            //
        }

        /**
         * Edits the message.
         *
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $message string (Required if 'attachments' is not set.) Text of the message.
         * @param $message_id integer
         * @param $lat number Geographical latitude of a check-in, in degrees (from -90 to 90).
         * @param $long number Geographical longitude of a check-in, in degrees (from -180 to 180).
         * @param $attachment string (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format: "<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'wall' — wall post, '<owner_id>' — ID of the media attachment owner. '<media_id>' — media attachment ID. Example: "photo100172_166443618"
         * @param $keep_forward_messages boolean '1' — to keep forwarded, messages.
         * @param $keep_snippets boolean '1' — to keep attached snippets.
         * @param $group_id integer Group ID (for group messages with user access token)
         * @param $dont_parse_links boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/messages.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits the title of a chat.
         *
         * @param $chat_id integer Chat ID.
         * @param $title string New title of the chat.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.editChat
         */
        public function editChat(array $parameters = [])
        {
            //
        }

        /**
         * Returns messages by their IDs within the conversation.
         *
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $conversation_message_ids array Conversation message IDs.
         * @param $extended boolean Information whether the response should be extended
         * @param $fields array Profile fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getByConversationMessageId
         */
        public function getByConversationMessageId(array $parameters = [])
        {
            //
        }

        /**
         * Returns messages by their IDs.
         *
         * @param $message_ids array Message IDs.
         * @param $preview_length integer Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
         * @param $extended boolean Information whether the response should be extended
         * @param $fields array Profile fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * @param $peer_id integer
         * @param $link string Invitation link.
         * @param $fields array Profile fields to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getChatPreview
         */
        public function getChatPreview(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of users participating in a chat.
         *
         * @param $peer_id integer Peer ID.
         * @param $fields array Profile fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getConversationMembers
         */
        public function getConversationMembers(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the current user's conversations.
         *
         * @param $offset integer Offset needed to return a specific subset of conversations.
         * @param $count integer Number of conversations to return.
         * @param $filter string Filter to apply: 'all' — all conversations, 'unread' — conversations with unread messages, 'important' — conversations, marked as important (only for community messages), 'unanswered' — conversations, marked as unanswered (only for community messages)
         * @param $extended boolean '1' — return extra information about users and communities
         * @param $start_message_id integer ID of the message from what to return dialogs.
         * @param $fields array Profile and communities fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getConversations
         */
        public function getConversations(array $parameters = [])
        {
            //
        }

        /**
         * Returns conversations by their IDs
         *
         * @param $peer_ids array Destination IDs. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $extended boolean Return extended properties
         * @param $fields array Profile and communities fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getConversationsById
         */
        public function getConversationsById(array $parameters = [])
        {
            //
        }

        /**
         * Returns message history for the specified user or group chat.
         *
         * @param $offset integer Offset needed to return a specific subset of messages.
         * @param $count integer Number of messages to return.
         * @param $user_id integer ID of the user whose message history you want to return.
         * @param $peer_id integer
         * @param $start_message_id integer Starting message ID from which to return history.
         * @param $rev integer Sort order: '1' — return messages in chronological order. '0' — return messages in reverse chronological order.
         * @param $extended boolean Information whether the response should be extended
         * @param $fields array Profile fields to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getHistory
         */
        public function getHistory(array $parameters = [])
        {
            //
        }

        /**
         * Returns media files from the dialog or group chat.
         *
         * @param $peer_id integer Peer ID. ", For group chat: '2000000000 + chat ID' , , For community: '-community ID'"
         * @param $media_type string Type of media files to return: *'photo',, *'video',, *'audio',, *'doc',, *'link'.,*'market'.,*'wall'.,*'share'
         * @param $start_from string Message ID to start return results from.
         * @param $count integer Number of objects to return.
         * @param $photo_sizes boolean '1' — to return photo sizes in a
         * @param $fields array Additional profile [vk.com/dev/fields|fields] to return.
         * @param $group_id integer Group ID (for group messages with group access token)
         * @param $preserve_order boolean
         * @param $max_forwards_level integer
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getHistoryAttachments
         */
        public function getHistoryAttachments(array $parameters = [])
        {
            //
        }

        /**
         * @param $peer_id integer Destination ID.
         * @param $reset boolean 1 — to generate new link (revoke previous), 0 — to return previous link.
         * @param $group_id integer Group ID
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getInviteLink
         */
        public function getInviteLink(array $parameters = [])
        {
            //
        }

        /**
         * Returns a user's current status and date of last activity.
         *
         * @param $user_id integer User ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/messages.getLastActivity
         */
        public function getLastActivity(array $parameters = [])
        {
            //
        }

        /**
         * Returns updates in user's private messages.
         *
         * @param $ts integer Last value of the 'ts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
         * @param $pts integer Lsat value of 'pts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
         * @param $preview_length integer Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
         * @param $onlines boolean '1' — to return history with online users only.
         * @param $fields array Additional profile [vk.com/dev/fields|fields] to return.
         * @param $events_limit integer Maximum number of events to return.
         * @param $msgs_limit integer Maximum number of messages to return.
         * @param $max_msg_id integer Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
         * @param $group_id integer Group ID (for group messages with user access token)
         * @param $lp_version integer
         * @param $last_n integer
         * @param $credentials boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.getLongPollHistory
         */
        public function getLongPollHistory(array $parameters = [])
        {
            //
        }

        /**
         * Returns data required for connection to a Long Poll server.
         *
         * @param $need_pts boolean '1' — to return the 'pts' field, needed for the [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
         * @param $group_id integer Group ID (for group messages with user access token)
         * @param $lp_version integer Long poll version
         *
         * @return int
         *
         * @see https://vk.com/dev/messages.getLongPollServer
         */
        public function getLongPollServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns information whether sending messages from the community to current user is allowed.
         *
         * @param $group_id integer Group ID.
         * @param $user_id integer User ID.
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.isMessagesFromGroupAllowed
         */
        public function isMessagesFromGroupAllowed(array $parameters = [])
        {
            //
        }

        /**
         * @param $link string Invitation link.
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.joinChatByInviteLink
         */
        public function joinChatByInviteLink(array $parameters = [])
        {
            //
        }

        /**
         * Marks and unmarks conversations as unanswered.
         *
         * @param $peer_id integer ID of conversation to mark as important.
         * @param $answered boolean '1' — to mark as answered, '0' — to remove the mark
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.markAsAnsweredConversation
         */
        public function markAsAnsweredConversation(array $parameters = [])
        {
            //
        }

        /**
         * Marks and unmarks messages as important (starred).
         *
         * @param $message_ids array IDs of messages to mark as important.
         * @param $important integer '1' — to add a star (mark as important), '0' — to remove the star
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.markAsImportant
         */
        public function markAsImportant(array $parameters = [])
        {
            //
        }

        /**
         * Marks and unmarks conversations as important.
         *
         * @param $peer_id integer ID of conversation to mark as important.
         * @param $important boolean '1' — to add a star (mark as important), '0' — to remove the star
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.markAsImportantConversation
         */
        public function markAsImportantConversation(array $parameters = [])
        {
            //
        }

        /**
         * Marks messages as read.
         *
         * @param $message_ids array IDs of messages to mark as read.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $start_message_id integer Message ID to start from.
         * @param $group_id integer Group ID (for group messages with user access token)
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.markAsRead
         */
        public function markAsRead(array $parameters = [])
        {
            //
        }

        /**
         * Pin a message.
         *
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
         * @param $message_id integer
         *
         * @return int
         *
         * @see https://vk.com/dev/messages.pin
         */
        public function pin(array $parameters = [])
        {
            //
        }

        /**
         * Allows the current user to leave a chat or, if the current user started the chat, allows the user to remove another user from the chat.
         *
         * @param $chat_id integer Chat ID.
         * @param $user_id integer ID of the user to be removed from the chat.
         * @param $member_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.removeChatUser
         */
        public function removeChatUser(array $parameters = [])
        {
            //
        }

        /**
         * Restores a deleted message.
         *
         * @param $message_id integer ID of a previously-deleted message to restore.
         * @param $group_id integer Group ID (for group messages with user access token)
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the current user's private messages that match search criteria.
         *
         * @param $q string Search query string.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $date integer Date to search message before in Unixtime.
         * @param $preview_length integer Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
         * @param $offset integer Offset needed to return a specific subset of messages.
         * @param $count integer Number of messages to return.
         * @param $extended boolean
         * @param $fields array
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.search
         */
        public function search(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of the current user's conversations that match search criteria.
         *
         * @param $q string Search query string.
         * @param $count integer Maximum number of results.
         * @param $extended boolean '1' — return extra information about users and communities
         * @param $fields array Profile fields to return.
         * @param $group_id integer Group ID (for group messages with user access token)
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.searchConversations
         */
        public function searchConversations(array $parameters = [])
        {
            //
        }

        /**
         * Sends a message.
         *
         * @param $user_id integer User ID (by default — current user).
         * @param $random_id integer Unique identifier to avoid resending the message.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $domain string User's short address (for example, 'illarionov').
         * @param $chat_id integer ID of conversation the message will relate to.
         * @param $user_ids array IDs of message recipients (if new conversation shall be started).
         * @param $message string (Required if 'attachments' is not set.) Text of the message.
         * @param $lat number Geographical latitude of a check-in, in degrees (from -90 to 90).
         * @param $long number Geographical longitude of a check-in, in degrees (from -180 to 180).
         * @param $attachment string (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format: "<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'wall' — wall post, '<owner_id>' — ID of the media attachment owner. '<media_id>' — media attachment ID. Example: "photo100172_166443618"
         * @param $reply_to integer
         * @param $forward_messages array ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's. Example: "123,431,544"
         * @param $forward string
         * @param $sticker_id integer Sticker id.
         * @param $group_id integer Group ID (for group messages with group access token)
         * @param $keyboard string
         * @param $payload string
         * @param $dont_parse_links boolean
         * @param $disable_mentions boolean
         *
         * @return integer
         *
         * @see https://vk.com/dev/messages.send
         */
        public function send(array $parameters = [])
        {
            //
        }

        /**
         * Changes the status of a user as typing in a conversation.
         *
         * @param $user_id integer User ID.
         * @param $type string 'typing' — user has started to type.
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
         * @param $group_id integer Group ID (for group messages with group access token)
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.setActivity
         */
        public function setActivity(array $parameters = [])
        {
            //
        }

        /**
         * Sets a previously-uploaded picture as the cover picture of a chat.
         *
         * @param $file string Upload URL from the 'response' field returned by the [vk.com/dev/photos.getChatUploadServer|photos.getChatUploadServer] method upon successfully uploading an image.
         *
         * @return array
         *
         * @see https://vk.com/dev/messages.setChatPhoto
         */
        public function setChatPhoto(array $parameters = [])
        {
            //
        }

        /**
         * @param $peer_id integer
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/messages.unpin
         */
        public function unpin(array $parameters = [])
        {
            //
        }
    }

    class Newsfeed
    {
        /**
         * Prevents news from specified users and communities from appearing in the current user's newsfeed.
         *
         * @param $user_ids array
         * @param $group_ids array
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.addBan
         */
        public function addBan(array $parameters = [])
        {
            //
        }

        /**
         * Allows news from previously banned users and communities to be shown in the current user's newsfeed.
         *
         * @param $user_ids array
         * @param $group_ids array
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.deleteBan
         */
        public function deleteBan(array $parameters = [])
        {
            //
        }

        /**
         * @param $list_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.deleteList
         */
        public function deleteList(array $parameters = [])
        {
            //
        }

        /**
         * Returns data required to show newsfeed for the current user.
         *
         * @param $filters array Filters to apply: 'post' — new wall posts, 'photo' — new photos, 'photo_tag' — new photo tags, 'wall_photo' — new wall photos, 'friend' — new friends, 'note' — new notes
         * @param $return_banned boolean '1' — to return news items from banned sources
         * @param $start_time integer Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a news item to return. By default, the current time.
         * @param $max_photos integer Maximum number of photos to return. By default, '5'.
         * @param $source_ids string Sources to obtain news from, separated by commas. User IDs can be specified in formats '' or 'u' , where '' is the user's friend ID. Community IDs can be specified in formats '-' or 'g' , where '' is the community ID. If the parameter is not set, all of the user's friends and communities are returned, except for banned sources, which can be obtained with the [vk.com/dev/newsfeed.getBanned|newsfeed.getBanned] method.
         * @param $start_from string identifier required to get the next page of results. Value for this parameter is returned in 'next_from' field in a reply.
         * @param $count integer Number of news items to return (default 50, maximum 100). For auto feed, you can use the 'new_offset' parameter returned by this method.
         * @param $fields array Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
         * @param $section string
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of users and communities banned from the current user's newsfeed.
         *
         * @param $extended boolean '1' — return extra information about users and communities
         * @param $fields array Profile fields to return.
         * @param $name_case string Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getBanned
         */
        public function getBanned(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments in the current user's newsfeed.
         *
         * @param $count integer Number of comments to return. For auto feed, you can use the 'new_offset' parameter returned by this method.
         * @param $filters array Filters to apply: 'post' — new comments on wall posts, 'photo' — new comments on photos, 'video' — new comments on videos, 'topic' — new comments on discussions, 'note' — new comments on notes,
         * @param $reposts string Object ID, comments on repost of which shall be returned, e.g. 'wall1_45486'. (If the parameter is set, the 'filters' parameter is optional.),
         * @param $start_time integer Earliest timestamp (in Unix time) of a comment to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a comment to return. By default, the current time.
         * @param $last_comments_count integer
         * @param $start_from string Identificator needed to return the next page with results. Value for this parameter returns in 'next_from' field.
         * @param $fields array Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of newsfeeds followed by the current user.
         *
         * @param $list_ids array numeric list identifiers.
         * @param $extended boolean Return additional list info
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getLists
         */
        public function getLists(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of posts on user walls in which the current user is mentioned.
         *
         * @param $owner_id integer Owner ID.
         * @param $start_time integer Earliest timestamp (in Unix time) of a post to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a post to return. By default, the current time.
         * @param $offset integer Offset needed to return a specific subset of posts.
         * @param $count integer Number of posts to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getMentions
         */
        public function getMentions(array $parameters = [])
        {
            //
        }

        /**
         * , Returns a list of newsfeeds recommended to the current user.
         *
         * @param $start_time integer Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a news item to return. By default, the current time.
         * @param $max_photos integer Maximum number of photos to return. By default, '5'.
         * @param $start_from string 'new_from' value obtained in previous call.
         * @param $count integer Number of news items to return.
         * @param $fields array Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getRecommended
         */
        public function getRecommended(array $parameters = [])
        {
            //
        }

        /**
         * Returns communities and users that current user is suggested to follow.
         *
         * @param $offset integer offset required to choose a particular subset of communities or users.
         * @param $count integer amount of communities or users to return.
         * @param $shuffle boolean shuffle the returned list or not.
         * @param $fields array list of extra fields to be returned. See available fields for [vk.com/dev/fields|users] and [vk.com/dev/fields_groups|communities].
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.getSuggestedSources
         */
        public function getSuggestedSources(array $parameters = [])
        {
            //
        }

        /**
         * Hides an item from the newsfeed.
         *
         * @param $type string Item type. Possible values: *'wall' – post on the wall,, *'tag' – tag on a photo,, *'profilephoto' – profile photo,, *'video' – video,, *'audio' – audio.
         * @param $owner_id integer Item owner's identifier (user or community), "Note that community id must be negative. 'owner_id=1' – user , 'owner_id=-1' – community "
         * @param $item_id integer Item identifier
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.ignoreItem
         */
        public function ignoreItem(array $parameters = [])
        {
            //
        }

        /**
         * Creates and edits user newsfeed lists
         *
         * @param $list_id integer numeric list identifier (if not sent, will be set automatically).
         * @param $title string list name.
         * @param $source_ids array users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
         * @param $no_reposts boolean reposts display on and off ('1' is for off).
         *
         * @return integer
         *
         * @see https://vk.com/dev/newsfeed.saveList
         */
        public function saveList(array $parameters = [])
        {
            //
        }

        /**
         * Returns search results by statuses.
         *
         * @param $q string Search query string (e.g., 'New Year').
         * @param $extended boolean '1' — to return additional information about the user or community that placed the post.
         * @param $count integer Number of posts to return.
         * @param $latitude number Geographical latitude point (in degrees, -90 to 90) within which to search.
         * @param $longitude number Geographical longitude point (in degrees, -180 to 180) within which to search.
         * @param $start_time integer Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a news item to return. By default, the current time.
         * @param $start_from string
         * @param $fields array Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/newsfeed.search
         */
        public function search(array $parameters = [])
        {
            //
        }

        /**
         * Returns a hidden item to the newsfeed.
         *
         * @param $type string Item type. Possible values: *'wall' – post on the wall,, *'tag' – tag on a photo,, *'profilephoto' – profile photo,, *'video' – video,, *'audio' – audio.
         * @param $owner_id integer Item owner's identifier (user or community), "Note that community id must be negative. 'owner_id=1' – user , 'owner_id=-1' – community "
         * @param $item_id integer Item identifier
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.unignoreItem
         */
        public function unignoreItem(array $parameters = [])
        {
            //
        }

        /**
         * Unsubscribes the current user from specified newsfeeds.
         *
         * @param $type string Type of object from which to unsubscribe: 'note' — note, 'photo' — photo, 'post' — post on user wall or community wall, 'topic' — topic, 'video' — video
         * @param $owner_id integer Object owner ID.
         * @param $item_id integer Object ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/newsfeed.unsubscribe
         */
        public function unsubscribe(array $parameters = [])
        {
            //
        }
    }

    class Notes
    {
        /**
         * Creates a new note for the current user.
         *
         * @param $title string Note title.
         * @param $text string Note text.
         * @param $privacy_view array
         * @param $privacy_comment array
         *
         * @return integer
         *
         * @see https://vk.com/dev/notes.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Adds a new comment on a note.
         *
         * @param $note_id integer Note ID.
         * @param $owner_id integer Note owner ID.
         * @param $reply_to integer ID of the user to whom the reply is addressed (if the comment is a reply to another comment).
         * @param $message string Comment text.
         * @param $guid string
         *
         * @return integer
         *
         * @see https://vk.com/dev/notes.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a note of the current user.
         *
         * @param $note_id integer Note ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/notes.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a comment on a note.
         *
         * @param $comment_id integer Comment ID.
         * @param $owner_id integer Note owner ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/notes.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits a note of the current user.
         *
         * @param $note_id integer Note ID.
         * @param $title string Note title.
         * @param $text string Note text.
         * @param $privacy_view array
         * @param $privacy_comment array
         *
         * @return mixed
         *
         * @see https://vk.com/dev/notes.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits a comment on a note.
         *
         * @param $comment_id integer Comment ID.
         * @param $owner_id integer Note owner ID.
         * @param $message string New comment text.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/notes.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of notes created by a user.
         *
         * @param $note_ids array Note IDs.
         * @param $user_id integer Note owner ID.
         * @param $offset integer
         * @param $count integer Number of notes to return.
         * @param $sort integer
         *
         * @return array
         *
         * @see https://vk.com/dev/notes.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a note by its ID.
         *
         * @param $note_id integer Note ID.
         * @param $owner_id integer Note owner ID.
         * @param $need_wiki boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/notes.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a note.
         *
         * @param $note_id integer Note ID.
         * @param $owner_id integer Note owner ID.
         * @param $sort integer
         * @param $offset integer
         * @param $count integer Number of comments to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/notes.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Restores a deleted comment on a note.
         *
         * @param $comment_id integer Comment ID.
         * @param $owner_id integer Note owner ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/notes.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }
    }

    class Notifications
    {
        /**
         * Returns a list of notifications about other users' feedback to the current user's wall posts.
         *
         * @param $count integer Number of notifications to return.
         * @param $start_from string
         * @param $filters array Type of notifications to return: 'wall' — wall posts, 'mentions' — mentions in wall posts, comments, or topics, 'comments' — comments to wall posts, photos, and videos, 'likes' — likes, 'reposted' — wall posts that are copied from the current user's wall, 'followers' — new followers, 'friends' — accepted friend requests
         * @param $start_time integer Earliest timestamp (in Unix time) of a notification to return. By default, 24 hours ago.
         * @param $end_time integer Latest timestamp (in Unix time) of a notification to return. By default, the current time.
         *
         * @return array
         *
         * @see https://vk.com/dev/notifications.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Resets the counter of new notifications about other users' feedback to the current user's wall posts.
         *
         * @return int
         *
         * @see https://vk.com/dev/notifications.markAsViewed
         */
        public function markAsViewed(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_ids array
         * @param $message string
         * @param $fragment string
         * @param $group_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/notifications.sendMessage
         */
        public function sendMessage(array $parameters = [])
        {
            //
        }
    }

    class Orders
    {
        /**
         * @param $user_id integer
         * @param $subscription_id integer
         * @param $pending_cancel boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/orders.cancelSubscription
         */
        public function cancelSubscription(array $parameters = [])
        {
            //
        }

        /**
         * Changes order status.
         *
         * @param $order_id integer order ID.
         * @param $action string action to be done with the order. Available actions: *cancel — to cancel unconfirmed order. *charge — to confirm unconfirmed order. Applies only if processing of [vk.com/dev/payments_status|order_change_state] notification failed. *refund — to cancel confirmed order.
         * @param $app_order_id integer internal ID of the order in the application.
         * @param $test_mode boolean if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
         *
         * @return string
         *
         * @see https://vk.com/dev/orders.changeState
         */
        public function changeState(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of orders.
         *
         * @param $offset integer
         * @param $count integer number of returned orders.
         * @param $test_mode boolean if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/orders.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $votes array
         *
         * @return int
         *
         * @see https://vk.com/dev/orders.getAmount
         */
        public function getAmount(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about orders by their IDs.
         *
         * @param $order_id integer order ID.
         * @param $order_ids array order IDs (when information about several orders is requested).
         * @param $test_mode boolean if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/orders.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $subscription_id integer
         *
         * @return int
         *
         * @see https://vk.com/dev/orders.getUserSubscriptionById
         */
        public function getUserSubscriptionById(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/orders.getUserSubscriptions
         */
        public function getUserSubscriptions(array $parameters = [])
        {
            //
        }

        /**
         * @param $user_id integer
         * @param $subscription_id integer
         * @param $price integer
         *
         * @return int
         *
         * @see https://vk.com/dev/orders.updateSubscription
         */
        public function updateSubscription(array $parameters = [])
        {
            //
        }
    }

    class Pages
    {
        /**
         * Allows to clear the cache of particular 'external' pages which may be attached to VK posts.
         *
         * @param $url string Address of the page where you need to refesh the cached version
         *
         * @return mixed
         *
         * @see https://vk.com/dev/pages.clearCache
         */
        public function clearCache(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about a wiki page.
         *
         * @param $owner_id integer Page owner ID.
         * @param $page_id integer Wiki page ID.
         * @param $global boolean '1' — to return information about a global wiki page
         * @param $site_preview boolean '1' — resulting wiki page is a preview for the attached link
         * @param $title string Wiki page title.
         * @param $need_source boolean
         * @param $need_html boolean '1' — to return the page as HTML,
         *
         * @return int
         *
         * @see https://vk.com/dev/pages.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of all previous versions of a wiki page.
         *
         * @param $page_id integer Wiki page ID.
         * @param $group_id integer ID of the community that owns the wiki page.
         * @param $user_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/pages.getHistory
         */
        public function getHistory(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of wiki pages in a group.
         *
         * @param $group_id integer ID of the community that owns the wiki page.
         *
         * @return array
         *
         * @see https://vk.com/dev/pages.getTitles
         */
        public function getTitles(array $parameters = [])
        {
            //
        }

        /**
         * Returns the text of one of the previous versions of a wiki page.
         *
         * @param $version_id integer
         * @param $group_id integer ID of the community that owns the wiki page.
         * @param $user_id integer
         * @param $need_html boolean '1' — to return the page as HTML
         *
         * @return int
         *
         * @see https://vk.com/dev/pages.getVersion
         */
        public function getVersion(array $parameters = [])
        {
            //
        }

        /**
         * Returns HTML representation of the wiki markup.
         *
         * @param $text string Text of the wiki page.
         * @param $group_id integer ID of the group in the context of which this markup is interpreted.
         *
         * @return string
         *
         * @see https://vk.com/dev/pages.parseWiki
         */
        public function parseWiki(array $parameters = [])
        {
            //
        }

        /**
         * Saves the text of a wiki page.
         *
         * @param $text string Text of the wiki page in wiki-format.
         * @param $page_id integer Wiki page ID. The 'title' parameter can be passed instead of 'pid'.
         * @param $group_id integer ID of the community that owns the wiki page.
         * @param $user_id integer User ID
         * @param $title string Wiki page title.
         *
         * @return integer
         *
         * @see https://vk.com/dev/pages.save
         */
        public function save(array $parameters = [])
        {
            //
        }

        /**
         * Saves modified read and edit access settings for a wiki page.
         *
         * @param $page_id integer Wiki page ID.
         * @param $group_id integer ID of the community that owns the wiki page.
         * @param $user_id integer
         * @param $view integer Who can view the wiki page: '1' — only community members, '2' — all users can view the page, '0' — only community managers
         * @param $edit integer Who can edit the wiki page: '1' — only community members, '2' — all users can edit the page, '0' — only community managers
         *
         * @return integer
         *
         * @see https://vk.com/dev/pages.saveAccess
         */
        public function saveAccess(array $parameters = [])
        {
            //
        }
    }

    class Photos
    {
        /**
         * Confirms a tag on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id string Photo ID.
         * @param $tag_id integer Tag ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.confirmTag
         */
        public function confirmTag(array $parameters = [])
        {
            //
        }

        /**
         * Allows to copy a photo to the "Saved photos" album
         *
         * @param $owner_id integer photo's owner ID
         * @param $photo_id integer photo ID
         * @param $access_key string for private photos
         *
         * @return integer
         *
         * @see https://vk.com/dev/photos.copy
         */
        public function copy(array $parameters = [])
        {
            //
        }

        /**
         * Creates an empty photo album.
         *
         * @param $title string Album title.
         * @param $group_id integer ID of the community in which the album will be created.
         * @param $description string Album description.
         * @param $privacy_view array
         * @param $privacy_comment array
         * @param $upload_by_admins_only boolean
         * @param $comments_disabled boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.createAlbum
         */
        public function createAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Adds a new comment on the photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $message string Comment text.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — Media attachment owner ID. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
         * @param $from_group boolean '1' — to post a comment from the community
         * @param $reply_to_comment integer
         * @param $sticker_id integer
         * @param $access_key string
         * @param $guid string
         *
         * @return integer
         *
         * @see https://vk.com/dev/photos.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a photo album belonging to the current user.
         *
         * @param $album_id integer Album ID.
         * @param $group_id integer ID of the community that owns the album.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.deleteAlbum
         */
        public function deleteAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a comment on the photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $comment_id integer Comment ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits the caption of a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $caption string New caption for the photo. If this parameter is not set, it is considered to be equal to an empty string.
         * @param $latitude number
         * @param $longitude number
         * @param $place_str string
         * @param $foursquare_id string
         * @param $delete_place boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits information about a photo album.
         *
         * @param $album_id integer ID of the photo album to be edited.
         * @param $title string New album title.
         * @param $description string New album description.
         * @param $owner_id integer ID of the user or community that owns the album.
         * @param $privacy_view array
         * @param $privacy_comment array
         * @param $upload_by_admins_only boolean
         * @param $comments_disabled boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.editAlbum
         */
        public function editAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Edits a comment on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $comment_id integer Comment ID.
         * @param $message string New text of the comment.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — Media attachment owner ID. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of a user's or community's photos.
         *
         * @param $owner_id integer ID of the user or community that owns the photos. Use a negative value to designate a community ID.
         * @param $album_id string Photo album ID. To return information about photos from service albums, use the following string values: 'profile, wall, saved'.
         * @param $photo_ids array Photo IDs.
         * @param $rev boolean Sort order: '1' — reverse chronological, '0' — chronological
         * @param $extended boolean '1' — to return additional 'likes', 'comments', and 'tags' fields, '0' — (default)
         * @param $feed_type string Type of feed obtained in 'feed' field of the method.
         * @param $feed integer unixtime, that can be obtained with [vk.com/dev/newsfeed.get|newsfeed.get] method in date field to get all photos uploaded by the user on a specific day, or photos the user has been tagged on. Also, 'uid' parameter of the user the event happened with shall be specified.
         * @param $photo_sizes boolean '1' — to return photo sizes in a [vk.com/dev/photo_sizes|special format]
         * @param $offset integer
         * @param $count integer
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of a user's or community's photo albums.
         *
         * @param $owner_id integer ID of the user or community that owns the albums.
         * @param $album_ids array Album IDs.
         * @param $offset integer Offset needed to return a specific subset of albums.
         * @param $count integer Number of albums to return.
         * @param $need_system boolean '1' — to return system albums with negative IDs
         * @param $need_covers boolean '1' — to return an additional 'thumb_src' field, '0' — (default)
         * @param $photo_sizes boolean '1' — to return photo sizes in a
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getAlbums
         */
        public function getAlbums(array $parameters = [])
        {
            //
        }

        /**
         * Returns the number of photo albums belonging to a user or community.
         *
         * @param $user_id integer User ID.
         * @param $group_id integer Community ID.
         *
         * @return integer
         *
         * @see https://vk.com/dev/photos.getAlbumsCount
         */
        public function getAlbumsCount(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of photos belonging to a user or community, in reverse chronological order.
         *
         * @param $owner_id integer ID of a user or community that owns the photos. Use a negative value to designate a community ID.
         * @param $extended boolean '1' — to return detailed information about photos
         * @param $offset integer Offset needed to return a specific subset of photos. By default, '0'.
         * @param $count integer Number of photos to return.
         * @param $photo_sizes boolean '1' – to return image sizes in [vk.com/dev/photo_sizes|special format].
         * @param $no_service_albums boolean '1' – to return photos only from standard albums, '0' – to return all photos including those in service albums, e.g., 'My wall photos' (default)
         * @param $need_hidden boolean '1' – to show information about photos being hidden from the block above the wall.
         * @param $skip_hidden boolean '1' – not to return photos being hidden from the block above the wall. Works only with owner_id>0, no_service_albums is ignored.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getAll
         */
        public function getAll(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a specific photo album or all albums of the user sorted in reverse chronological order.
         *
         * @param $owner_id integer ID of the user or community that owns the album(s).
         * @param $album_id integer Album ID. If the parameter is not set, comments on all of the user's albums will be returned.
         * @param $need_likes boolean '1' — to return an additional 'likes' field, '0' — (default)
         * @param $offset integer Offset needed to return a specific subset of comments. By default, '0'.
         * @param $count integer Number of comments to return. By default, '20'. Maximum value, '100'.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getAllComments
         */
        public function getAllComments(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about photos by their IDs.
         *
         * @param $photos array IDs separated with a comma, that are IDs of users who posted photos and IDs of photos themselves with an underscore character between such IDs. To get information about a photo in the group album, you shall specify group ID instead of user ID. Example: "1_129207899,6492_135055734, , -20629724_271945303"
         * @param $extended boolean '1' — to return additional fields, '0' — (default)
         * @param $photo_sizes boolean '1' — to return photo sizes in a
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns an upload link for chat cover pictures.
         *
         * @param $chat_id integer ID of the chat for which you want to upload a cover photo.
         * @param $crop_x integer
         * @param $crop_y integer
         * @param $crop_width integer Width (in pixels) of the photo after cropping.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.getChatUploadServer
         */
        public function getChatUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $need_likes boolean '1' — to return an additional 'likes' field, '0' — (default)
         * @param $start_comment_id integer
         * @param $offset integer Offset needed to return a specific subset of comments. By default, '0'.
         * @param $count integer Number of comments to return.
         * @param $sort string Sort order: 'asc' — old first, 'desc' — new first
         * @param $access_key string
         * @param $extended boolean
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for market album photo upload.
         *
         * @param $group_id integer Community ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.getMarketAlbumUploadServer
         */
        public function getMarketAlbumUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for market photo upload.
         *
         * @param $group_id integer Community ID.
         * @param $main_photo boolean '1' if you want to upload the main item photo.
         * @param $crop_x integer X coordinate of the crop left upper corner.
         * @param $crop_y integer Y coordinate of the crop left upper corner.
         * @param $crop_width integer Width of the cropped photo in px.
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.getMarketUploadServer
         */
        public function getMarketUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for photo upload in a private message for a user.
         *
         * @param $peer_id integer Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.getMessagesUploadServer
         */
        public function getMessagesUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of photos with tags that have not been viewed.
         *
         * @param $offset integer Offset needed to return a specific subset of photos.
         * @param $count integer Number of photos to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getNewTags
         */
        public function getNewTags(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for owner cover upload.
         *
         * @param $group_id integer ID of community that owns the album (if the photo will be uploaded to a community album).
         * @param $crop_x integer X coordinate of the left-upper corner
         * @param $crop_y integer Y coordinate of the left-upper corner
         * @param $crop_x2 integer X coordinate of the right-bottom corner
         * @param $crop_y2 integer Y coordinate of the right-bottom corner
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.getOwnerCoverPhotoUploadServer
         */
        public function getOwnerCoverPhotoUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns an upload server address for a profile or community photo.
         *
         * @param $owner_id integer identifier of a community or current user. "Note that community id must be negative. 'owner_id=1' – user, 'owner_id=-1' – community, "
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.getOwnerPhotoUploadServer
         */
        public function getOwnerPhotoUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of tags on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $access_key string
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getTags
         */
        public function getTags(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for photo upload.
         *
         * @param $group_id integer ID of community that owns the album (if the photo will be uploaded to a community album).
         * @param $album_id integer
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.getUploadServer
         */
        public function getUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of photos in which a user is tagged.
         *
         * @param $user_id integer User ID.
         * @param $offset integer Offset needed to return a specific subset of photos. By default, '0'.
         * @param $count integer Number of photos to return. Maximum value is 1000.
         * @param $extended boolean '1' — to return an additional 'likes' field, '0' — (default)
         * @param $sort string Sort order: '1' — by date the tag was added in ascending order, '0' — by date the tag was added in descending order
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.getUserPhotos
         */
        public function getUserPhotos(array $parameters = [])
        {
            //
        }

        /**
         * Returns the server address for photo upload onto a user's wall.
         *
         * @param $group_id integer ID of community to whose wall the photo will be uploaded.
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.getWallUploadServer
         */
        public function getWallUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Makes a photo into an album cover.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $album_id integer Album ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.makeCover
         */
        public function makeCover(array $parameters = [])
        {
            //
        }

        /**
         * Moves a photo from one album to another.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $target_album_id integer ID of the album to which the photo will be moved.
         * @param $photo_id integer Photo ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.move
         */
        public function move(array $parameters = [])
        {
            //
        }

        /**
         * Adds a tag on the photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $user_id integer ID of the user to be tagged.
         * @param $x number Upper left-corner coordinate of the tagged area (as a percentage of the photo's width).
         * @param $y number Upper left-corner coordinate of the tagged area (as a percentage of the photo's height).
         * @param $x2 number Lower right-corner coordinate of the tagged area (as a percentage of the photo's width).
         * @param $y2 number Lower right-corner coordinate of the tagged area (as a percentage of the photo's height).
         *
         * @return integer
         *
         * @see https://vk.com/dev/photos.putTag
         */
        public function putTag(array $parameters = [])
        {
            //
        }

        /**
         * Removes a tag from a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $tag_id integer Tag ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.removeTag
         */
        public function removeTag(array $parameters = [])
        {
            //
        }

        /**
         * Reorders the album in the list of user albums.
         *
         * @param $owner_id integer ID of the user or community that owns the album.
         * @param $album_id integer Album ID.
         * @param $before integer ID of the album before which the album in question shall be placed.
         * @param $after integer ID of the album after which the album in question shall be placed.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.reorderAlbums
         */
        public function reorderAlbums(array $parameters = [])
        {
            //
        }

        /**
         * Reorders the photo in the list of photos of the user album.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $before integer ID of the photo before which the photo in question shall be placed.
         * @param $after integer ID of the photo after which the photo in question shall be placed.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.reorderPhotos
         */
        public function reorderPhotos(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         * @param $reason integer Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.report
         */
        public function report(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a comment on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $comment_id integer ID of the comment being reported.
         * @param $reason integer Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.reportComment
         */
        public function reportComment(array $parameters = [])
        {
            //
        }

        /**
         * Restores a deleted photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $photo_id integer Photo ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/photos.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }

        /**
         * Restores a deleted comment on a photo.
         *
         * @param $owner_id integer ID of the user or community that owns the photo.
         * @param $comment_id integer ID of the deleted comment.
         *
         * @return int
         *
         * @see https://vk.com/dev/photos.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }

        /**
         * Saves photos after successful uploading.
         *
         * @param $album_id integer ID of the album to save photos to.
         * @param $group_id integer ID of the community to save photos to.
         * @param $server integer Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $photos_list string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $hash string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $latitude number Geographical latitude, in degrees (from '-90' to '90').
         * @param $longitude number Geographical longitude, in degrees (from '-180' to '180').
         * @param $caption string Text describing the photo. 2048 digits max.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.save
         */
        public function save(array $parameters = [])
        {
            //
        }

        /**
         * Saves market album photos after successful uploading.
         *
         * @param $group_id integer Community ID.
         * @param $photo string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $server integer Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $hash string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveMarketAlbumPhoto
         */
        public function saveMarketAlbumPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Saves market photos after successful uploading.
         *
         * @param $group_id integer Community ID.
         * @param $photo string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $server integer Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $hash string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $crop_data string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $crop_hash string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveMarketPhoto
         */
        public function saveMarketPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Saves a photo after being successfully uploaded. URL obtained with [vk.com/dev/photos.getMessagesUploadServer|photos.getMessagesUploadServer] method.
         *
         * @param $photo string Parameter returned when the photo is [vk.com/dev/upload_files|uploaded to the server].
         * @param $server integer
         * @param $hash string
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveMessagesPhoto
         */
        public function saveMessagesPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Saves cover photo after successful uploading.
         *
         * @param $hash string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         * @param $photo string Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveOwnerCoverPhoto
         */
        public function saveOwnerCoverPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Saves a profile or community photo. Upload URL can be got with the [vk.com/dev/photos.getOwnerPhotoUploadServer|photos.getOwnerPhotoUploadServer] method.
         *
         * @param $server string parameter returned after [vk.com/dev/upload_files|photo upload].
         * @param $hash string parameter returned after [vk.com/dev/upload_files|photo upload].
         * @param $photo string parameter returned after [vk.com/dev/upload_files|photo upload].
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveOwnerPhoto
         */
        public function saveOwnerPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Saves a photo to a user's or community's wall after being uploaded.
         *
         * @param $user_id integer ID of the user on whose wall the photo will be saved.
         * @param $group_id integer ID of community on whose wall the photo will be saved.
         * @param $photo string Parameter returned when the the photo is [vk.com/dev/upload_files|uploaded to the server].
         * @param $server integer
         * @param $hash string
         * @param $latitude number Geographical latitude, in degrees (from '-90' to '90').
         * @param $longitude number Geographical longitude, in degrees (from '-180' to '180').
         * @param $caption string Text describing the photo. 2048 digits max.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.saveWallPhoto
         */
        public function saveWallPhoto(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of photos.
         *
         * @param $q string Search query string.
         * @param $lat number Geographical latitude, in degrees (from '-90' to '90').
         * @param $long number Geographical longitude, in degrees (from '-180' to '180').
         * @param $start_time integer
         * @param $end_time integer
         * @param $sort integer Sort order:
         * @param $offset integer Offset needed to return a specific subset of photos.
         * @param $count integer Number of photos to return.
         * @param $radius integer Radius of search in meters (works very approximately). Available values: '10', '100', '800', '6000', '50000'.
         *
         * @return array
         *
         * @see https://vk.com/dev/photos.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Polls
    {
        /**
         * Adds the current user's vote to the selected answer in the poll.
         *
         * @param $owner_id integer ID of the user or community that owns the poll. Use a negative value to designate a community ID.
         * @param $poll_id integer Poll ID.
         * @param $answer_ids array
         * @param $is_board boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/polls.addVote
         */
        public function addVote(array $parameters = [])
        {
            //
        }

        /**
         * Creates polls that can be attached to the users' or communities' posts.
         *
         * @param $question string question text
         * @param $is_anonymous boolean '1' – anonymous poll, participants list is hidden,, '0' – public poll, participants list is available,, Default value is '0'.
         * @param $is_multiple boolean
         * @param $end_date integer
         * @param $owner_id integer If a poll will be added to a communty it is required to send a negative group identifier. Current user by default.
         * @param $add_answers string available answers list, for example: " ["yes","no","maybe"]", There can be from 1 to 10 answers.
         * @param $photo_id integer
         * @param $background_id string
         *
         * @return int
         *
         * @see https://vk.com/dev/polls.create
         */
        public function create(array $parameters = [])
        {
            //
        }

        /**
         * Deletes the current user's vote from the selected answer in the poll.
         *
         * @param $owner_id integer ID of the user or community that owns the poll. Use a negative value to designate a community ID.
         * @param $poll_id integer Poll ID.
         * @param $answer_id integer Answer ID.
         * @param $is_board boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/polls.deleteVote
         */
        public function deleteVote(array $parameters = [])
        {
            //
        }

        /**
         * Edits created polls
         *
         * @param $owner_id integer poll owner id
         * @param $poll_id integer edited poll's id
         * @param $question string new question text
         * @param $add_answers string answers list, for example: , "["yes","no","maybe"]"
         * @param $edit_answers string object containing answers that need to be edited,, key – answer id, value – new answer text. Example: {"382967099":"option1", "382967103":"option2"}"
         * @param $delete_answers string list of answer ids to be deleted. For example: "[382967099, 382967103]"
         * @param $end_date integer
         * @param $photo_id integer
         * @param $background_id string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/polls.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Returns detailed information about a poll by its ID.
         *
         * @param $owner_id integer ID of the user or community that owns the poll. Use a negative value to designate a community ID.
         * @param $is_board boolean '1' – poll is in a board, '0' – poll is on a wall. '0' by default.
         * @param $poll_id integer Poll ID.
         * @param $extended boolean
         * @param $friends_count integer
         * @param $fields array
         * @param $name_case string
         *
         * @return int
         *
         * @see https://vk.com/dev/polls.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of users who selected specific answers in the poll.
         *
         * @param $owner_id integer ID of the user or community that owns the poll. Use a negative value to designate a community ID.
         * @param $poll_id integer Poll ID.
         * @param $answer_ids array Answer IDs.
         * @param $is_board boolean
         * @param $friends_only boolean '1' — to return only current user's friends, '0' — to return all users (default),
         * @param $offset integer Offset needed to return a specific subset of voters. '0' — (default)
         * @param $count integer Number of user IDs to return (if the 'friends_only' parameter is not set, maximum '1000', otherwise '10'). '100' — (default)
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate (birthdate)', 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.
         * @param $name_case string Case for declension of user name and surname: , 'nom' — nominative (default) , 'gen' — genitive , 'dat' — dative , 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         *
         * @return array
         *
         * @see https://vk.com/dev/polls.getVoters
         */
        public function getVoters(array $parameters = [])
        {
            //
        }
    }

    class PrettyCards
    {
        /**
         * @param $owner_id integer
         * @param $photo string
         * @param $title string
         * @param $link string
         * @param $price string
         * @param $price_old string
         * @param $button string
         *
         * @return array
         *
         * @see https://vk.com/dev/prettyCards.create
         */
        public function create(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $card_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/prettyCards.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $card_id integer
         * @param $photo string
         * @param $title string
         * @param $link string
         * @param $price string
         * @param $price_old string
         * @param $button string
         *
         * @return array
         *
         * @see https://vk.com/dev/prettyCards.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $offset integer
         * @param $count integer
         *
         * @return array
         *
         * @see https://vk.com/dev/prettyCards.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $card_ids array
         *
         * @return array
         *
         * @see https://vk.com/dev/prettyCards.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * @return string
         *
         * @see https://vk.com/dev/prettyCards.getUploadURL
         */
        public function getUploadURL(array $parameters = [])
        {
            //
        }
    }

    class Search
    {
        /**
         * Allows the programmer to do a quick search for any substring.
         *
         * @param $q string Search query string.
         * @param $offset integer Offset for querying specific result subset
         * @param $limit integer Maximum number of results to return.
         * @param $filters array
         * @param $fields array
         * @param $search_global boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/search.getHints
         */
        public function getHints(array $parameters = [])
        {
            //
        }
    }

    class Secure
    {
        /**
         * Adds user activity information to an application
         *
         * @param $user_id integer ID of a user to save the data
         * @param $activity_id integer there are 2 default activities: , * 1 – level. Works similar to ,, * 2 – points, saves points amount, Any other value is for saving completed missions
         * @param $value integer depends on activity_id: * 1 – number, current level number,, * 2 – number, current user's points amount, , Any other value is ignored
         *
         * @return mixed
         *
         * @see https://vk.com/dev/secure.addAppEvent
         */
        public function addAppEvent(array $parameters = [])
        {
            //
        }

        /**
         * Checks the user authentication in 'IFrame' and 'Flash' apps using the 'access_token' parameter.
         *
         * @param $token string client 'access_token'
         * @param $ip string user 'ip address'. Note that user may access using the 'ipv6' address, in this case it is required to transmit the 'ipv6' address. If not transmitted, the address will not be checked.
         *
         * @return int
         *
         * @see https://vk.com/dev/secure.checkToken
         */
        public function checkToken(array $parameters = [])
        {
            //
        }

        /**
         * Returns payment balance of the application in hundredth of a vote.
         *
         * @return integer
         *
         * @see https://vk.com/dev/secure.getAppBalance
         */
        public function getAppBalance(array $parameters = [])
        {
            //
        }

        /**
         * Shows a list of SMS notifications sent by the application using [vk.com/dev/secure.sendSMSNotification|secure.sendSMSNotification] method.
         *
         * @param $user_id integer
         * @param $date_from integer filter by start date. It is set as UNIX-time.
         * @param $date_to integer filter by end date. It is set as UNIX-time.
         * @param $limit integer number of returned posts. By default — 1000.
         *
         * @return array
         *
         * @see https://vk.com/dev/secure.getSMSHistory
         */
        public function getSMSHistory(array $parameters = [])
        {
            //
        }

        /**
         * Shows history of votes transaction between users and the application.
         *
         * @param $type integer
         * @param $uid_from integer
         * @param $uid_to integer
         * @param $date_from integer
         * @param $date_to integer
         * @param $limit integer
         *
         * @return array
         *
         * @see https://vk.com/dev/secure.getTransactionsHistory
         */
        public function getTransactionsHistory(array $parameters = [])
        {
            //
        }

        /**
         * Returns one of the previously set game levels of one or more users in the application.
         *
         * @param $user_ids array
         *
         * @return array
         *
         * @see https://vk.com/dev/secure.getUserLevel
         */
        public function getUserLevel(array $parameters = [])
        {
            //
        }

        /**
         * Opens the game achievement and gives the user a sticker
         *
         * @param $user_ids array
         * @param $achievement_id integer
         *
         * @return array
         *
         * @see https://vk.com/dev/secure.giveEventSticker
         */
        public function giveEventSticker(array $parameters = [])
        {
            //
        }

        /**
         * Sends notification to the user.
         *
         * @param $user_ids array
         * @param $user_id integer
         * @param $message string notification text which should be sent in 'UTF-8' encoding ('254' characters maximum).
         *
         * @return array
         *
         * @see https://vk.com/dev/secure.sendNotification
         */
        public function sendNotification(array $parameters = [])
        {
            //
        }

        /**
         * Sends 'SMS' notification to a user's mobile device.
         *
         * @param $user_id integer ID of the user to whom SMS notification is sent. The user shall allow the application to send him/her notifications (, +1).
         * @param $message string 'SMS' text to be sent in 'UTF-8' encoding. Only Latin letters and numbers are allowed. Maximum size is '160' characters.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/secure.sendSMSNotification
         */
        public function sendSMSNotification(array $parameters = [])
        {
            //
        }

        /**
         * Sets a counter which is shown to the user in bold in the left menu.
         *
         * @param $counters array
         * @param $user_id integer
         * @param $counter integer counter value.
         * @param $increment boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/secure.setCounter
         */
        public function setCounter(array $parameters = [])
        {
            //
        }
    }

    class Stats
    {
        /**
         * Returns statistics of a community or an application.
         *
         * @param $group_id integer Community ID.
         * @param $app_id integer Application ID.
         * @param $timestamp_from integer
         * @param $timestamp_to integer
         * @param $interval string
         * @param $intervals_count integer
         * @param $filters array
         * @param $stats_groups array
         * @param $extended boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/stats.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns stats for a wall post.
         *
         * @param $owner_id string post owner community id. Specify with "-" sign.
         * @param $post_id integer wall post id. Note that stats are available only for '300' last (newest) posts on a community wall.
         *
         * @return array
         *
         * @see https://vk.com/dev/stats.getPostReach
         */
        public function getPostReach(array $parameters = [])
        {
            //
        }

        /**
         * @param $id string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stats.trackVisitor
         */
        public function trackVisitor(array $parameters = [])
        {
            //
        }
    }

    class Status
    {
        /**
         * Returns data required to show the status of a user or community.
         *
         * @param $user_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $group_id integer
         *
         * @return int
         *
         * @see https://vk.com/dev/status.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Sets a new status for the current user.
         *
         * @param $text string Text of the new status.
         * @param $group_id integer Identifier of a community to set a status in. If left blank the status is set to current user.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/status.set
         */
        public function set(array $parameters = [])
        {
            //
        }
    }

    class Storage
    {
        /**
         * Returns a value of variable with the name set by key parameter.
         *
         * @param $key string
         * @param $keys array
         * @param $user_id integer
         * @param $global boolean
         *
         * @return string
         *
         * @see https://vk.com/dev/storage.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns the names of all variables.
         *
         * @param $user_id integer user id, whose variables names are returned if they were requested with a server method.
         * @param $global boolean
         * @param $offset integer
         * @param $count integer amount of variable names the info needs to be collected from.
         *
         * @return array
         *
         * @see https://vk.com/dev/storage.getKeys
         */
        public function getKeys(array $parameters = [])
        {
            //
        }

        /**
         * Saves a value of variable with the name set by 'key' parameter.
         *
         * @param $key string
         * @param $value string
         * @param $user_id integer
         * @param $global boolean
         *
         * @return mixed
         *
         * @see https://vk.com/dev/storage.set
         */
        public function set(array $parameters = [])
        {
            //
        }
    }

    class Stories
    {
        /**
         * Allows to hide stories from chosen sources from current user's feed.
         *
         * @param $owners_ids array List of sources IDs
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stories.banOwner
         */
        public function banOwner(array $parameters = [])
        {
            //
        }

        /**
         * Allows to delete story.
         *
         * @param $owner_id integer Story owner's ID. Current user id is used by default.
         * @param $story_id integer Story ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stories.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Returns stories available for current user.
         *
         * @param $owner_id integer Owner ID.
         * @param $extended boolean '1' — to return additional fields for users and communities. Default value is 0.
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns list of sources hidden from current user's feed.
         *
         * @param $extended boolean '1' — to return additional fields for users and communities. Default value is 0.
         * @param $fields array Additional fields to return
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getBanned
         */
        public function getBanned(array $parameters = [])
        {
            //
        }

        /**
         * Returns story by its ID.
         *
         * @param $stories array Stories IDs separated by commas. Use format {owner_id}+'_'+{story_id}, for example, 12345_54331.
         * @param $extended boolean '1' — to return additional fields for users and communities. Default value is 0.
         * @param $fields array Additional fields to return
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns URL for uploading a story with photo.
         *
         * @param $add_to_news boolean 1 — to add the story to friend's feed.
         * @param $user_ids array List of users IDs who can see the story.
         * @param $reply_to_story string ID of the story to reply with the current.
         * @param $link_text string Link text (for community's stories only).
         * @param $link_url string Link URL. Internal links on https://vk.com only.
         * @param $group_id integer ID of the community to upload the story (should be verified or with the "fire" icon).
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getPhotoUploadServer
         */
        public function getPhotoUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns replies to the story.
         *
         * @param $owner_id integer Story owner ID.
         * @param $story_id integer Story ID.
         * @param $access_key string Access key for the private object.
         * @param $extended boolean '1' — to return additional fields for users and communities. Default value is 0.
         * @param $fields array Additional fields to return
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getReplies
         */
        public function getReplies(array $parameters = [])
        {
            //
        }

        /**
         * Returns stories available for current user.
         *
         * @param $owner_id integer Story owner ID.
         * @param $story_id integer Story ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/stories.getStats
         */
        public function getStats(array $parameters = [])
        {
            //
        }

        /**
         * Allows to receive URL for uploading story with video.
         *
         * @param $add_to_news boolean 1 — to add the story to friend's feed.
         * @param $user_ids array List of users IDs who can see the story.
         * @param $reply_to_story string ID of the story to reply with the current.
         * @param $link_text string Link text (for community's stories only).
         * @param $link_url string Link URL. Internal links on https://vk.com only.
         * @param $group_id integer ID of the community to upload the story (should be verified or with the "fire" icon).
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getVideoUploadServer
         */
        public function getVideoUploadServer(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of story viewers.
         *
         * @param $owner_id integer Story owner ID.
         * @param $story_id integer Story ID.
         * @param $count integer Maximum number of results.
         * @param $offset integer Offset needed to return a specific subset of results.
         * @param $extended boolean '1' — to return detailed information about photos
         *
         * @return array
         *
         * @see https://vk.com/dev/stories.getViewers
         */
        public function getViewers(array $parameters = [])
        {
            //
        }

        /**
         * Hides all replies in the last 24 hours from the user to current user's stories.
         *
         * @param $owner_id integer ID of the user whose replies should be hidden.
         * @param $group_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stories.hideAllReplies
         */
        public function hideAllReplies(array $parameters = [])
        {
            //
        }

        /**
         * Hides the reply to the current user's story.
         *
         * @param $owner_id integer ID of the user whose replies should be hidden.
         * @param $story_id integer Story ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stories.hideReply
         */
        public function hideReply(array $parameters = [])
        {
            //
        }

        /**
         * Allows to show stories from hidden sources in current user's feed.
         *
         * @param $owners_ids array List of hidden sources to show stories from.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/stories.unbanOwner
         */
        public function unbanOwner(array $parameters = [])
        {
            //
        }
    }

    class Streaming
    {
        /**
         * Allows to receive data for the connection to Streaming API.
         *
         * @return array
         *
         * @see https://vk.com/dev/streaming.getServerUrl
         */
        public function getServerUrl(array $parameters = [])
        {
            //
        }

        /**
         * @param $monthly_tier string
         *
         * @return mixed
         *
         * @see https://vk.com/dev/streaming.setSettings
         */
        public function setSettings(array $parameters = [])
        {
            //
        }
    }

    class Users
    {
        /**
         * Returns detailed information on users.
         *
         * @param $user_ids array User IDs or screen names ('screen_name'). By default, current user ID.
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities',
         * @param $name_case string Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         *
         * @return array
         *
         * @see https://vk.com/dev/users.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of followers of the user in question, sorted by date added, most recent first.
         *
         * @param $user_id integer User ID.
         * @param $offset integer Offset needed to return a specific subset of followers.
         * @param $count integer Number of followers to return.
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online'.
         * @param $name_case string Case for declension of user name and surname: 'nom' — nominative (default), 'gen' — genitive , 'dat' — dative, 'acc' — accusative , 'ins' — instrumental , 'abl' — prepositional
         *
         * @return array
         *
         * @see https://vk.com/dev/users.getFollowers
         */
        public function getFollowers(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of IDs of users and communities followed by the user.
         *
         * @param $user_id integer User ID.
         * @param $extended boolean '1' — to return a combined list of users and communities, '0' — to return separate lists of users and communities (default)
         * @param $offset integer Offset needed to return a specific subset of subscriptions.
         * @param $count integer Number of users and communities to return.
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/users.getSubscriptions
         */
        public function getSubscriptions(array $parameters = [])
        {
            //
        }

        /**
         * Returns information whether a user installed the application.
         *
         * @param $user_id integer
         *
         * @return int
         *
         * @see https://vk.com/dev/users.isAppUser
         */
        public function isAppUser(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complain about) a user.
         *
         * @param $user_id integer ID of the user about whom a complaint is being made.
         * @param $type string Type of complaint: 'porn' – pornography, 'spam' – spamming, 'insult' – abusive behavior, 'advertisement' – disruptive advertisements
         * @param $comment string Comment describing the complaint.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/users.report
         */
        public function report(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of users matching the search criteria.
         *
         * @param $q string Search query string (e.g., 'Vasya Babich').
         * @param $sort integer Sort order: '1' — by date registered, '0' — by rating
         * @param $offset integer Offset needed to return a specific subset of users.
         * @param $count integer Number of users to return.
         * @param $fields array Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online',
         * @param $city integer City ID.
         * @param $country integer Country ID.
         * @param $hometown string City name in a string.
         * @param $university_country integer ID of the country where the user graduated.
         * @param $university integer ID of the institution of higher education.
         * @param $university_year integer Year of graduation from an institution of higher education.
         * @param $university_faculty integer Faculty ID.
         * @param $university_chair integer Chair ID.
         * @param $sex integer '1' — female, '2' — male, '0' — any (default)
         * @param $status integer Relationship status: '1' — Not married, '2' — In a relationship, '3' — Engaged, '4' — Married, '5' — It's complicated, '6' — Actively searching, '7' — In love
         * @param $age_from integer Minimum age.
         * @param $age_to integer Maximum age.
         * @param $birth_day integer Day of birth.
         * @param $birth_month integer Month of birth.
         * @param $birth_year integer Year of birth.
         * @param $online boolean '1' — online only, '0' — all users
         * @param $has_photo boolean '1' — with photo only, '0' — all users
         * @param $school_country integer ID of the country where users finished school.
         * @param $school_city integer ID of the city where users finished school.
         * @param $school_class integer
         * @param $school integer ID of the school.
         * @param $school_year integer School graduation year.
         * @param $religion string Users' religious affiliation.
         * @param $interests string Users' interests.
         * @param $company string Name of the company where users work.
         * @param $position string Job position.
         * @param $group_id integer ID of a community to search in communities.
         * @param $from_list array
         *
         * @return array
         *
         * @see https://vk.com/dev/users.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Utils
    {
        /**
         * Checks whether a link is blocked in VK.
         *
         * @param $url string Link to check (e.g., 'http://google.com').
         *
         * @return int
         *
         * @see https://vk.com/dev/utils.checkLink
         */
        public function checkLink(array $parameters = [])
        {
            //
        }

        /**
         * Deletes shortened link from user's list.
         *
         * @param $key string Link key (characters after vk.cc/).
         *
         * @return mixed
         *
         * @see https://vk.com/dev/utils.deleteFromLastShortened
         */
        public function deleteFromLastShortened(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of user's shortened links.
         *
         * @param $count integer Number of links to return.
         * @param $offset integer Offset needed to return a specific subset of links.
         *
         * @return array
         *
         * @see https://vk.com/dev/utils.getLastShortenedLinks
         */
        public function getLastShortenedLinks(array $parameters = [])
        {
            //
        }

        /**
         * Returns stats data for shortened link.
         *
         * @param $key string Link key (characters after vk.cc/).
         * @param $source string Source of scope
         * @param $access_key string Access key for private link stats.
         * @param $interval string Interval.
         * @param $intervals_count integer Number of intervals to return.
         * @param $extended boolean 1 — to return extended stats data (sex, age, geo). 0 — to return views number only.
         *
         * @return int
         *
         * @see https://vk.com/dev/utils.getLinkStats
         */
        public function getLinkStats(array $parameters = [])
        {
            //
        }

        /**
         * Returns the current time of the VK server.
         *
         * @return integer
         *
         * @see https://vk.com/dev/utils.getServerTime
         */
        public function getServerTime(array $parameters = [])
        {
            //
        }

        /**
         * Allows to receive a link shortened via vk.cc.
         *
         * @param $url string URL to be shortened.
         * @param $private boolean 1 — private stats, 0 — public stats.
         *
         * @return int
         *
         * @see https://vk.com/dev/utils.getShortLink
         */
        public function getShortLink(array $parameters = [])
        {
            //
        }

        /**
         * Detects a type of object (e.g., user, community, application) and its ID by screen name.
         *
         * @param $screen_name string Screen name of the user, community (e.g., 'apiclub,' 'andrew', or 'rules_of_war'), or application.
         *
         * @return int
         *
         * @see https://vk.com/dev/utils.resolveScreenName
         */
        public function resolveScreenName(array $parameters = [])
        {
            //
        }
    }

    class Video
    {
        /**
         * Adds a video to a user or community page.
         *
         * @param $target_id integer identifier of a user or community to add a video to. Use a negative value to designate a community ID.
         * @param $video_id integer Video ID.
         * @param $owner_id integer ID of the user or community that owns the video. Use a negative value to designate a community ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.add
         */
        public function add(array $parameters = [])
        {
            //
        }

        /**
         * Creates an empty album for videos.
         *
         * @param $group_id integer Community ID (if the album will be created in a community).
         * @param $title string Album title.
         * @param $privacy array new access permissions for the album. Possible values: , *'0' – all users,, *'1' – friends only,, *'2' – friends and friends of friends,, *'3' – "only me".
         *
         * @return array
         *
         * @see https://vk.com/dev/video.addAlbum
         */
        public function addAlbum(array $parameters = [])
        {
            //
        }

        /**
         * @param $target_id integer
         * @param $album_id integer
         * @param $album_ids array
         * @param $owner_id integer
         * @param $video_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.addToAlbum
         */
        public function addToAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Adds a new comment on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $video_id integer Video ID.
         * @param $message string New comment text.
         * @param $attachments array List of objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
         * @param $from_group boolean '1' — to post the comment from a community name (only if 'owner_id'<0)
         * @param $reply_to_comment integer
         * @param $sticker_id integer
         * @param $guid string
         *
         * @return integer
         *
         * @see https://vk.com/dev/video.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a video from a user or community page.
         *
         * @param $video_id integer Video ID.
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $target_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a video album.
         *
         * @param $group_id integer Community ID (if the album is owned by a community).
         * @param $album_id integer Album ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.deleteAlbum
         */
        public function deleteAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a comment on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $comment_id integer ID of the comment to be deleted.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits information about a video on a user or community page.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $video_id integer Video ID.
         * @param $name string New video title.
         * @param $desc string New video description.
         * @param $privacy_view array Privacy settings in a [vk.com/dev/privacy_setting|special format]. Privacy setting is available for videos uploaded to own profile by user.
         * @param $privacy_comment array Privacy settings for comments in a [vk.com/dev/privacy_setting|special format].
         * @param $no_comments boolean Disable comments for the group video.
         * @param $repeat boolean '1' — to repeat the playback of the video, '0' — to play the video once,
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Edits the title of a video album.
         *
         * @param $group_id integer Community ID (if the album edited is owned by a community).
         * @param $album_id integer Album ID.
         * @param $title string New album title.
         * @param $privacy array new access permissions for the album. Possible values: , *'0' – all users,, *'1' – friends only,, *'2' – friends and friends of friends,, *'3' – "only me".
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.editAlbum
         */
        public function editAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Edits the text of a comment on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $comment_id integer Comment ID.
         * @param $message string New comment text.
         * @param $attachments array List of objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns detailed information about videos.
         *
         * @param $owner_id integer ID of the user or community that owns the video(s).
         * @param $videos array Video IDs, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", Use a negative value to designate a community ID. Example: "-4363_136089719,13245770_137352259"
         * @param $album_id integer ID of the album containing the video(s).
         * @param $count integer Number of videos to return.
         * @param $offset integer Offset needed to return a specific subset of videos.
         * @param $extended boolean '1' — to return an extended response with additional fields
         *
         * @return array
         *
         * @see https://vk.com/dev/video.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns video album info
         *
         * @param $owner_id integer identifier of a user or community to add a video to. Use a negative value to designate a community ID.
         * @param $album_id integer Album ID.
         *
         * @return int
         *
         * @see https://vk.com/dev/video.getAlbumById
         */
        public function getAlbumById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of video albums owned by a user or community.
         *
         * @param $owner_id integer ID of the user or community that owns the video album(s).
         * @param $offset integer Offset needed to return a specific subset of video albums.
         * @param $count integer Number of video albums to return.
         * @param $extended boolean '1' — to return additional information about album privacy settings for the current user
         * @param $need_system boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/video.getAlbums
         */
        public function getAlbums(array $parameters = [])
        {
            //
        }

        /**
         * @param $target_id integer
         * @param $owner_id integer
         * @param $video_id integer
         * @param $extended boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/video.getAlbumsByVideo
         */
        public function getAlbumsByVideo(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $video_id integer Video ID.
         * @param $need_likes boolean '1' — to return an additional 'likes' field
         * @param $start_comment_id integer
         * @param $offset integer Offset needed to return a specific subset of comments.
         * @param $count integer Number of comments to return.
         * @param $sort string Sort order: 'asc' — oldest comment first, 'desc' — newest comment first
         * @param $extended boolean
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/video.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * @param $target_id integer
         * @param $album_id integer
         * @param $album_ids array
         * @param $owner_id integer
         * @param $video_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.removeFromAlbum
         */
        public function removeFromAlbum(array $parameters = [])
        {
            //
        }

        /**
         * Reorders the album in the list of user video albums.
         *
         * @param $owner_id integer ID of the user or community that owns the albums..
         * @param $album_id integer Album ID.
         * @param $before integer ID of the album before which the album in question shall be placed.
         * @param $after integer ID of the album after which the album in question shall be placed.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.reorderAlbums
         */
        public function reorderAlbums(array $parameters = [])
        {
            //
        }

        /**
         * Reorders the video in the video album.
         *
         * @param $target_id integer ID of the user or community that owns the album with videos.
         * @param $album_id integer ID of the video album.
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $video_id integer ID of the video.
         * @param $before_owner_id integer ID of the user or community that owns the video before which the video in question shall be placed.
         * @param $before_video_id integer ID of the video before which the video in question shall be placed.
         * @param $after_owner_id integer ID of the user or community that owns the video after which the photo in question shall be placed.
         * @param $after_video_id integer ID of the video after which the photo in question shall be placed.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.reorderVideos
         */
        public function reorderVideos(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $video_id integer Video ID.
         * @param $reason integer Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
         * @param $comment string Comment describing the complaint.
         * @param $search_query string (If the video was found in search results.) Search query string.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.report
         */
        public function report(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a comment on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $comment_id integer ID of the comment being reported.
         * @param $reason integer Reason for the complaint: , 0 – spam , 1 – child pornography , 2 – extremism , 3 – violence , 4 – drug propaganda , 5 – adult material , 6 – insult, abuse
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.reportComment
         */
        public function reportComment(array $parameters = [])
        {
            //
        }

        /**
         * Restores a previously deleted video.
         *
         * @param $video_id integer Video ID.
         * @param $owner_id integer ID of the user or community that owns the video.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/video.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }

        /**
         * Restores a previously deleted comment on a video.
         *
         * @param $owner_id integer ID of the user or community that owns the video.
         * @param $comment_id integer ID of the deleted comment.
         *
         * @return int
         *
         * @see https://vk.com/dev/video.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns a server address (required for upload) and video data.
         *
         * @param $name string Name of the video.
         * @param $description string Description of the video.
         * @param $is_private boolean '1' — to designate the video as private (send it via a private message), the video will not appear on the user's video list and will not be available by ID for other users, '0' — not to designate the video as private
         * @param $wallpost boolean '1' — to post the saved video on a user's wall, '0' — not to post the saved video on a user's wall
         * @param $link string URL for embedding the video from an external website.
         * @param $group_id integer ID of the community in which the video will be saved. By default, the current user's page.
         * @param $album_id integer ID of the album to which the saved video will be added.
         * @param $privacy_view array
         * @param $privacy_comment array
         * @param $no_comments boolean
         * @param $repeat boolean '1' — to repeat the playback of the video, '0' — to play the video once,
         * @param $compression boolean
         *
         * @return int
         *
         * @see https://vk.com/dev/video.save
         */
        public function save(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of videos under the set search criterion.
         *
         * @param $q string Search query string (e.g., 'The Beatles').
         * @param $sort integer Sort order: '1' — by duration, '2' — by relevance, '0' — by date added
         * @param $hd integer If not null, only searches for high-definition videos.
         * @param $adult boolean '1' — to disable the Safe Search filter, '0' — to enable the Safe Search filter
         * @param $filters array Filters to apply: 'youtube' — return YouTube videos only, 'vimeo' — return Vimeo videos only, 'short' — return short videos only, 'long' — return long videos only
         * @param $search_own boolean
         * @param $offset integer Offset needed to return a specific subset of videos.
         * @param $longer integer
         * @param $shorter integer
         * @param $count integer Number of videos to return.
         * @param $extended boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/video.search
         */
        public function search(array $parameters = [])
        {
            //
        }
    }

    class Wall
    {
        /**
         * @param $owner_id integer
         * @param $post_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.closeComments
         */
        public function closeComments(array $parameters = [])
        {
            //
        }

        /**
         * Adds a comment to a post on a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID.
         * @param $from_group integer Group ID.
         * @param $message string (Required if 'attachments' is not set.) Text of the comment.
         * @param $reply_to_comment integer ID of comment to reply.
         * @param $attachments array (Required if 'message' is not set.) List of media objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media ojbect: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID. For example: "photo100172_166443618,photo66748_265827614"
         * @param $sticker_id integer Sticker ID.
         * @param $guid string Unique identifier to avoid repeated comments.
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.createComment
         */
        public function createComment(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a post from a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $post_id integer ID of the post to be deleted.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.delete
         */
        public function delete(array $parameters = [])
        {
            //
        }

        /**
         * Deletes a comment on a post on a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $comment_id integer Comment ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.deleteComment
         */
        public function deleteComment(array $parameters = [])
        {
            //
        }

        /**
         * Edits a post on a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $post_id integer
         * @param $friends_only boolean
         * @param $message string (Required if 'attachments' is not set.) Text of the post.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error is thrown."
         * @param $services string
         * @param $signed boolean
         * @param $publish_date integer
         * @param $lat number
         * @param $long number
         * @param $place_id integer
         * @param $mark_as_ads boolean
         * @param $close_comments boolean
         * @param $poster_bkg_id integer
         * @param $poster_bkg_owner_id integer
         * @param $poster_bkg_access_hash string
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.edit
         */
        public function edit(array $parameters = [])
        {
            //
        }

        /**
         * Allows to edit hidden post.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID. Used for publishing of scheduled and suggested posts.
         * @param $message string (Required if 'attachments' is not set.) Text of the post.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'page' — wiki-page, 'note' — note, 'poll' — poll, 'album' — photo album, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error will be thrown."
         * @param $signed boolean Only for posts in communities with 'from_group' set to '1': '1' — post will be signed with the name of the posting user, '0' — post will not be signed (default)
         * @param $lat number Geographical latitude of a check-in, in degrees (from -90 to 90).
         * @param $long number Geographical longitude of a check-in, in degrees (from -180 to 180).
         * @param $place_id integer ID of the location where the user was tagged.
         * @param $link_button string Link button ID
         * @param $link_title string Link title
         * @param $link_image string Link image url
         * @param $link_video string Link video ID in format "<owner_id>_<media_id>"
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.editAdsStealth
         */
        public function editAdsStealth(array $parameters = [])
        {
            //
        }

        /**
         * Edits a comment on a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $comment_id integer Comment ID.
         * @param $message string New comment text.
         * @param $attachments array List of objects attached to the comment, in the following format: , "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. For example: "photo100172_166443618,photo66748_265827614"
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.editComment
         */
        public function editComment(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of posts on a user wall or community wall.
         *
         * @param $owner_id integer ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
         * @param $domain string User or community short address.
         * @param $offset integer Offset needed to return a specific subset of posts.
         * @param $count integer Number of posts to return (maximum 100).
         * @param $filter string Filter to apply: 'owner' — posts by the wall owner, 'others' — posts by someone else, 'all' — posts by the wall owner and others (default), 'postponed' — timed posts (only available for calls with an 'access_token'), 'suggests' — suggested posts on a community wall
         * @param $extended boolean '1' — to return 'wall', 'profiles', and 'groups' fields, '0' — to return no additional fields (default)
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.get
         */
        public function get(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of posts from user or community walls by their IDs.
         *
         * @param $posts array User or community IDs and post IDs, separated by underscores. Use a negative value to designate a community ID. Example: "93388_21539,93388_20904,2943_4276,-1_1"
         * @param $extended boolean '1' — to return user and community objects needed to display posts, '0' — no additional fields are returned (default)
         * @param $copy_history_depth integer Sets the number of parent elements to include in the array 'copy_history' that is returned if the post is a repost from another wall.
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.getById
         */
        public function getById(array $parameters = [])
        {
            //
        }

        /**
         * Returns a list of comments on a post on a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID.
         * @param $need_likes boolean '1' — to return the 'likes' field, '0' — not to return the 'likes' field (default)
         * @param $start_comment_id integer
         * @param $offset integer Offset needed to return a specific subset of comments.
         * @param $count integer Number of comments to return (maximum 100).
         * @param $sort string Sort order: 'asc' — chronological, 'desc' — reverse chronological
         * @param $preview_length integer Number of characters at which to truncate comments when previewed. By default, '90'. Specify '0' if you do not want to truncate comments.
         * @param $extended boolean
         * @param $fields array
         * @param $comment_id integer Comment ID.
         * @param $thread_items_count integer Count items in threads.
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Returns information about reposts of a post on user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. By default, current user ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID.
         * @param $offset integer Offset needed to return a specific subset of reposts.
         * @param $count integer Number of reposts to return.
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.getReposts
         */
        public function getReposts(array $parameters = [])
        {
            //
        }

        /**
         * @param $owner_id integer
         * @param $post_id integer
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.openComments
         */
        public function openComments(array $parameters = [])
        {
            //
        }

        /**
         * Pins the post on wall.
         *
         * @param $owner_id integer ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.pin
         */
        public function pin(array $parameters = [])
        {
            //
        }

        /**
         * Adds a new post on a user wall or community wall. Can also be used to publish suggested or scheduled posts.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $friends_only boolean '1' — post will be available to friends only, '0' — post will be available to all users (default)
         * @param $from_group boolean For a community: '1' — post will be published by the community, '0' — post will be published by the user (default)
         * @param $message string (Required if 'attachments' is not set.) Text of the post.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'page' — wiki-page, 'note' — note, 'poll' — poll, 'album' — photo album, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error will be thrown."
         * @param $services string List of services or websites the update will be exported to, if the user has so requested. Sample values: 'twitter', 'facebook'.
         * @param $signed boolean Only for posts in communities with 'from_group' set to '1': '1' — post will be signed with the name of the posting user, '0' — post will not be signed (default)
         * @param $publish_date integer Publication date (in Unix time). If used, posting will be delayed until the set time.
         * @param $lat number Geographical latitude of a check-in, in degrees (from -90 to 90).
         * @param $long number Geographical longitude of a check-in, in degrees (from -180 to 180).
         * @param $place_id integer ID of the location where the user was tagged.
         * @param $post_id integer Post ID. Used for publishing of scheduled and suggested posts.
         * @param $guid string
         * @param $mark_as_ads boolean
         * @param $close_comments boolean
         * @param $mute_notifications boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.post
         */
        public function post(array $parameters = [])
        {
            //
        }

        /**
         * Allows to create hidden post which will not be shown on the community's wall and can be used for creating an ad with type "Community post".
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $message string (Required if 'attachments' is not set.) Text of the post.
         * @param $attachments array (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, 'page' — wiki-page, 'note' — note, 'poll' — poll, 'album' — photo album, '<owner_id>' — ID of the media application owner. '<media_id>' — Media application ID. Example: "photo100172_166443618,photo66748_265827614", May contain a link to an external page to include in the post. Example: "photo66748_265827614,http://habrahabr.ru", "NOTE: If more than one link is being attached, an error will be thrown."
         * @param $signed boolean Only for posts in communities with 'from_group' set to '1': '1' — post will be signed with the name of the posting user, '0' — post will not be signed (default)
         * @param $lat number Geographical latitude of a check-in, in degrees (from -90 to 90).
         * @param $long number Geographical longitude of a check-in, in degrees (from -180 to 180).
         * @param $place_id integer ID of the location where the user was tagged.
         * @param $guid string Unique identifier to avoid duplication the same post.
         * @param $link_button string Link button ID
         * @param $link_title string Link title
         * @param $link_image string Link image url
         * @param $link_video string Link video ID in format "<owner_id>_<media_id>"
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.postAdsStealth
         */
        public function postAdsStealth(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a comment on a post on a user wall or community wall.
         *
         * @param $owner_id integer ID of the user or community that owns the wall.
         * @param $comment_id integer Comment ID.
         * @param $reason integer Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.reportComment
         */
        public function reportComment(array $parameters = [])
        {
            //
        }

        /**
         * Reports (submits a complaint about) a post on a user wall or community wall.
         *
         * @param $owner_id integer ID of the user or community that owns the wall.
         * @param $post_id integer Post ID.
         * @param $reason integer Reason for the complaint: '0' – spam, '1' – child pornography, '2' – extremism, '3' – violence, '4' – drug propaganda, '5' – adult material, '6' – insult, abuse
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.reportPost
         */
        public function reportPost(array $parameters = [])
        {
            //
        }

        /**
         * Reposts (copies) an object to a user wall or community wall.
         *
         * @param $object string ID of the object to be reposted on the wall. Example: "wall66748_3675"
         * @param $message string Comment to be added along with the reposted object.
         * @param $group_id integer Target community ID when reposting to a community.
         * @param $mark_as_ads boolean
         * @param $mute_notifications boolean
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.repost
         */
        public function repost(array $parameters = [])
        {
            //
        }

        /**
         * Restores a post deleted from a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID from whose wall the post was deleted. Use a negative value to designate a community ID.
         * @param $post_id integer ID of the post to be restored.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.restore
         */
        public function restore(array $parameters = [])
        {
            //
        }

        /**
         * Restores a comment deleted from a user wall or community wall.
         *
         * @param $owner_id integer User ID or community ID. Use a negative value to designate a community ID.
         * @param $comment_id integer Comment ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.restoreComment
         */
        public function restoreComment(array $parameters = [])
        {
            //
        }

        /**
         * Allows to search posts on user or community walls.
         *
         * @param $owner_id integer user or community id. "Remember that for a community 'owner_id' must be negative."
         * @param $domain string user or community screen name.
         * @param $query string search query string.
         * @param $owners_only boolean '1' – returns only page owner's posts.
         * @param $count integer count of posts to return.
         * @param $offset integer Offset needed to return a specific subset of posts.
         * @param $extended boolean show extended post info.
         * @param $fields array
         *
         * @return array
         *
         * @see https://vk.com/dev/wall.search
         */
        public function search(array $parameters = [])
        {
            //
        }

        /**
         * Unpins the post on wall.
         *
         * @param $owner_id integer ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
         * @param $post_id integer Post ID.
         *
         * @return mixed
         *
         * @see https://vk.com/dev/wall.unpin
         */
        public function unpin(array $parameters = [])
        {
            //
        }
    }

    class Widgets
    {
        /**
         * Gets a list of comments for the page added through the [vk.com/dev/Comments|Comments widget].
         *
         * @param $widget_api_id integer
         * @param $url string
         * @param $page_id string
         * @param $order string
         * @param $fields array
         * @param $offset integer
         * @param $count integer
         *
         * @return array
         *
         * @see https://vk.com/dev/widgets.getComments
         */
        public function getComments(array $parameters = [])
        {
            //
        }

        /**
         * Gets a list of application/site pages where the [vk.com/dev/Comments|Comments widget] or [vk.com/dev/Like|Like widget] is installed.
         *
         * @param $widget_api_id integer
         * @param $order string
         * @param $period string
         * @param $offset integer
         * @param $count integer
         *
         * @return array
         *
         * @see https://vk.com/dev/widgets.getPages
         */
        public function getPages(array $parameters = [])
        {
            //
        }
    }
}
