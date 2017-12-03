<?php
/**
 * Responsible for rendering the admin view of the content.
 *
 * @package woo_custom_emails_domain\admin
 */

class Woo_Custom_Emails_Per_Product_Admin {

	private $version;

	public function __construct( $version ) {
		$this->version = $version;
	}

	public function enqueue_styles() {

		wp_enqueue_style(
			'single-post-meta-manager-admin',
			plugin_dir_url( __FILE__ ) . 'css/single-post-meta-manager-admin.css',
			array(),
			$this->version,
			FALSE
		);

	}

	public function add_meta_box() {

		add_meta_box(
			'single-post-meta-manager-admin',
			'Single Post Meta Manager',
			array( $this, 'render_meta_box' ),
			'post',
			'normal',
			'core'
		);

	}

	public function render_meta_box() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/single-post-meta-manager.php';
	}

	public function add_woo_custom_emails_fields() {

		if ( is_admin() ) {

			$newCWF_content = new Custom_WooCommerce_Field( 'custom_content', 'customcontent' );
			$newCWF_content->init();

			$newCWF_location = new Custom_WooCommerce_Field( 'location', 'radio' );
			$newCWF_location->init();

		}
	}

}
