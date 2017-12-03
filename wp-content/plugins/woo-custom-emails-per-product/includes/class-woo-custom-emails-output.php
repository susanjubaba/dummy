<?php
class Woo_Custom_Emails_Output {

	// Define vars
	protected $version;

	// Class constructor
	public function __construct() {

		$this->version = '1.0.3';

		$this->woo_custom_emails_load_dependencies();

	}

	// Load required files
	private function woo_custom_emails_load_dependencies() {

		// Wait until after theme files are loaded
		add_action( 'after_setup_theme', array( $this, 'woo_custom_emails_insert_content' ) );

	}

	// Insert the custom content from the Product
	public function woo_custom_emails_insert_content() {

		// Add action for each email template location to inject our custom message
		add_action( 'woocommerce_email_before_order_table', 'woo_custom_emails_add_message', 1 );
		add_action( 'woocommerce_email_after_order_table', 'woo_custom_emails_add_message', 2 );
		add_action( 'woocommerce_email_order_meta', 'woo_custom_emails_add_message', 3 );
		add_action( 'woocommerce_email_customer_details', 'woo_custom_emails_add_message', 4 );


		function woo_custom_emails_add_message( $order ){

			// Get items in this order
			$items = $order->get_items();

			// Loop through all items in this order
			foreach ( $items as $item ) {

				// Get this product ID
				$this_product_id = $item['product_id'];

				// Get this meta
				$customcontent_meta = get_post_meta( $this_product_id, 'custom_content', true );
				$templatelocation_meta = get_post_meta( $this_product_id, 'location', true );

				$this_actn = (string) current_action();

				if ( $customcontent_meta ){

					// If custom content location is set to this current action, show it
					if ( $templatelocation_meta == $this_actn ) {

						// Define vars
						$output = '';

						// Build output string
						$output .= $customcontent_meta;

						// Output everything
						echo $output;
					}
				}
			}
		}
	}

}
