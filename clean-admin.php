<?php 
/**
 * Plugin Name:       Clean Admin
 * Plugin URI:        https://github.com/walissonaguirra
 * Description:       Clean Admin.
 * Version:           1.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.2
 * Author:            Walisson Aguirra
 * Author URI:        https://github.com/walissonaguirra
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       clean-admin
 */

$clean_admin_dir = plugin_dir_path(__FILE__);

require_once "{$clean_admin_dir}/inc/admin-bar.php";
require_once "{$clean_admin_dir}/inc/admin-footer.php";
require_once "{$clean_admin_dir}/inc/admin-widgets.php";
require_once "{$clean_admin_dir}/inc/contextual-tabs.php";
require_once "{$clean_admin_dir}/inc/users.php";

add_action( 'plugins_loaded', function() {
	
	if (current_user_can('administrator')) return;

	require_once "{$clean_admin_dir}/inc/plugin/acf.php";
	require_once "{$clean_admin_dir}/inc/plugin/yoast-seo.php";

	/**
	 * Hide the admin bar on the front-end
	 *
	 * @link https://developer.wordpress.org/reference/hooks/show_admin_bar
	 */
	add_filter( 'show_admin_bar', '__return_false' );

});

