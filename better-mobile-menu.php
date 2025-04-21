<?php
/*
Plugin Name: Better Navigation Block Styles
Description: Improves the default WordPress mobile hamburger menu appearance by loading optimized CSS.
Version: 1.0
Author: Marc Tönsing
License: GPLv2 or later
*/

function bmm_enqueue_custom_css_file() {
    wp_enqueue_style(
        'better-mobile-menu-style',
        plugin_dir_url(__FILE__) . 'style.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'bmm_enqueue_custom_css_file');



