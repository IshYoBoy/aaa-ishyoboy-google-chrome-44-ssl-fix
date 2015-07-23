<?php
/*
Plugin Name: IshYoBoy Google Chrome 44 SSL Fix
Plugin URI: http://github.com/IshYoBoy/ishyoboy-google-chrome-44-ssl-fix
Description: Fixes the problem when Chrome v.44 forces SSL on WordPress Sites. Make sure to remove the plugin when Chrome v.45 is out on 27.07.2015
Version: 1.0
Author: VlooMan - IshYoBoy.com
Author URI: http://ishyoboy.com
*/

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Ishyoboy_Google_Chrome_44_SSL_Fix' ) ) :

	class Ishyoboy_Google_Chrome_44_SSL_Fix {

		function __construct() {

			if ( isset($_SERVER['SERVER_PORT']) && '80' == $_SERVER['SERVER_PORT'] || 
				( !isset($_SERVER['SERVER_PORT']) && (false !== strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome/44') || false !== strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome/45')) ) 
				) {
				unset($_SERVER['HTTPS']);
				unset($_SERVER['HTTP_HTTPS']);
			}
		}

	}

	new Ishyoboy_Google_Chrome_44_SSL_Fix;

endif;
