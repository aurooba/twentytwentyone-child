<?php

/*
 * Child theme scripts
 */
function twenty_twenty_one_child_scripts() {
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( 'Version' ) // this only works if you have Version in the style header
	);

	//remove default Block Editor styles
	// wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts', 20 );

/*
 * Child Theme default setup
 */
function twenty_twenty_one_child_setup() {
	// Add support for Editor Styles in the Block Editor
	add_theme_support( 'editor-styles' );

	add_editor_style( 'editor.css' ); // the path to your editor.css file

	// remove theme support for the wide and full  alignment options in the Block Editor
	// remove_theme_support( 'align-wide' );

}

add_action( 'after_setup_theme', 'twenty_twenty_one_child_setup', 12 );
