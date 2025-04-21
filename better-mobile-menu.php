<?php
/*
Plugin Name: Better Mobile Menu
Description: Improves the default WordPress mobile hamburger menu appearance by loading optimized CSS.
Version: 1.0
Author: Marc Tönsing
*/

function bmm_enqueue_custom_css() {
    wp_register_style('better-mobile-menu-style', false);
    wp_enqueue_style('better-mobile-menu-style');
    wp_add_inline_style('better-mobile-menu-style', '
        .has-modal-open .wp-block-navigation__responsive-dialog {
            margin: 20px !important;
            text-align: right !important;
        }

        .has-modal-open .wp-block-navigation__container,
        .has-modal-open .wp-block-navigation__container ul {
            row-gap: 0 !important;
            width: 100% !important;
        }

        .has-modal-open.wp-block-navigation {
            width: 100% !important;
        }

        .has-modal-open .wp-block-navigation__responsive-dialog ul.wp-block-navigation__container > .wp-block-navigation-item {
            padding: 0 !important;
            width: 100%;
        }

        .has-modal-open .wp-block-navigation__responsive-dialog ul.wp-block-navigation__container .wp-block-navigation-item a {
            border-top: 1px solid #ddd;
            font-size: 22px;
            width: 100%;
            padding: 15px 0px;
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container > .wp-block-navigation-item > .wp-block-navigation-item__content {
            display: inline;
        }

        .has-modal-open .wp-block-navigation__responsive-dialog ul.wp-block-navigation__container .wp-block-navigation-submenu .wp-block-navigation-item a {
            font-size: 18px !important;
            opacity: 0.7;
        }

        .has-modal-open .wp-block-navigation__responsive-dialog ul.wp-block-navigation__container .wp-block-navigation-submenu .wp-block-navigation-item a {
            text-align: right !important;
        }

        .has-modal-open .wp-block-navigation__responsive-dialog ul.wp-block-navigation__container .wp-block-navigation-submenu {
            margin-left: 5px;
        }

        .has-modal-open .wp-block-navigation__submenu-container {
            margin: 0 !important;
            padding: 0 !important;
        }
    ');
}
add_action('wp_enqueue_scripts', 'bmm_enqueue_custom_css');
