<?php
/**
 * Plugin Name: Sample Plugin
 * Description: A basic WordPress plugin for demonstration purposes.
 * Version: 1.0
 * Author: Your Name
 * License: GPL-2.0+
 */

// Register a custom post type (for demonstration purposes)
function sample_plugin_setup_post_type() {
    register_post_type('book', ['public' => true]);
}
add_action('init', 'sample_plugin_setup_post_type');

// Activation hook: Triggered when the plugin is activated
function sample_plugin_activate() {
    // Register the custom post type
    sample_plugin_setup_post_type();

    // Clear permalinks after registering the post type
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'sample_plugin_activate');

// Deactivation hook: Triggered when the plugin is deactivated
function sample_plugin_deactivate() {
    // Unregister the custom post type
    unregister_post_type('book');

    // Clear permalinks to remove post type rules from the database
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'sample_plugin_deactivate');

// Uninstall hook: Triggered when the plugin is uninstalled
function sample_plugin_uninstall() {
    // Delete any plugin-specific options
    delete_option('sample_plugin_option');

    // Drop custom database tables (if any)
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}sample_custom_table");
}
register_uninstall_hook(__FILE__, 'sample_plugin_uninstall');
