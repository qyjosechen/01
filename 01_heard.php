<?php
/**
 * Loads the 01 environment and template.
 *
 * @package 01
 */

if ( ! isset( $01_did_header ) ) {

	$01_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/01load.php';

	// Set up the WordPress query.
	01();

	// Load the theme template.
	require_once ABSPATH . 01INC . '/temloa.php';

}
