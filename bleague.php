<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/pgum
 * @since             1.0.0
 * @package           Bleague
 *
 * @wordpress-plugin
 * Plugin Name:       Baduk League
 * Plugin URI:        https://github.com/pgum/bleague
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Piotr Gumulka
 * Author URI:        https://github.com/pgum
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bleague
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bleague-activator.php
 */
function activate_bleague() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bleague-activator.php';
	Bleague_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bleague-deactivator.php
 */
function deactivate_bleague() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bleague-deactivator.php';
	Bleague_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bleague' );
register_deactivation_hook( __FILE__, 'deactivate_bleague' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bleague.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bleague() {

	$plugin = new Bleague();
	$plugin->run();

}
run_bleague();
