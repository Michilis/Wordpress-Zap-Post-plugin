<?php
/**
 * Plugin Name: WP Lightning Wallet Connector
 * Plugin URI:  http://yourwebsite.com
 * Description: Connect and manage your Lightning Wallet using Nostr Wallet Connect (NWC) and Elementor widget.
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  http://yourwebsite.com
 * Text Domain: wp-lightning-wallet-connector
 */

defined('ABSPATH') || die('Unauthorized access!');

// Define constants
define('WPLWC_PATH', plugin_dir_path(__FILE__));
define('WPLWC_URL', plugin_dir_url(__FILE__));

// Include the main class file
require_once WPLWC_PATH . 'includes/class-plugin.php';

// Initialize the plugin
function run_wp_lightning_wallet_connector() {
    $plugin = new WP_Lightning_Wallet_Connector();
    $plugin->run();
}

run_wp_lightning_wallet_connector();
