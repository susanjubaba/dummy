<?php
/*
 * Plugin Name: 	Woo Custom Emails Per Product
 * Description: 	Add custom content per product into the default WooCommerce customer receipt email template.
 * Version: 		1.0.3
 * Author: 			Alex Mustin
 * Author URI: 		http://alexmustin.com
 * Text Domain:		woo_custom_emails_domain
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if not WordPress
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Check for WooCommerce on plugin activation
register_activation_hook( __FILE__, 'woo_custom_emails_activate_check_for_woo' );
function woo_custom_emails_activate_check_for_woo () {
	if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		$woo_plugin_url = "https://wordpress.org/plugins/woocommerce/";
		wp_die( sprintf( __( '%sOops!%s %s%sWooCommerce%s is required for this plugin.%s%sPlease install and activate WooCommerce and try again.', 'woo_custom_emails_domain' ), '<h2>', '</h2>', '<p>', '<a href="' . esc_url( $woo_plugin_url ) . '" target="_blank">', '</a>', '</p>', '<p>', '</p>'  ) );
	}
}

// Include required files
require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-custom-emails-per-product.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-custom-emails-output.php';

// Run main plugin function
function run_woo_custom_emails_per_product() {
	$woo_custom_emails_domain = new Woo_Custom_Emails_Per_Product();
	$woo_custom_emails_domain->run();

	new Woo_Custom_Emails_Output();
}

// Go
run_woo_custom_emails_per_product();

?>
