<?php 

if ( !defined( 'ABSPATH' ) ) exit;

// define ('PLUGIN_RESOURCE_PATH', plugin_dir_path(__FILE__));
define ('PLUGIN_RESOURCE_PATH', get_home_url() . '/wp-content/plugins/browser-check/dist');

/**
 * Add feature.js script and custom js script to header
 */
wp_enqueue_script('feature-detect', PLUGIN_RESOURCE_PATH . '/js/feature.min.js', array(), '1.0', true);
wp_enqueue_script('feature-warn', PLUGIN_RESOURCE_PATH . '/js/scripts.min.js', array('feature-detect'), '1.0', true);

/**
 * Add Custom CSS Styling
 */
wp_enqueue_style('browser-check', PLUGIN_RESOURCE_PATH . '/css/styles.min.css', false, '1.0', 'all');

/**
 * Add browser warning block to footer
 */
function check_browser_warning_block() {
	echo '<div class="outdated-warning">';
		echo '<div class="card">';
			echo '<h1>Your Browser is out of date!</h1>';
			echo '<p>This site is optimised for modern browsers,we strongly reccommend that you either update your browser or install a modern browser</p>';
		echo '</div>';
	echo '</div>';
}
add_action( 'wp_footer', 'check_browser_warning_block' );