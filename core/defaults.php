<?php

if (!defined('ABSPATH')) exit;

final class sp_defaults {
    public $settings = array(
        '__version__'=>'1.0.4',
        '__date__'=>'2013.11.10',
        '__build__'=>'1000',
        '__status__'=>'stable',

        'position'=>'30%',
        'developer'=>'1',

        'FacebookEnable'=>'1',
        'FacebookURL'=>'http://www.facebook.com/wordpress',
        'TwitterEnable'=>'1',
        'TwitterURL'=>'https://twitter.com/wordpress',
        'VKEnable'=>'0',
        'VKURL'=>'',

        'LinkedinEnable'=>'0',
        'LinkedinURL'=>'',
        'LastfmEnable'=>'0',
        'LastfmURL'=>'',
        'FlickrEnable'=>'0',
        'FlickrURL'=>'',

        'InstagramEnable'=>'0',
        'InstagramURL'=>'',
        'GooglePlusEnable'=>'0',
        'GooglePlusURL'=>'',

        'FoursquareEnable'=>'0',
        'FoursquareURL'=>'',
        'VimeoEnable'=>'0',
        'VimeoURL'=>'',

        'GithubEnable'=>'0',
        'GithubURL'=>'',
        'OdnoklassnikiEnable'=>'0',
        'OdnoklassnikiURL'=>'',

        'MailRuEnable'=>'0',
        'MailRuURL'=>'',
        'DribbleEnable'=>'0',
        'DribbleURL'=>'',

        'RdioEnable'=>'0',
        'RdioURL'=>'',
        'CloudSoundEnable'=>'0',
        'CloudSoundURL'=>'',
        'TumblrEnable'=>'0',
        'TumblrURL'=>'',

        'YelpEnable'=>'0',
        'YelpURL'=>'',
        'PinterestEnable'=>'0',
        'PinterestURL'=>'',

        'BehanceEnable'=>'0',
        'BehanceURL'=>'',
        'BloggerEnable'=>'0',
        'BloggerURL'=>'',

        'LiveJournalEnable'=>'0',
        'LiveJournalURL'=>'',
        'MySpaceEnable'=>'0',
        'MySpaceURL'=>'',

        'MySpaceEnable'=>'0',
        'MySpaceURL'=>'',
        'DeliciousEnable'=>'0',
        'DeliciousURL'=>'',

        'RedditEnable'=>'0',
        'RedditURL'=>'',
        'YouTubeEnable'=>'0',
        'YouTubeURL'=>'',

        'StumbleUponEnable'=>'0',
        'StumbleUponURL'=>'',
        'FlattrEnable'=>'0',
        'FlattrURL'=>'',

        'SpotifyEnable'=>'0',
        'SpotifyURL'=>'',
        'BitbucketEnable'=>'0',
        'BitbucketURL'=>'',

        'SlideShareEnable'=>'0',
        'SlideShareURL'=>'',
        'StackoverflowEnable'=>'0',
        'StackoverflowURL'=>'',

        'RenrenEnable'=>'0',
        'RenrenURL'=>'',
        'MixiEnable'=>'0',
        'MixiURL'=>'',

        'MailEnable'=>'0',
        'MailURL'=>'',
        'RSSEnable'=>'0',
        'RSSURL'=>'',

    );

    function __construct() { }

    public function upgrade($old, $scope = 'settings') {
        $work = $scope == 'styler' ? $this->styler : $this->settings;

        foreach ($work as $key => $value) {
            if (!isset($old[$key])) {
                $old[$key] = $value;
            }
        }

        $unset = array();
        foreach ($old as $key => $value) {
            if (!isset($work[$key])) {
                $unset[] = $key;
            }
        }

        if (!empty($unset)) {
            foreach ($unset as $key) {
                unset($old[$key]);
            }
        }

        foreach ($work as $key => $value) {
            if (substr($key, 0, 2) == '__') {
                $old[$key] = $value;
            }
        }

        return $old;
    }
}

?>