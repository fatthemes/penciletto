<?php
/**
 * Penciletto Theme Customizer.
 *
 * @package penciletto
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function penciletto_customize_register( $wp_customize ) {
	$wp_customize->remove_setting( 'home_page_layout' );
	$wp_customize->remove_control( 'home_page_layout' );

	$wp_customize->remove_setting( 'sticky_sidebar' );
	$wp_customize->remove_control( 'sticky_sidebar' );

	$wp_customize->remove_setting( 'smooth_scroll' );
	$wp_customize->remove_control( 'smooth_scroll' );
	
	$wp_customize->remove_setting( 'header_logo' );
	$wp_customize->remove_control( 'header_logo' );
}

add_action( 'customize_register', 'penciletto_customize_register', 100 );
