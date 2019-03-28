<?php
/*
 * Plugin Name: WordPress Plugin Template
 * Version: 1.0
 * Plugin URI: http://pguardiar.io/
 * Description: Fill in later
 * Author: P Guardiario
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author P Guardiario
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wordpress-plugin-template.php' );
require_once( 'includes/class-wordpress-plugin-template-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-wordpress-plugin-template-admin-api.php' );
require_once( 'includes/lib/class-wordpress-plugin-template-post-type.php' );
require_once( 'includes/lib/class-wordpress-plugin-template-taxonomy.php' );

/**
 * Returns the main instance of WordPress_Plugin_Template to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WordPress_Plugin_Template
 */
function WordPress_Plugin_Template () {
	$instance = WordPress_Plugin_Template::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = WordPress_Plugin_Template_Settings::instance( $instance );
	}

	return $instance;
}

WordPress_Plugin_Template();