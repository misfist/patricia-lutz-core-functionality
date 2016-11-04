<?php
/**
 * Core Performance Functions
 *
 * @package    Patricia_Lutz_Core_Functionality
 * @subpackage Patricia_Lutz_Core_Functionality\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Remove query strings from static resources
 *
 * @since   0.1.0
 *
 * @uses    script_loader_src filter
 * @uses    style_loader_src filter
 *
 * @param   {string} $src
 * @return  {string} $parts[0]
 */
 function patricia_lutz_core_remove_script_version( $src ){
     $parts = explode( '?ver', $src );
     return $parts[0];
 }
 add_filter( 'script_loader_src', 'patricia_lutz_core_remove_script_version', 15, 1 );
 add_filter( 'style_loader_src', 'patricia_lutz_core_remove_script_version', 15, 1 );

/**
 * Defer Parsing of JavaScript Files
 *
 * @since   0.1.0
 *
 * @uses    clean_url filter
 * @uses    style_loader_src filter
 *
 * @param   {string} $url
 * @return  {string} $parts[0]
 */
function patricia_lutz_core_defer_parsing_js( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) {
        return $url;
    }
    if ( strpos( $url, 'jquery.js' ) ) {
        return $url;
    }
    return "$url' defer ";
}
add_filter( 'clean_url', 'patricia_lutz_core_defer_parsing_js', 11, 1 );
