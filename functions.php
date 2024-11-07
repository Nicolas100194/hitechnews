<?php

function theme_hitechnews_register_assets(){
    wp_enqueue_style('hitechnews', get_stylesheet_directory_uri().'/assets/sass/main.css');
}

function hitechnews_supports(){
    add_theme_support('title-tag');
}


function hitechnews_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'hitechnews'),
    ));
}

add_action('wp_enqueue_scripts', 'theme_hitechnews_register_assets');
add_action('after_setup_theme', 'hitechnews_theme_setup');
add_action('after_setup_theme', 'hitechnews_supports');
