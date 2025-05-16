<?php
/*
Plugin Name: Better Navigation Block Styles
Plugin URI: http://toensing.com/
Description: Improves the default WordPress mobile hamburger menu appearance by loading optimized CSS.
Version: 1.4
Author: Marc Tönsing
Author URI: https://toensing.com
License: GPLv2 or later
*/

function bmm_enqueue_custom_css_file() {
    wp_enqueue_style(
        'better-mobile-menu-style',
        plugin_dir_url(__FILE__) . 'style.css',
        array(),
        '1.4'
    );
}
add_action('wp_enqueue_scripts', 'bmm_enqueue_custom_css_file');



