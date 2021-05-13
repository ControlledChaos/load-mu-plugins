# Load Must-Use Plugins

Loads all WordPress/ClassicPress plugins within subdirectories of the `mu-plugins` directory where the name of the core plugin, the one with the plugin header, is the same as the name of the plugin directory.

To install, simply add the `load-mu-plugins.php` file to the `mu-plugins` directory of your installation. You may need to create this directory in the `wp-content` directory. The make sure directory names and file names match. For instance, out of the box the Advanced Custom Fields plugin comes as `advanced-custom-fields/acf.php` so ACF will not be loaded without changing the name of the directory or the file (e.g. `acf/acf.php`).

![Load Must-Use Plugins Cover Image](https://raw.githubusercontent.com/ControlledChaos/load-mu-plugins/main/cover.jpg)
