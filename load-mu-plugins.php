<?php
/**
 * Load Must-Use Plugins
 *
 * Loads all mu-plugins within subfolders where the name of the core plugin, the one with the plugin header, is the same as the name of the plugin directory.
 *
 * @package    WordPress/ClassicPress
 * @subpackage Load_MU_Plugins
 * @category   Core Enhancement
 *
 * Plugin Name: Load Must-Use Plugins
 * Description: Loads all mu-plugins within subfolders where the name of the core plugin, the one with the plugin header, is the same as the name of the plugin directory. Example: <code>mu-tools/mu-tools.php</code>
 * Version:     is static
 * Author:      Controlled Chaos Design | @CCDzine
 * Author URI:  https://ccdzine.com/
 */

// Example: mu-tools/mu-tools.php
$dirs = glob( dirname( __FILE__ ) . '/*', GLOB_ONLYDIR );

foreach ( $dirs as $dir ) {
	if ( file_exists( $dir . DIRECTORY_SEPARATOR . basename( $dir ) . '.php' ) ) {
		require( $dir . DIRECTORY_SEPARATOR . basename( $dir ) . '.php' );
	}
}
