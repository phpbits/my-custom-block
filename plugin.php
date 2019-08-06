<?php
/**
 * Plugin Name: My Custom Block
 * Plugin URI: https://github.com/phpbits/my-custom-block
 * Description: Custom Gutenberg block for tutorial purposes
 * Version: 1.0
 * Author: Jeffrey Carandang
 * Author URI: https://jeffreycarandang.com/
 *
 * @category Gutenberg
 * @author Jeffrey Carandang
 * @version 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

function my_custom_block_editor_assets(){
	$url = untrailingslashit( plugin_dir_url( __FILE__ ) );
	
    // Scripts.
    wp_enqueue_script(
        'my-custom-block-js', // Handle.
        $url . '/build/index.js',
        array( 'wp-blocks', 'wp-i18n', 'wp-element' )
    );

    // Styles.
    wp_enqueue_style(
        'my-custom-block-editor-css', // Handle.
        $url . '/build/editor.css',
        array( 'wp-edit-blocks' )
    );

} // End function my_custom_block_editor_assets().

// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'my_custom_block_editor_assets' );

function my_custom_block_assets(){
	$url = untrailingslashit( plugin_dir_url( __FILE__ ) );
	
	wp_enqueue_style(
        'my-custom-block-frontend-css', // Handle.
        $url . '/build/style.css'
    );
}

// Hook: Frontend assets.
add_action( 'enqueue_block_assets', 'my_custom_block_assets' );