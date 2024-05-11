# WP Lightning Wallet Connector

The WP Lightning Wallet Connector is a WordPress plugin that integrates Nostr Wallet Connect (NWC) for managing user Lightning Network wallets directly within WordPress. This plugin supports sending and receiving Lightning transactions ("Zaps"), and includes a custom Elementor widget for easy integration on any page built with Elementor.

## Features

- **Wallet Management**: Users can view their Lightning Network wallet balance and transaction history within their WordPress user profile.
- **Send and Receive Zaps**: Users can send and receive Lightning transactions with minimal clicks, directly from their WordPress dashboard or any page using the Elementor widget.
- **Elementor Integration**: Includes a custom widget for Elementor that allows site builders to add wallet features to any page.
- **Shortcodes**: Provides shortcodes to add wallet connection buttons on posts, pages, or custom post types.

## Installation

1. **Clone the repository or download the zip file**:
   ```bash
   git clone https://github.com/yourusername/wp-lightning-wallet-connector.git
Or download and unzip the repository into your WordPress plugin directory.

Navigate to your WordPress plugin directory:
If you're using a standard setup, it would typically be:

bash
Copy code
cd wp-content/plugins/
Activate the plugin:
Log into your WordPress dashboard, navigate to the 'Plugins' menu and activate the 'WP Lightning Wallet Connector'.

Usage
Shortcodes
Zap Button on Mint Pages:

plaintext
Copy code
[zap_button post_id="123"]
Replace 123 with the ID of the post where you want to display the zap button.

Zap Button on User Profile:

plaintext
Copy code
[zap_profile]
Zap Button on User Profile with Username:

plaintext
Copy code
[zap_profile username="user_name"]
Replace user_name with the actual username to display.

Elementor Widget
Drag and drop the 'Lightning Wallet' widget into your Elementor layout. Configure the widget settings in the Elementor editor panel to customize its functionality.

Configuration
Edit the .env file to set up your environment variables such as DATABASE_URI, NOSTR_PRIVKEY, LN_BACKEND_TYPE, etc., as required by the NWC backend.

Development
Requirements
WordPress 5.0 or higher
Elementor Page Builder
PHP 7.2 or higher
Running Locally
Ensure that your development environment matches the live server as closely as possible. Use tools like Local by Flywheel, MAMP, or Docker for local WordPress development.

Building Assets
If you modify CSS or JavaScript files:

bash
Copy code
npm install
npm run build
Contributing
Contributions are welcome! Please read our contributing guidelines to get started.

Support
If you encounter any issues or have questions, please file an issue on GitHub.

License
This project is licensed under the GNU General Public License v3.0 - see the LICENSE file for details.

Authors
Your Name - Initial work - YourUsername
Acknowledgments
Thanks to the NWC team for providing the API and support.
Thanks to the WordPress and Elementor communities.
css
Copy code

This README should be adapted based on the actual functionality and details of your plugin. It provides a good starting point for documenting a professional WordPress plugin project on GitHub.





