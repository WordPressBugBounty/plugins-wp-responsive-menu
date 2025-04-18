<?php
/**
* Plugin Name: WP Responsive Menu
* Description: WP Responsive Menu is mobile menu plugin that lets you add a highly customizable responsive menu to any WordPress site in no time.
* Plugin URI: https://www.magnigenie.com/downloads/wp-responsive-menu-pro/
* Author: MagniGenie
* Version: 3.2
* Author URI: http://magnigenie.com/
* Domain Path: /languages/
*
* @package wprmenu
*/

defined( 'ABSPATH' ) || exit;

// Plugin Folder URL.
if ( ! defined( 'WPRMENU_FILE' ) ) {
  define( 'WPRMENU_FILE', __FILE__ );
}

if ( ! defined( 'WPRMENU_BASE' ) ) {
  define( 'WPRMENU_BASE', plugin_basename( __FILE__ ) );
}


// Include WPR Menu Loader class.
if ( ! class_exists( 'WPR_Menu_Loader', false ) ) {
  include_once dirname( __FILE__ ) . '/inc/wprmenu-loader.php';
}

/**
 * Returns the main instance of WP_Responsive_Menu.
 *
 * @since  3.1.4
 * @return WP_Responsive_Menu
 */
function WP_Responsive_Menu() {
  return WPR_Menu_Loader::instance();
}

WP_Responsive_Menu();