# WooCommerce Auto Complete Paid Orders

Automatically mark paid orders as 'completed' in WooCommerce.

## Description

This plugin is designed for WooCommerce and ensures that orders are automatically marked as 'completed' when the payment is complete. It utilizes the `woocommerce_payment_complete` action hook to trigger the update.

## Installation

Installing a custom WordPress plugin involves a few simple steps. Here's a step-by-step guide:

### 1. Upload the Plugin to Your WordPress Site

There are two ways to upload the plugin to your WordPress site:

#### a. Upload via WordPress Dashboard

1. Log in to your WordPress admin dashboard.

2. Navigate to **Plugins > Add New**.

3. Click on the **Upload Plugin** button.

4. Choose the `.zip` file of your custom plugin or directly upload the `.php` file if you didn't compress it.

5. Click **Install Now**.

6. Once the plugin is installed, click on **Activate Plugin**.

#### b. Upload via FTP

1. Use an FTP client (like FileZilla) to connect to your web server.

2. Navigate to the `wp-content/plugins/` directory.

3. Upload your `.php` file directly or the entire plugin directory (if it's in a folder) into the `plugins` directory.

###  Activate the Plugin

- After uploading the plugin, go to **Plugins** in your WordPress dashboard.

- Find your plugin in the list and click **Activate**.

Plugin should now be active on your WordPress site, and the functionality it provides will be in effect.


## Usage

Once the code is implemented, any order that has its payment marked as complete will be automatically updated to the 'completed' status.

**Note:** Be cautious when using this snippet, especially if your business process involves additional steps after payment.

## Author

Vasim Shaikh

## License

This code is licensed under the GPL V2 or later.
