<?php

// Define a global for the version
if ( ! defined( 'ROBOTS_FACTORY_ASSETS_VERSION' ) ) {
    define('ROBOTS_FACTORY_ASSETS_VERSION', '0.1' );
}

// Define a global variable to reuse, to get the assets
if ( ! defined( 'ROBOTS_FACTORY_ASSETS_URL' ) ) {
    define('ROBOTS_FACTORY_ASSETS_URL', get_template_directory_uri() . '/assets/' );
}

// Generate a few support elements
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

/** Function that enqueue all of the assets */
function enqueue_robots_theme_assets() {

    // Define the URL of the theme assets directory 
    $ROBOTS_FACTORY_ASSETS_URL = get_template_directory_uri() . '/assets/';

    // Theme Google Fonts
    wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&display=swap' );
    wp_enqueue_style('font-oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700' );

    // Theme Styles
    wp_enqueue_style('bootstrap', $ROBOTS_FACTORY_ASSETS_URL . 'css/bootstrap.min.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style('magnific-popup', $ROBOTS_FACTORY_ASSETS_URL . 'css/magnific-popup.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style('owl-carousel', $ROBOTS_FACTORY_ASSETS_URL . 'css/owl.carousel.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style('owl-carousel-theme-min', $ROBOTS_FACTORY_ASSETS_URL . 'css/owl.carousel.theme.min.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style('ionicons', $ROBOTS_FACTORY_ASSETS_URL . 'css/ionicons.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_style('main', $ROBOTS_FACTORY_ASSETS_URL . 'css/main.css', array(), ROBOTS_FACTORY_ASSETS_VERSION );
    
    // Theme Scripts
    // wp_enqueue_script('jquery', $ROBOTS_FACTORY_ASSETS_URL . 'js/jquery-1.12.3.min.js', array() );
    wp_enqueue_script('bootstrap', $ROBOTS_FACTORY_ASSETS_URL . 'js/bootstrap.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_script('jquery.magnific-popup', $ROBOTS_FACTORY_ASSETS_URL . 'js/jquery.magnific-popup.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_script('owl.carousel', $ROBOTS_FACTORY_ASSETS_URL . 'js/owl.carousel.min.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION );
    wp_enqueue_script('script', $ROBOTS_FACTORY_ASSETS_URL . 'js/script.js', array( 'jquery' ), ROBOTS_FACTORY_ASSETS_VERSION );
}
add_action('wp_enqueue_scripts', 'enqueue_robots_theme_assets');


/** Register Navigation Menu */
function robots_register_nav_menus() {
    register_nav_menus( array(
            'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'robots_register_nav_menus' );