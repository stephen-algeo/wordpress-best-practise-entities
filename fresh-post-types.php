<?php
/**
 * Plugin Name: Fresh-post-types
 * Version: 0.1-alpha
 * Description: PLUGIN DESCRIPTION HERE
 * Author: YOUR NAME HERE
 * Author URI: YOUR SITE HERE
 * Plugin URI: PLUGIN SITE HERE
 * Text Domain: fresh-post-types
 * Domain Path: /languages
 * @package Fresh-post-types
 */


require_once ('lib/activate.php');
require_once ('lib/post-manager.php');
require_once ('side.php');

use Fresh_Core_WP_Test\Controllers\Setup_Controller;

$activate = new Setup_Controller();

$activate->run();