<?php

function my_basic_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Register a navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-basic-theme'),
    ));
}

add_action('after_setup_theme', 'my_basic_theme_setup');

function my_basic_theme_scripts() {
    wp_enqueue_style('my-basic-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_basic_theme_scripts');
