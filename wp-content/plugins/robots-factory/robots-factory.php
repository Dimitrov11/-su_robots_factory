<?php

/** 
 * Plugin Name:       Robots Factory Custom Plugin
 * Plugin URI:        https://google.com/
 * Description:       This is a custom plugin for Robots Factory
 * Version:           0.1
 * Requires at least: 5.0
 * Requires PHP:      8.0
 * Author:            D. Dimitrov
 * Author URI:        https://google.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/myplugin/
 * Text Domain:       softuni-exam
 * Domain Path:       /languages
 */

if ( ! defined( 'ROBOTS_FACTORY_PLUGIN_ASSETS_DIR' )) {
    define( 'ROBOTS_FACTORY_PLUGIN_ASSETS_DIR', plugins_url( 'assets', __FILE__ ) );
}

if ( ! defined( 'ROBOTS_FACTORY_PLUGIN_INCLUDES_DIR' )) {
    define( 'ROBOTS_FACTORY_PLUGIN_INCLUDES_DIR', plugin_dir_path( __FILE__ ) . 'includes' );
}

if ( ! defined( 'ROBOTS_FACTORY_PLUGIN_DIR' )) {
    define( 'ROBOTS_FACTORY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) . 'includes' );
}

// Load important files
require ROBOTS_FACTORY_PLUGIN_DIR . '/functions.php';
require ROBOTS_FACTORY_PLUGIN_DIR . '/class-robots.php';