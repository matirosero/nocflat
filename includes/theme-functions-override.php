<?php

/**
 * Sets custom menu selected in page custom panel as navigation, otherwise sets the default.
 * @since 1.2.7
 */
function noc_themify_theme_menu_nav() {
	$custom_menu = themify_get( 'custom_menu' );
	if ( isset( $custom_menu ) && '' != $custom_menu ) {
		wp_nav_menu( array( 'menu' => $custom_menu, 'fallback_cb' => 'themify_default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav' ) );
	} else {
		wp_nav_menu( array( 'theme_location' => 'main-nav' , 'fallback_cb' => 'themify_default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav' ) );
	}
}