<?php

function wpinfo_plugins_all() {


// alle installierten Plugins


$all_plugins = get_plugins();

$plugins = array();

foreach($all_plugins as $plugin_path => $plugin) {


    $plugins[] = array($plugin['Name'],$plugin['Version'],$plugin['AuthorURI']);}


    wpinfo_start_table();

    wpinfo_table_head(array('Name', 'Version', 'Author URI'));

    foreach($plugins as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();


//error_log( print_r( $all_plugins, true ) );


    }


function wpinfo_plugins_active()
{

// aktive Plugins

    $all_plugins = get_plugins();

    $plugins = array();

    foreach($all_plugins as $plugin_path => $plugin) {

        if (is_plugin_active($plugin_path)) {

            $plugins[] = array($plugin['Name'],$plugin['Version'],$plugin['AuthorURI']);
        }}


    wpinfo_start_table();

    wpinfo_table_head(array('Name', 'Version', 'Author URI'));

    foreach($plugins as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();


}