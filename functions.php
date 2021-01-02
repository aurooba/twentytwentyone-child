<?php

/*
 * Enqueue the parent stylesheet from Twenty Twenty One
 */
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', '', '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );