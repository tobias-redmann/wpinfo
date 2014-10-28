<?php

function wpinfo_themes_all() {


// alle installierten Themes


    $all_themes = wp_get_themes();

    $themes = array();

    foreach($all_themes as $theme_path => $theme) {


        $themes[] = array($theme['Name'],$theme['Version']);}


    wpinfo_start_table();

    wpinfo_table_head(array('Name', 'Version'));

    foreach($themes as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();


//error_log( print_r( $all_plugins, true ) );

    }

function wpinfo_themes_active()
{

// aktives Theme


    $my_theme = wp_get_theme();


    echo "<div class='theme'><b>".$my_theme->get( 'Name' )."</b>" . " in Version " . $my_theme->get( 'Version' )."</div>";
}