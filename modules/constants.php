<?php


function wpinfo_constant_is_set($name)
{
    //is the constant set?

    if (!defined($name)) {

        return 'not set';

    } else {

        return constant($name);

    }

}

function wpinfo_constants_generally() {


  $args = array();

    $args[]     = array('AUTOSAVE_INTERVAL', "<code>".wpinfo_constant_is_set('AUTOSAVE_INTERVAL')."</code>");
    $args[]     = array('CORE_UPGRADE_SKIP_NEW_BUNDLED', "<code>".wpinfo_constant_is_set('CORE_UPGRADE_SKIP_NEW_BUNDLED')."</code>");
    $args[]     = array('DISABLE_WP_CRON', "<code>".wpinfo_constant_is_set('DISABLE_WP_CRON')."</code>");
    $args[]     = array('EMPTY_TRASH_DAYS', "<code>".wpinfo_constant_is_set('EMPTY_TRASH_DAYS')."</code>");
    $args[]     = array('IMAGE_EDIT_OVERWRITE', "<code>".wpinfo_constant_is_set('IMAGE_EDIT_OVERWRITE')."</code>");
    $args[]     = array('MEDIA_TRASH', "<code>".wpinfo_constant_is_set('MEDIA_TRASH')."</code>");
    $args[]     = array('WPLANG', "<code>".wpinfo_constant_is_set('WPLANG')."</code>");
    $args[]     = array('WP_DEFAULT_THEME', "<code>".wpinfo_constant_is_set('WP_DEFAULT_THEME')."</code>");
    $args[]     = array('WP_CRON_LOCK_TIMEOUT', "<code>".wpinfo_constant_is_set('WP_CRON_LOCK_TIMEOUT')."</code>");
    $args[]     = array('WP_MAIL_INTERVAL', "<code>".wpinfo_constant_is_set('WP_MAIL_INTERVAL')."</code>");
    $args[]     = array('WP_POST_REVISIONS', "<code>".wpinfo_constant_is_set('WP_POST_REVISIONS')."</code>");
    $args[]     = array('WP_MAX_MEMORY_LIMIT', "<code>".wpinfo_constant_is_set('WP_MAX_MEMORY_LIMIT')."</code>");
    $args[]     = array('WP_MEMORY_LIMIT', "<code>".wpinfo_constant_is_set('WP_MEMORY_LIMIT')."</code>");
    $args[]     = array('WP_MAX_MEMORY_LIMIT', "<code>".wpinfo_constant_is_set('WP_MAX_MEMORY_LIMIT')."</code>");

  wpinfo_start_table();

  wpinfo_table_head(array('Key', 'Value'));

  foreach($args as $arg) {

    wpinfo_table_row($arg);

  }

  wpinfo_end_table();

}


function wpinfo_constants_status() {


    $args = array();

    $args[]     = array('APP_REQUEST', "<code>".wpinfo_constant_is_set('APP_REQUEST')."</code>");
    $args[]     = array('COMMENTS_TEMPLATE', "<code>".wpinfo_constant_is_set('COMMENTS_TEMPLATE')."</code>");
    $args[]     = array('DOING_AJAX', "<code>".wpinfo_constant_is_set('DOING_AJAX')."</code>");
    $args[]     = array('DOING_AUTOSAVE', "<code>".wpinfo_constant_is_set('DOING_AUTOSAVE')."</code>");
    $args[]     = array('DOING_CRON', "<code>".wpinfo_constant_is_set('DOING_CRON')."</code>");
    $args[]     = array('IFRAME_REQUEST', "<code>".wpinfo_constant_is_set('IFRAME_REQUEST')."</code>");
    $args[]     = array('IS_PROFILE_PAGE', "<code>".wpinfo_constant_is_set('IS_PROFILE_PAGE')."</code>");
    $args[]     = array('WP_ADMIN', "<code>".wpinfo_constant_is_set('WP_ADMIN')."</code>");
    $args[]     = array('WP_BLOG_ADMIN', "<code>".wpinfo_constant_is_set('WP_BLOG_ADMIN')."</code>");
    $args[]     = array('WP_IMPORTING', "<code>".wpinfo_constant_is_set('WP_IMPORTING')."</code>");
    $args[]     = array('WP_INSTALLING', "<code>".wpinfo_constant_is_set('WP_INSTALLING')."</code>");
    $args[]     = array('WP_INSTALLING_NETWORK', "<code>".wpinfo_constant_is_set('WP_INSTALLING_NETWORK')."</code>");
    $args[]     = array('WP_LOAD_IMPORTERS', "<code>".wpinfo_constant_is_set('WP_LOAD_IMPORTERS')."</code>");
    $args[]     = array('WP_NETWORK_ADMIN', "<code>".wpinfo_constant_is_set('WP_NETWORK_ADMIN')."</code>");
    $args[]     = array('WP_REPAIRING', "<code>".wpinfo_constant_is_set('WP_REPAIRING')."</code>");
    $args[]     = array('WP_SETUP_CONFIG', "<code>".wpinfo_constant_is_set('WP_SETUP_CONFIG')."</code>");
    $args[]     = array('WP_UNINSTALL_PLUGIN', "<code>".wpinfo_constant_is_set('WP_UNINSTALL_PLUGIN')."</code>");
    $args[]     = array('WP_USER_ADMIN', "<code>".wpinfo_constant_is_set('WP_USER_ADMIN')."</code>");
    $args[]     = array('XMLRPC_REQUEST', "<code>".wpinfo_constant_is_set('XMLRPC_REQUEST')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_path() {


    $args = array();

    $args[]     = array('ABSPATH', "<code>".wpinfo_constant_is_set('ABSPATH')."</code>");
    $args[]     = array('WPINC', "<code>".wpinfo_constant_is_set('WPINC')."</code>");
    $args[]     = array('WP_LANG_DIR', "<code>".wpinfo_constant_is_set('WP_LANG_DIR')."</code>");
    $args[]     = array('WP_PLUGIN_DIR', "<code>".wpinfo_constant_is_set('WP_PLUGIN_DIR')."</code>");
    $args[]     = array('WP_PLUGIN_URL', "<code>".wpinfo_constant_is_set('WP_PLUGIN_URL')."</code>");
    $args[]     = array('WP_CONTENT_DIR', "<code>".wpinfo_constant_is_set('WP_CONTENT_DIR')."</code>");
    $args[]     = array('WP_CONTENT_URL', "<code>".wpinfo_constant_is_set('WP_CONTENT_URL')."</code>");
    $args[]     = array('WP_HOME', "<code>".wpinfo_constant_is_set('WP_HOME')."</code>");
    $args[]     = array('WP_SITEURL', "<code>".wpinfo_constant_is_set('WP_SITEURL')."</code>");
    $args[]     = array('WP_TEMP_DIR', "<code>".wpinfo_constant_is_set('WP_TEMP_DIR')."</code>");
    $args[]     = array('WPMU_PLUGIN_DIR', "<code>".wpinfo_constant_is_set('WPMU_PLUGIN_DIR')."</code>");
    $args[]     = array('WPMU_PLUGIN_URL', "<code>".wpinfo_constant_is_set('WPMU_PLUGIN_URL')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_database() {


    $args = array();

    $args[]     = array('DB_CHARSET', "<code>".wpinfo_constant_is_set('DB_CHARSET')."</code>");
    $args[]     = array('DB_COLLATE', "<code>".wpinfo_constant_is_set('DB_COLLATE')."</code>");
    $args[]     = array('DB_HOST', "<code>".wpinfo_constant_is_set('DB_HOST')."</code>");
    $args[]     = array('DB_NAME', "<code>".wpinfo_constant_is_set('DB_NAME')."</code>");
    $args[]     = array('DB_PASSWORD', "<code>".wpinfo_constant_is_set('DB_PASSWORD')."</code>");
    $args[]     = array('DB_USER', "<code>".wpinfo_constant_is_set('DB_USER')."</code>");
    $args[]     = array('WP_ALLOW_REPAIR', "<code>".wpinfo_constant_is_set('WP_ALLOW_REPAIR')."</code>");
    $args[]     = array('CUSTOM_USER_TABLE', "<code>".wpinfo_constant_is_set('CUSTOM_USER_TABLE')."</code>");
    $args[]     = array('CUSTOM_USER_META_TABLE', "<code>".wpinfo_constant_is_set('CUSTOM_USER_META_TABLE')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_multisite() {


    $args = array();

    $args[]     = array('ALLOW_SUBDIRECTORY_INSTALL', "<code>".wpinfo_constant_is_set('ALLOW_SUBDIRECTORY_INSTALL')."</code>");
    $args[]     = array('BLOGUPLOADDIR', "<code>".wpinfo_constant_is_set('BLOGUPLOADDIR')."</code>");
    $args[]     = array('BLOG_ID_CURRENT_SITE', "<code>".wpinfo_constant_is_set('BLOG_ID_CURRENT_SITE')."</code>");
    $args[]     = array('DOMAIN_CURRENT_SITE', "<code>".wpinfo_constant_is_set('DOMAIN_CURRENT_SITE')."</code>");
    $args[]     = array('DIEONDBERROR', "<code>".wpinfo_constant_is_set('DIEONDBERROR')."</code>");
    $args[]     = array('ERRORLOGFILE', "<code>".wpinfo_constant_is_set('ERRORLOGFILE')."</code>");
    $args[]     = array('MULTISITE', "<code>".wpinfo_constant_is_set('MULTISITE')."</code>");
    $args[]     = array('NOBLOGREDIRECT', "<code>".wpinfo_constant_is_set('NOBLOGREDIRECT')."</code>");
    $args[]     = array('PATH_CURRENT_SITE', "<code>".wpinfo_constant_is_set('PATH_CURRENT_SITE')."</code>");
    $args[]     = array('UPLOADBLOGSDIR', "<code>".wpinfo_constant_is_set('UPLOADBLOGSDIR')."</code>");
    $args[]     = array('SITE_ID_CURRENT_SITE', "<code>".wpinfo_constant_is_set('SITE_ID_CURRENT_SITE')."</code>");
    $args[]     = array('SUBDOMAIN_INSTALL', "<code>".wpinfo_constant_is_set('SUBDOMAIN_INSTALL')."</code>");
    $args[]     = array('SUNRISE', "<code>".wpinfo_constant_is_set('SUNRISE')."</code>");
    $args[]     = array('UPLOADS', "<code>".wpinfo_constant_is_set('UPLOADS')."</code>");
    $args[]     = array('WPMU_ACCEL_REDIRECT', "<code>".wpinfo_constant_is_set('WPMU_ACCEL_REDIRECT')."</code>");
    $args[]     = array('WPMU_SENDFILE', "<code>".wpinfo_constant_is_set('WPMU_SENDFILE')."</code>");
    $args[]     = array('WP_ALLOW_MULTISITE', "<code>".wpinfo_constant_is_set('WP_ALLOW_MULTISITE')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_cache() {


    $args = array();

    $args[]     = array('WP_CACHE', "<code>".wpinfo_constant_is_set('WP_CACHE')."</code>");
    $args[]     = array('COMPRESS_CSS', "<code>".wpinfo_constant_is_set('COMPRESS_CSS')."</code>");
    $args[]     = array('COMPRESS_SCRIPTS', "<code>".wpinfo_constant_is_set('COMPRESS_SCRIPTS')."</code>");
    $args[]     = array('CONCATENATE_SCRIPTS', "<code>".wpinfo_constant_is_set('CONCATENATE_SCRIPTS')."</code>");
    $args[]     = array('ENFORCE_GZIP', "<code>".wpinfo_constant_is_set('ENFORCE_GZIP')."</code>");


    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_datasystem() {


    $args = array();

    $args[]     = array('FS_CHMOD_DIR', "<code>".wpinfo_constant_is_set('FS_CHMOD_DIR')."</code>");
    $args[]     = array('FS_CHMOD_FILE', "<code>".wpinfo_constant_is_set('FS_CHMOD_FILE')."</code>");
    $args[]     = array('FS_CONNECT_TIMEOUT', "<code>".wpinfo_constant_is_set('FS_CONNECT_TIMEOUT')."</code>");
    $args[]     = array('FS_METHOD', "<code>".wpinfo_constant_is_set('FS_METHOD')."</code>");
    $args[]     = array('FS_TIMEOUT', "<code>".wpinfo_constant_is_set('FS_TIMEOUT')."</code>");
    $args[]     = array('FTP_BASE', "<code>".wpinfo_constant_is_set('FTP_BASE')."</code>");
    $args[]     = array('FTP_CONTENT_DIR', "<code>".wpinfo_constant_is_set('FTP_CONTENT_DIR')."</code>");
    $args[]     = array('FTP_HOST', "<code>".wpinfo_constant_is_set('FTP_HOST')."</code>");
    $args[]     = array('FTP_LANG_DIR', "<code>".wpinfo_constant_is_set('FTP_LANG_DIR')."</code>");
    $args[]     = array('FTP_PASS', "<code>".wpinfo_constant_is_set('FTP_PASS')."</code>");
    $args[]     = array('FTP_PLUGIN_DIR', "<code>".wpinfo_constant_is_set('FTP_PLUGIN_DIR')."</code>");
    $args[]     = array('FTP_PRIKEY', "<code>".wpinfo_constant_is_set('FTP_PRIKEY')."</code>");
    $args[]     = array('FTP_PUBKEY', "<code>".wpinfo_constant_is_set('FTP_PUBKEY')."</code>");
    $args[]     = array('FTP_SSH', "<code>".wpinfo_constant_is_set('FTP_SSH')."</code>");
    $args[]     = array('FTP_SSL', "<code>".wpinfo_constant_is_set('FTP_SSL')."</code>");
    $args[]     = array('FTP_USER', "<code>".wpinfo_constant_is_set('FTP_USER')."</code>");
    $args[]     = array('WP_PROXY_BYPASS_HOSTS', "<code>".wpinfo_constant_is_set('WP_PROXY_BYPASS_HOSTS')."</code>");
    $args[]     = array('WP_PROXY_HOST', "<code>".wpinfo_constant_is_set('WP_PROXY_HOST')."</code>");
    $args[]     = array('WP_PROXY_PASSWORD', "<code>".wpinfo_constant_is_set('WP_PROXY_PASSWORD')."</code>");
    $args[]     = array('WP_PROXY_PORT', "<code>".wpinfo_constant_is_set('WP_PROXY_PORT')."</code>");
    $args[]     = array('WP_PROXY_USERNAME', "<code>".wpinfo_constant_is_set('WP_PROXY_USERNAME')."</code>");
    $args[]     = array('WP_HTTP_BLOCK_EXTERNAL', "<code>".wpinfo_constant_is_set('WP_HTTP_BLOCK_EXTERNAL')."</code>");
    $args[]     = array('WP_ACCESSIBLE_HOSTS', "<code>".wpinfo_constant_is_set('WP_ACCESSIBLE_HOSTS')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_theme() {


    $args = array();

    $args[]     = array('BACKGROUND_IMAGE', "<code>".wpinfo_constant_is_set('BACKGROUND_IMAGE')."</code>");
    $args[]     = array('HEADER_IMAGE', "<code>".wpinfo_constant_is_set('HEADER_IMAGE')."</code>");
    $args[]     = array('HEADER_IMAGE_HEIGHT', "<code>".wpinfo_constant_is_set('HEADER_IMAGE_HEIGHT')."</code>");
    $args[]     = array('HEADER_IMAGE_WIDTH', "<code>".wpinfo_constant_is_set('HEADER_IMAGE_WIDTH')."</code>");
    $args[]     = array('HEADER_TEXTCOLOR', "<code>".wpinfo_constant_is_set('HEADER_TEXTCOLOR')."</code>");
    $args[]     = array('NO_HEADER_TEXT', "<code>".wpinfo_constant_is_set('NO_HEADER_TEXT')."</code>");
    $args[]     = array('STYLESHEETPATH', "<code>".wpinfo_constant_is_set('STYLESHEETPATH')."</code>");
    $args[]     = array('TEMPLATEPATH', "<code>".wpinfo_constant_is_set('TEMPLATEPATH')."</code>");
    $args[]     = array('WP_USE_THEMES', "<code>".wpinfo_constant_is_set('WP_USE_THEMES')."</code>");


    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_debug() {


    $args = array();

    $args[]     = array('SAVEQUERIES', "<code>".wpinfo_constant_is_set('SAVEQUERIES')."</code>");
    $args[]     = array('SCRIPT_DEBUG', "<code>".wpinfo_constant_is_set('SCRIPT_DEBUG')."</code>");
    $args[]     = array('WP_DEBUG', "<code>".wpinfo_constant_is_set('WP_DEBUG')."</code>");
    $args[]     = array('WP_DEBUG_DISPLAY', "<code>".wpinfo_constant_is_set('WP_DEBUG_DISPLAY')."</code>");
    $args[]     = array('WP_DEBUG_LOG', "<code>".wpinfo_constant_is_set('WP_DEBUG_LOG')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_cookie() {


    $args = array();

    $args[]     = array('ADMIN_COOKIE_PATH', "<code>".wpinfo_constant_is_set('ADMIN_COOKIE_PATH')."</code>");
    $args[]     = array('ALLOW_UNFILTERED_UPLOADS', "<code>".wpinfo_constant_is_set('ALLOW_UNFILTERED_UPLOADS')."</code>");
    $args[]     = array('AUTH_COOKIE', "<code>".wpinfo_constant_is_set('AUTH_COOKIE')."</code>");
    $args[]     = array('AUTH_KEY', "<code>".wpinfo_constant_is_set('AUTH_KEY')."</code>");
    $args[]     = array('AUTH_SALT', "<code>".wpinfo_constant_is_set('AUTH_SALT')."</code>");
    $args[]     = array('COOKIEHASH', "<code>".wpinfo_constant_is_set('COOKIEHASH')."</code>");
    $args[]     = array('COOKIEPATH', "<code>".wpinfo_constant_is_set('COOKIEPATH')."</code>");
    $args[]     = array('COOKIE_DOMAIN', "<code>".wpinfo_constant_is_set('COOKIE_DOMAIN')."</code>");
    $args[]     = array('CUSTOM_TAGS', "<code>".wpinfo_constant_is_set('CUSTOM_TAGS')."</code>");
    $args[]     = array('DISALLOW_FILE_EDIT', "<code>".wpinfo_constant_is_set('DISALLOW_FILE_EDIT')."</code>");
    $args[]     = array('DISALLOW_FILE_MODS', "<code>".wpinfo_constant_is_set('DISALLOW_FILE_MODS')."</code>");
    $args[]     = array('DISALLOW_UNFILTERED_HTML', "<code>".wpinfo_constant_is_set('DISALLOW_UNFILTERED_HTML')."</code>");
    $args[]     = array('FORCE_SSL_ADMIN', "<code>".wpinfo_constant_is_set('FORCE_SSL_ADMIN')."</code>");
    $args[]     = array('FORCE_SSL_LOGIN', "<code>".wpinfo_constant_is_set('FORCE_SSL_LOGIN')."</code>");
    $args[]     = array('LOGGED_IN_COOKIE', "<code>".wpinfo_constant_is_set('LOGGED_IN_COOKIE')."</code>");
    $args[]     = array('LOGGED_IN_KEY', "<code>".wpinfo_constant_is_set('LOGGED_IN_KEY')."</code>");
    $args[]     = array('LOGGED_IN_SALT', "<code>".wpinfo_constant_is_set('LOGGED_IN_SALT')."</code>");
    $args[]     = array('NONCE_KEY', "<code>".wpinfo_constant_is_set('NONCE_KEY')."</code>");
    $args[]     = array('USER_COOKIE', "<code>".wpinfo_constant_is_set('USER_COOKIE')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}

function wpinfo_constants_time() {


    $args = array();

    $args[]     = array('MINUTE_IN_SECONDS', "<code>".wpinfo_constant_is_set('MINUTE_IN_SECONDS')."</code>");
    $args[]     = array('HOUR_IN_SECONDS', "<code>".wpinfo_constant_is_set('HOUR_IN_SECONDS')."</code>");
    $args[]     = array('DAY_IN_SECONDS', "<code>".wpinfo_constant_is_set('DAY_IN_SECONDS')."</code>");
    $args[]     = array('WEEK_IN_SECONDS', "<code>".wpinfo_constant_is_set('WEEK_IN_SECONDS')."</code>");
    $args[]     = array('YEAR_IN_SECONDS', "<code>".wpinfo_constant_is_set('YEAR_IN_SECONDS')."</code>");

    wpinfo_start_table();

    wpinfo_table_head(array('Key', 'Value'));

    foreach($args as $arg) {

        wpinfo_table_row($arg);

    }

    wpinfo_end_table();

}