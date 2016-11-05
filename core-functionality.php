<?php
/**
 * Plugin Name:     Patricia Lutz Core Functionality
 * Plugin URI:      https://github.com/misfist/patricia-lutz-core-functionality
 * Description:     A plugin starter for core functionality
 * Author:          Pea <pea@misfist.com>
 * Author URI:      https://misfist.com
 * Text Domain:     patricia-lutz-core-functionality
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Patricia_Lutz_Core_Functionality
 */

 if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Directory
 *
 * @since 0.1.0
 */
define( 'PATRICIA_LUTZ_CORE_DIR', plugin_dir_path( __FILE__ ) );
define( 'PATRICIA_LUTZ_CORE_URL', plugin_dir_url( __FILE__ ) );

require_once( 'includes/security.php' );
require_once( 'includes/performance.php' );

require_once( 'includes/helpers.php' );
require_once( 'includes/admin.php' );
require_once( 'includes/public.php' );
