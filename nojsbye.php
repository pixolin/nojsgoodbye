<?php
/**
 * Plugin Name:     Nojsbye
 * Description:     Say goodbye to users not using JavaScript
 * Author:          Bego Mario Garde
 * Author URI:      YOUR SITE HERE
 * Text Domain:     nojsbye
 * Version:         0.1.0
 * License:         GPLv2 or higher
 *
 * @package         Nojsbye
 */

// Make sure this file is only run from within WordPress.
defined( 'ABSPATH' ) || die();

add_action( 'wp_head', 'pix_nojs_goodbye' );
function pix_nojs_goodbye() {
	$html  = '<noscript>';
	$html .= '<style>html{display:none;}</style>';
	$html .= '<meta http-equiv="refresh" content="0.0;' . plugin_dir_url( __FILE__ ) . 'goodbye.php">';
	$html .= '</noscript> ';

	echo $html;
}
