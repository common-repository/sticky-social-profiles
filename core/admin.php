<?php

if (!defined('ABSPATH')) exit;

class sp_admin {
    public $page_ids;
    public $admin_page_url = 'options-general.php';

    function __construct() {
        add_action('admin_enqueue_scripts', array(&$this, 'admin_enqueue_scripts'));
        add_action('admin_menu', array(&$this, 'admin_menu'));
        add_action('admin_init', array(&$this, 'save_settings'));
    }

    public function admin_enqueue_scripts($hook) {
        if ($hook == 'settings_page_social-profiles') {
            wp_enqueue_script('jquery-ui-core');
            wp_enqueue_script('jquery-ui-tabs');

            wp_enqueue_script('sp-styler-colorpicker-js', SP_URL.'js/colorpicker.js', array(), null, true);
            wp_enqueue_script('sp-styler-userscripts-js', SP_URL.'js/userscripts.js', array(), null, true);
            wp_enqueue_script('sp-styler-userscripts-ie-js', SP_URL.'js/userscripts-ie7.js', array(), null, true);

            wp_enqueue_style('sp-styler-colorpicker-css', SP_URL.'css/colorpicker.css');
            wp_enqueue_style('sp-styler-install-css', SP_URL.'css/install.css');
            wp_enqueue_style('sp-styler-admin-css', SP_URL.'css/admin.css');
            wp_enqueue_style('sp-styler-jqeruyui-css', SP_URL.'css/ui-lightness/jquery-ui-1.10.3.custom.css');

            do_action('sp_admin_enqueue_scripts');
        }
    }

    public function admin_menu() {

        $this->page_ids[] = add_options_page(__("Social Profiles: Settings", "social-profiles"), __("Social Profiles", "social-profiles"), 'activate_plugins', 'social-profiles', array(&$this, 'tools_menu'));

    }

    public function save_settings() {
        if (!empty($_POST)) {
//            var_dump($_POST);
//            exit();
            global $sp_core_loader;

            foreach ($_POST as $k => $v) {
                $sp_core_loader->set($k, $v);
            }
            $sp_core_loader->save();
//            wp_redirect($this->admin_page_url.'?page=social-profiles');
//            exit;
        }
    }

    public function tools_menu() {
        global $sp_core_loader;

        include(SP_PATH.'core/index.php');

        do_action('sp_admin_display_panel_after');
    }
}

$sp_core_admin = new sp_admin();

?>