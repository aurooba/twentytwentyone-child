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

/*
 * Child Theme default setup
 */
function twenty_twenty_one_child_setup() {
	// Add support for Editor Styles in the Block Editor
	add_theme_support( 'editor-styles' );

	add_editor_style( 'editor.css' ); // the path to your editor.css file
}

add_action( 'after_setup_theme', 'twenty_twenty_one_child_setup', 12 );
