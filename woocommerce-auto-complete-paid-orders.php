<?php
/**
 * Plugin Name: WooCommerce Auto Complete Paid Orders
 * Description: Automatically mark paid orders as 'completed' in WooCommerce.
 * Version: 1.0
 * Author: Your Name or Organization
 * License: MIT License
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_action('woocommerce_payment_complete', 'auto_complete_paid_orders');

function auto_complete_paid_orders($order_id)
{
    // Get the order object
    $order = wc_get_order($order_id);

    // Check if the order is not already completed
    if ($order && !$order->has_status('completed')) {
        // Update the order status to 'completed'
        $order->update_status('completed');
    }
}
