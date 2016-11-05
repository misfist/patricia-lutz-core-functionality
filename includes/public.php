<?php
/**
 * Core Public Functions
 *
 * @package    Patricia_Lutz_Core_Functionality
 * @subpackage Patricia_Lutz_Core_Functionality\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Enqueue Scripts
 *
 * @uses wp_enqueue_style()
 * @uses wp_enqueue_scripts filter
 *
 * @return null
 */
function patricia_lutz_core_enqueue_scripts() {
    wp_enqueue_style( 'patricia-lutz-custom', PATRICIA_LUTZ_CORE_URL . 'assets/css/public.css' );
}
add_action( 'wp_enqueue_scripts', 'patricia_lutz_core_enqueue_scripts' );
