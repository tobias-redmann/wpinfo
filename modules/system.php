<?php

function wpinfo_system() {
  
  global $wpdb;
  
  $args = array();
  
  $args[]     = array('PHP Version', phpversion(), '<code>phpversion();</code>');
  $args[]     = array('MySQL Version', $wpdb->db_version(), '<code>$wpdb->db_version();</code>');
  
  $args[]     = array('Database Host', "<code>".DB_HOST."</code>", '<code>DB_HOST;</code>');
  $args[]     = array('Database Name', "<code>".DB_NAME."</code>", '<code>DB_NAME;</code>');
  $args[]     = array('Database User', "<code>".DB_USER."</code>", '<code>DB_USER;</code>');
  
  
  $args[]     = array('WordPress Dir', "<code>".ABSPATH."</code>", '<code>ABSPATH;</code>');
  
  
  wpinfo_start_table();

  wpinfo_table_head(array('Info', 'Value', 'Usage'));
  
  foreach($args as $arg) {

    wpinfo_table_row($arg);
    
  }
  
  
  wpinfo_end_table();
  
}
