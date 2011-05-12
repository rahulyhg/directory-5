<?php
/*
Plugin Name: Directory
Plugin URI: http://premium.wpmudev.org/project/directory
Description: Directory - Create full blown directory site.
Version: 1.0.8
Author: Ivan Shaovchev (Incsub)
Author URI: http://ivan.sh
WDP ID: 164
License: GNU General Public License (Version 2 - GPLv2)
*/

/*
Copyright 2011 Incsub, (http://incsub.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// Define plugin version  
define( 'DIR_VERSION', '1.0.8' );
// define the plugin folder url 
define( 'DIR_PLUGIN_URL', WP_PLUGIN_URL . '/' . str_replace( basename(__FILE__), '', plugin_basename(__FILE__) ));
// define the plugin folder dir 
define( 'DIR_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . str_replace( basename(__FILE__), '', plugin_basename(__FILE__) ));
// The text domain for strings localization
define( 'DIR_TEXT_DOMAIN', 'dir_text_domain' );
// The key for the options array
define( 'DIR_OPTIONS_NAME', 'dir_options' );

// include core files 
include_once 'core/core.php';
include_once 'core/data.php';
include_once 'core/functions.php';
include_once 'core/template-tags.php';

if ( is_admin() )
	include_once 'core/admin.php';

// include "Payments" module 
include_once 'modules/payments/loader.php';
// include "Ratings" module 
include_once 'modules/ratings/loader.php';

/* Update Notifications Notice */
// if ( !function_exists( 'wdp_un_check' ) ):
// function wdp_un_check() {
    // if ( !class_exists('WPMUDEV_Update_Notifications') && current_user_can('edit_users') )
        // echo '<div class="error fade"><p>' . __('Please install the latest version of <a href="http://premium.wpmudev.org/project/update-notifications/" title="Download Now &raquo;">our free Update Notifications plugin</a> which helps you stay up-to-date with the most stable, secure versions of WPMU DEV themes and plugins. <a href="http://premium.wpmudev.org/wpmu-dev/update-notifications-plugin-information/">More information &raquo;</a>', 'wpmudev') . '</a></p></div>';
// }
// add_action( 'admin_notices', 'wdp_un_check', 5 );
// add_action( 'network_admin_notices', 'wdp_un_check', 5 );
// endif;

?>
