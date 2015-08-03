<?php

function ct_entry_load_scripts_styles() {

	wp_register_style( 'ct-entry-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700');

	// dequeue Founder's font to improve performance
	wp_dequeue_style('ct-founder-google-fonts');

	// enqueue Entry's font
	wp_enqueue_style('ct-entry-google-fonts');
}
add_action('wp_enqueue_scripts', 'ct_entry_load_scripts_styles' );

function founder_custom_excerpt_length( $length ) {

	$new_excerpt_length = get_theme_mod('excerpt_length');

	// if there is a new length set and it's not 15, change it
	if( ! empty( $new_excerpt_length ) && $new_excerpt_length != 40 ){
		return $new_excerpt_length;
	} else {
		return 40;
	}
}