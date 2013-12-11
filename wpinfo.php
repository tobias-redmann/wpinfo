<?php

/**
 * Plugin Name: WP Info
 * Plugin URI: http://wpinfo.me
 * Description: get phpinfo like overview of your WordPress installation
 * Version: 1.0
 * Author: Tobias Redmann
 * Author URI: http://www.tricd.de
 * License: MIT
 */

include('modules/helpers.php');
include('modules/tabs.php');
include('modules/bloginfo.php');
include('modules/system.php');

add_action( 'admin_menu', 'wpinfo_menu' );

/** Step 1. */
function wpinfo_menu() {
	add_management_page( 'WP Info', 'System Information', 'manage_options', 'wpinfo', 'wpinfo_page' );
}

function wpinfo_page() {
  
  ?>

  <div class="wrap">
    <h2>WP Info</h2>
    
    <?php /* wpinfo_admin_tabs(); */ ?>
    
    <h3>Bloginfo</h3>
    <?php wpinfo_bloginfo(); ?>
  
    <h3>System</h3>
    <?php wpinfo_system(); ?>
  </div>

  <?php
  
}
