<?php
/*
Plugin Name: Mailster WPML
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=Mailster+WPML
Description: This add on help to integrate the Mailster with WPML
Version: 0.2
Author: EverPress
Author URI: https://mailster.co
Text Domain: mailster-wpml
License: GPLv2 or later
*/

define( 'MAILSTER_WPML_VERSION', '0.2' );
define( 'MAILSTER_WPML_REQUIRED_VERSION', '2.3.beta.13' );
define( 'MAILSTER_WPML_FILE', __FILE__ );

require_once dirname( __FILE__ ) . '/classes/wpml.class.php';
new MailsterWPML();
