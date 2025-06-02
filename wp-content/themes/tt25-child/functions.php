<?php
/**
 * Twenty Twenty-Five Child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tt25-child
 */

add_action( 'wp_enqueue_scripts', 'twentytwentyfive_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwentyfive_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentyfive-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'tt25-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'twentytwentyfive-style' ]
	);
}
