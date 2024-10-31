<?php
/**
 * Gutenkit Pricing Table 2 Column
 *
 * @package   @@pkg.name
 * @author    @@pkg.author
 * @license   @@pkg.license
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function gutenkit_portfolio_editor_assets() {
	// Scripts.
	wp_enqueue_script(
		'gutenkit-portfolio',
		plugins_url( 'block.build.min.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.build.min.js' )
	);

	// Styles.
	wp_enqueue_style(
		'gutenkit-portfolio',
		plugins_url( 'editor.min.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.min.css' )
	);
}
add_action( 'enqueue_block_editor_assets', 'gutenkit_portfolio_editor_assets' );

/**
 * Enqueue the block's assets for the frontend.
 *
 * @since 1.0.0
 */
function gutenkit_portfolio_frontend_assets() {
	// Styles.
	wp_enqueue_style(
		'gutenkit-portfolio-frontend',
		plugins_url( 'style.min.css', __FILE__ ),
		array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.min.css' )
	);

	// Scripts.
	wp_enqueue_script(
		'gutenkit-portfolio-frontend',
		plugins_url( 'frontend.min.js', __FILE__ ),
		array( 'jquery', 'masonry', 'imagesloaded' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'frontend.min.js' ),
		true
	);
}
add_action( 'enqueue_block_assets', 'gutenkit_portfolio_frontend_assets' );
