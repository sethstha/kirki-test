<?php
/**
 * Kirki customizer file
 *
 * @package kirki_theme_test
 */

Kirki::add_config( 'kirkitest_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'   => 'option',
	'option_name'   => 'kirkitest',
) );


Kirki::add_panel( 'kirkitest_theme_options', array(
	'priority'		=> 10,
	'title'			=> esc_html__( 'Theme Option', 'kirkitest' ),
) );

Kirki::add_section( 'kirkitest_section_top_header', array(
	'title'			=> esc_html__( 'Top Header Settings', 'kirkitest' ),
	'panel'			=> 'kirkitest_theme_options',
	'priority'		=> 160,
	'capability'	=> 'edit_theme_options',
) );

Kirki::add_field( 'kirkitest_config', array(
	'type'			=> 'text',
	'settings'		=> 'kirkitest_header_title',
	'label'			=> esc_html__( 'Header Title', 'suffice' ),
	'description'	=> esc_html__( 'Header title text.', 'suffice' ),
	'section'		=> 'kirkitest_section_top_header',
	'priority'		=> 10,
	'default'		=> 'Header title',
	'transport'		=> 'postMessage',
) );