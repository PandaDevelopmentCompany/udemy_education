<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'childhood-scripts_js', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), null, true);
};

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
?>