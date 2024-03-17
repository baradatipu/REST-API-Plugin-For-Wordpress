<?php
/**
 * Plugin Name: OS REST-API
 * Plugin URI: https://github.com/baradatipu/REST-API-Plugin-For-Wordpress/
 * Description: This is Open Source REST API Plugin
 * Version: 1.0.0
 * Author: Tipu
 * Author URI: https://example.com
 * License: MIT
 * Icon: https://example.com/path/to/icon.png
 */

// Activation Hook
register_activation_hook(__FILE__, 'os_rest-api_activate');

// Deactivation Hook
register_deactivation_hook(__FILE__, 'os_rest-api_deactivate');

// Uninstall Hook
register_uninstall_hook(__FILE__, 'os_rest-api_uninstall');

// Add shortcode to display "Hello World" message
function hello_world_shortcode() {
    return '<p>Hello, World!</p>';
}
add_shortcode('hello_world', 'hello_world_shortcode');

// Activation Hook Function
function os_rest-api_activate() {
    // Perform activation tasks here
}

// Deactivation Hook Function
function os_rest-api_deactivate() {
    // Perform deactivation tasks here
}

// Uninstall Hook Function
function os_rest-api_uninstall() {
    // Perform uninstallation tasks here
}
