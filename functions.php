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

	// Editor Color Palette
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => __( 'Colour One', 'twenty-twenty-one-child' ),
				'slug'  => 'colour',
				'color' => '#59BACC',
			],
			[
				'name'  => __( 'Colour Two', 'twenty-twenty-one-child' ),
				'slug'  => 'colour-two',
				'color' => '#58AD69',
			],
			[
				'name'  => __( 'Colour Three', 'twenty-twenty-one-child' ),
				'slug'  => 'colour-three',
				'color' => '#FFBC49',
			],
			[
				'name'  => __( 'Colour Four', 'twenty-twenty-one-child' ),
				'slug'  => 'colour-four',
				'color' => '#E2574C',
			],
		]
	);

	// Disable pesky custom font sizes
	add_theme_support( 'disable-custom-font-sizes' );

	// Disable pesky custom colours on the fly
	add_theme_support( 'disable-custom-colors' );

	// Disable pesky custom gradients (cool but not for us)
	add_theme_support( 'disable-custom-gradients' );

}

add_action( 'after_setup_theme', 'twenty_twenty_one_child_setup', 12 );


/**
 * Disable Drop Cap settings by hooking into the Block Editor settings
 *
 * @param array $settings Block Editor settings array
 * @return array $settings
 */
function disable_drop_cap_in_block_editor( $settings ) {
	$settings['__experimentalFeatures']['global']['typography']['dropCap'] = false;
	return $settings;
}

add_filter( 'block_editor_settings', 'disable_drop_cap_in_block_editor' );

/**
 * Twenty Twenty One Child Block Styles
 *
 * @return void
 */
function twenty_twenty_one_child_block_styles() {

	// The Emphasis block style adds a border and some padding to a paragraph block
	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'emphasis',
			'label'        => __( 'Emphasized Paragraph' ),
			'inline_style' => '.is-style-emphasis { border: 2px solid #59BACC; padding: 1.5rem; }',
		)
	);

	// Registering our Button Style stylesheet so it can be enqueued when needed
	wp_register_style( 'ttoc-button-style-arrow', get_stylesheet_directory_uri() . '/button-style-arrow.css', '', filemtime( get_stylesheet_directory() . '/button-style-arrow.css' ) );

	// The Arrow block style appends an Arrow to the button text
	register_block_style(
		'core/button',
		array(
			'name'         => 'arrow',
			'label'        => __( 'Arrow Appended' ),
			'style_handle' => 'ttoc-button-style-arrow',
		)
	);

	/**
	 * Remove the large style for the quote block.
	 *
	 * However, in this case, this won't work because
	 * this style was not originally registered using
	 * PHP!
	 */
	unregister_block_style( 'core/quote', 'large' );

	/**
	 * Remove the Arrow style for the Button Block
	 */
	unregister_block_style( 'core/button', 'arrow' );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_child_block_styles' );
