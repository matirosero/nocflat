<?php

/**
 * Enqueue scripts and styles.
 */
function noc_deregister_scripts() {

    //Deregister styles

	// Parent
	wp_dequeue_style( 'theme-style-child' );
	wp_deregister_style( 'theme-style-child' );

	// Theme child from parent
	wp_dequeue_style( 'theme-style' );
	wp_deregister_style( 'theme-style' );

	// // tt-main-style
	// wp_dequeue_style( 'tt-main-style' );
	// wp_deregister_style( 'tt-main-style' );

	// // tt-theme-style
	// wp_dequeue_style( 'tt-theme-style' );
	// wp_deregister_style( 'tt-theme-style' );

}
add_action('wp_print_styles', 'noc_deregister_scripts', 99999);



add_action( 'wp_enqueue_scripts', 'noc_theme_enqueue_scripts_styles' );

function noc_theme_enqueue_scripts_styles() {
    // wp_enqueue_style( 'sydney-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'noc-style',
        get_stylesheet_directory_uri() . '/assets/dist/css/style.css'
    );

	// Add our main app js file
	// wp_enqueue_script(
	// 	'rachel_appjs',
	// 	get_stylesheet_directory_uri() . '/assets/dist/js/app.js',
	// 	['jquery'],
	// 	'',
	// 	true
	// );
}