<?php

add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );


function bcg_theme_styles() {
    
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css' );
    
}
add_action( 'wp_enqueue_scripts', 'bcg_theme_styles' );

?>
