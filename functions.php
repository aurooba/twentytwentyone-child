<?php

/*
 * Enqueue the parent stylesheet from Twenty Twenty One
 */
function enqueue_parent_styles() {
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( 'Version' ) // this only works if you have Version in the style header
	);
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
