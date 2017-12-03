=== Woo Custom Emails Per Product ===
Contributors: alexmustin
Author: alexmustin
Author URI: http://alexmustin.com/
Donate link: https://venmo.com/Alex-Mustin
Tags: email, template, woo, woocommerce, customer, receipt, product
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.0.3
Version: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add custom content for each product into the default WooCommerce customer receipt emails.

== Description ==

Easily add custom content for each product into the default WooCommerce customer receipt emails. Enter text or HTML code for a WooCommerce product, and choose where it will be displayed in the default “Customer Order Processing” email template: before or after the Order Details table, after the Order Meta, or after the Customer Details.

Great for product instructions to users, linking to follow-up registration forms, advertising related products/events, or anything else!

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/woo-custom-emails-per-product/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to “Products” and Edit one of your published products.
4. Scroll down to the "Product Data" section and look in the “General” tab.
5. Scroll down to the new options available: “Custom Email Content” and “Content Location”.
6. Enter the custom text you’d like to display in the “Custom Email Content” field. HTML is allowed.
7. Select where your custom content will display inside the email, by choosing one of the “Content Location” options.
8. Publish/Update the Product.
9. Now, try to purchase one of the products you have customized with this plugin — when you receive the customer email, you will see your custom content showing in the location you’ve chosen.

== Frequently Asked Questions ==

= What HTML tags are allowed? =
Currently, the following HTML tags are allowed in the "Custom Email Content" field:
- article
- section
- div
- h1, h2, h3, h4, h5, h6
- ul, ol, li
- p
- a
- b, strong
- i, em
- span
- hr
- img

If you are having any issues, please post in the Support Forum.

== Screenshots ==

1. New options for Product Data: "Custom Email Content" and "Content Location"
2. Custom Content example in the default WooCommerce customer receipt email
3. Banner ad example

== Changelog ==

= 1.0.3 - (Sept 8, 2017) =
Fix: Fixed issue of PHP code showing in the admin area

= 1.0.2 - (Sept 5, 2017) =
Fix: Added support for "align" attribute in img tags

= 1.0.1 - (Jul 6, 2017) =
First release!

== Upgrade Notice ==

= 1.0.1 =
First release!

= 1.0.3 =
Version 1.0.3 fixes the issue where some PHP code would show in the Admin area. Update today!
