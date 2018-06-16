<?php
/**
 * Additional Homepage Settings Options.
 *
 * @package     Evoke
 * @since       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wp_customize->add_setting(
	'front_page_hide_title',
	array(
		'default' => evoke_get_option( 'front_page_hide_title' ),
		'transport' => 'postMessage'
	)
);

$wp_customize->add_control(
	'front_page_hide_title',
	array(
		'type'           => 'checkbox',
		'section'        => 'static_front_page',
		'priority'       => 20,
		'label'          => __( 'Hide Title on Homepage', 'evoke' ),
	)
);