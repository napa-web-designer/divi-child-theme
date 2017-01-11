<?php
/**
 * Custom Functions file for current theme.
 *
 */

// Import parent CSS - Faster than @import.
add_action( 'wp_enqueue_scripts', 'divi_child_theme_css' );
function divi_child_theme_css() {
    wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}





?>
