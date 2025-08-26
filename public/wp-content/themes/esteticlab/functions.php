<?php
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_features');
function add_scripts_and_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_script('swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), null, true);
}
function add_features(){
    add_theme_support('post-thumbnails');
    add_image_size('arrow-thumb', 80, 80, true);
}
?>