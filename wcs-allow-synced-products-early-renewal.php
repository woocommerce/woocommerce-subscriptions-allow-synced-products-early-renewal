<?php
/*
 * Plugin Name: WCS Allow Synchronized Products to Renew Early
 * Plugin URI: https://github.com/Prospress/wcs-allow-synced-products-early-renewal
 * Description: Extension for WooCommerce Subscriptions. Allow subscriptions that contain synchronized products to be renewed early.
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv2
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.9
 *
 * GitHub Plugin URI: Prospress/{plugin_slug}
 * GitHub Branch: master
 *
 * Copyright 2018 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package WCS Allow Synchronized Products to Renew Early
 * @author  Prospress Inc.
 * @since   1.0.0
 */
 
 // Don't allow direct access of this file.
 if ( ! defined( 'ABSPATH' ) ) {
 	die();
}

add_filter( 'wcs_allow_synced_product_early_renewal', '__return_true', 20 );
