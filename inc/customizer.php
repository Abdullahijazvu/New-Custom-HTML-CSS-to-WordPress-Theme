<?php
/**
 * WPLearning Customizer.
 */
function wplearning_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'wplearnig_settings', array(
		'title' => 'WPlearning Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );

	$wp_customize->add_section( 'wplearnig_colors', array(
		'title' => 'Colors',
		'panel' => 'wplearnig_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_section( 'wplearnig_labels', array(
		'title' => 'Labels',
		'panel' => 'wplearnig_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_section( 'wplearnig_section', array(
		'title' => 'Show/Hide',
		'panel' => 'wplearnig_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_setting( 'wplearnig_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '#2ca358',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'wplearnig_nav_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'wplearnig_colors',
	) );
	$wp_customize->add_setting( 'wplearnig_body_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '#ffffff',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'wplearnig_body_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'wplearnig_colors',
	) );

	$wp_customize->add_setting( 'wplearnig_featured_block_1', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Latest From template',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'wplearnig_featured_block_1', array(
		'label' => __( 'Featured Box 1 Title' ),
		'type' => 'text',
		'section' => 'wplearnig_labels',
	) );

	$wp_customize->add_setting( 'wplearnig_home_banner', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'yes',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'wplearnig_home_banner', array(
		'label' => __( 'Show/Hide Banner' ),
		'type' => 'radio',
		'section' => 'wplearnig_section',
		'choices' => array(
			'yes'=>'Yes',
			'no'=>'No'
		)
	) );
	
}
add_action( 'customize_register', 'wplearning_customize_register' );

