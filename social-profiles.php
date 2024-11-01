<?php
/**
 * @package Social_Profiles
 * @version 1.0.3
 */
/*
Plugin Name: Social Profiles
Plugin URI: http://wordpress.org/plugins/sticky-social-profiles/
Description: Social profiles. Facebook, Twitter, LinkedIn, YouTube, Google, Instagramm, Pinterest, Dribble, etc.. (30+ websites)
Author: Gettheme
Version: 1.0.4
Author URI: http://wordpress.org/plugins/sticky-social-profiles/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class sp_loader {

    public $defaults = array();
    public $settings = array();

    function __construct() {
        global $wp_version;

        define('SP_WP_VERSION', intval(substr(str_replace('.', '', $wp_version), 0, 2)));

        $_dirname = trailingslashit(dirname(__FILE__));
        $_urlname = plugin_dir_url(__FILE__);

        define('SP_PATH', $_dirname);
        define('SP_URL', $_urlname);

        require_once(SP_PATH.'core/defaults.php');



        if (is_admin()) {
            require_once(SP_PATH.'core/admin.php');
        }

        add_action('plugins_loaded', array(&$this, 'init_plugin_settings'), 9);
        add_action('wp', array(&$this, 'control_load'));
    }

    public function control_load() {
        if (!is_admin()) {
            add_action('wp_print_footer_scripts', array(&$this, 'embed_social_box'), 1000);
            add_action('wp_head', array(&$this, 'embed_styles'));
            wp_enqueue_script('jquery');
        }
    }


    public function init_plugin_settings() {
        $_d = new sp_defaults();

        $this->settings = get_option('social-profiles');
        $this->styler = get_option('social-profiles-styler');

        if (!is_array($this->settings)) {
            $this->settings = $_d->settings;
            update_option('social-profiles', $this->settings);
        } else if ($this->settings['__build__'] != $_d->settings['__build__']) {
            $this->settings = $_d->upgrade($this->settings);
            update_option('social-profiles', $this->settings);
        }

        define('SOCIAL_NETWORKS', $this->settings['__version__']);

        do_action('sp_init_plugin_settings');
    }

    public function get($name) {
        return $this->settings[$name];
    }

    public function set($name, $value) {
        $this->settings[$name] = $value;
    }

    public function save() {
        update_option('social-profiles', $this->settings);
    }



    public function embed_styles() {
        $_load_css = apply_filters('sp_embed_styles', true);

        if ($_load_css) {
            wp_enqueue_style('sp-style', SP_URL.'css/sp-front.css');
            wp_enqueue_style('sp-mojoshare', SP_URL.'css/MojoShare.css');
            do_action('sp_embed_styles_css');
        }
    }


    public function embed_social_box() {
        do_action('sp_embed_social_box_before');
        do_action('sp_embed_social_box_before_js');

        require_once(SP_PATH.'front/build.php');

        do_action('sp_embed_social_box_after_js');
        do_action('sp_embed_social_box_after');
    }
}

global $sp_core_loader;
$sp_core_loader = new sp_loader();

?>