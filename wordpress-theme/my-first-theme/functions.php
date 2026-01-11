<?php
// Theme setup function
function my_first_theme_setup() {
    add_theme_support('title-tag');
}

// Hooking the function to WordPress
add_action('after_setup_theme', 'my_first_theme_setup');
?>
function my_first_theme_assets() {
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'my_first_theme_assets');

