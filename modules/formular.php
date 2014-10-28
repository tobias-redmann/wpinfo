<?php

include('helpers.php');
include('tabs.php');
include('bloginfo.php');
include('constants.php');
include('plugins.php');
include('themes.php');
include('system.php');

?>
<h1>Konstanten</h1>

<h3>Allgemein</h3>
<?php wpinfo_constants_generally(); ?>

<h3>Status</h3>
<?php wpinfo_constants_status(); ?>

<h3>Pfade</h3>
<?php wpinfo_constants_path(); ?>

<h3>Datenbank</h3>
<?php wpinfo_constants_database(); ?>

<h3>Multisite</h3>
<?php wpinfo_constants_multisite(); ?>

<h3>allgemeine Konstanten</h3>
<?php wpinfo_constants_cache(); ?>

<h3>Datensystem</h3>
<?php wpinfo_constants_datasystem(); ?>

<h3>Theme</h3>
<?php wpinfo_constants_theme(); ?>

<h3>Debug</h3>
<?php wpinfo_constants_debug(); ?>

<h3>Cookie</h3>
<?php wpinfo_constants_cookie(); ?>

<h3>Time</h3>
<?php wpinfo_constants_time(); ?>

<h1>Wordpress</h1>

<?php wpinfo_bloginfo();?>
