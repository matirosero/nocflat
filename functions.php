<?php

// add_action( 'wp_enqueue_scripts', 'flat_parent_theme_enqueue_styles' );

// function flat_parent_theme_enqueue_styles() {
//     wp_enqueue_style( 'flat-style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'nocflat-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array( 'flat-style' )
//     );

// }

// Debug functions
include( 'includes/debug.php' );

// Enqueue functions
include( 'includes/enqueue.php' );

// EDD functions
include( 'includes/edd-functions.php' );

// Shortcodes
include( 'includes/shortcodes.php' );

// functions override
include( 'includes/theme-functions-override.php' );


// Noc functions
include( 'includes/noc-functions.php' );