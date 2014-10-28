<?php

/**
 * Plugin Name: WP Doctor
 * Plugin URI: http://wpinfo.me
 * Description: Get phpinfo like overview of your WordPress installation.
 * Version: 1.0
 * Author: Tobias Redmann
 * Author URI: http://www.tricd.de
 * License: MIT
 */

/** own css */
function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');



/** own js */
add_action( 'admin_enqueue_scripts', 'enqueue_admin_scripts');
function enqueue_admin_scripts() {

    wp_enqueue_script( 'custom-script', plugins_url( 'js/organictabs.jquery.js', __FILE__ ), array( 'jquery' ), '1.0');
}

include('modules/helpers.php');
include('modules/tabs.php');
include('modules/bloginfo.php');
include('modules/constants.php');
include('modules/plugins.php');
include('modules/themes.php');
include('modules/system.php');


add_action( 'admin_menu', 'wpinfo_menu' );


/** Step 1. */
function wpinfo_menu() {
    add_menu_page('WP Doctor', 'WP Doctor', 'manage_options', 'WP_Doctor', 'wpdoc_page');
    add_submenu_page( 'WP_Doctor', 'WP-Doctor WP', 'WordPress', 'manage_options', 'wp', 'wpdoc_subpage_wp');
    add_submenu_page( 'WP_Doctor', 'WP-Doctor WP_const', 'WordPress Constants', 'manage_options', 'wp_const', 'wpdoc_subpage_wp_const');
    add_submenu_page( 'WP_Doctor', 'WP-Doctor PHP', 'PHP', 'manage_options', 'php', 'wpdoc_subpage_php');
    add_submenu_page( 'WP_Doctor', 'WP-Doctor Webserver', 'Webserver', 'manage_options', 'web', 'wpdoc_subpage_web');
    add_submenu_page( 'WP_Doctor', 'WP-Doctor Send', 'Send', 'manage_options', 'send', 'wpdoc_subpage_send');
}


function wpdoc_page() {

    ?>

    <div class="page-wrap">
        <h1>WP Doctor</h1>
        <p>
        With WP Doctor you get a lot of information about your WordPress configuration, your PHP settings and your webserver.<br />
            As a special feature you can send these information easily by clicking on the send button to a real WordPress Doctor.<br />
        Enjoy.</p>
        <img class="penguin_img" src="<?php echo plugins_url() ?>/wpdoc/img/doctor.png" alt="penguin doctor" />
    </div>

<?php

}

function wpdoc_subpage_wp() {

    ?>


    <div class="page-wrap">

        <h1>Wordpress Installation</h1>


        <div class="tabs">

            <ul class="nav">
                <li class="nav-one"><a href="#bloginfo" class="current">Bloginfo</a></li>
                <li class="nav-two"><a href="#all_plugins">installed Plugins</a>
                <li class="nav-two"><a href="#active_plugins">active Plugins</a></li>
                <li class="nav-two"><a href="#all_themes">installed Themes</a></li>
                <li class="nav-two"><a href="#active_theme">active Theme</a></li>
            </ul>

            <div class="list-wrap">

                <ul id="bloginfo">
                    <?php wpinfo_bloginfo();?>
                </ul>

                <ul id="all_plugins" class="hide">

                    <?php wpinfo_plugins_all();?>

                </ul>

                <ul id="active_plugins" class="hide">

                    <?php wpinfo_plugins_active();?>

                </ul>

                <ul id="all_themes" class="hide">

                    <?php wpinfo_themes_all();?>

                </ul>

                <ul id="active_theme" class="hide">

                    <?php wpinfo_themes_active();?>

                </ul>

            </div> <!-- END List Wrap -->

        </div>
    </div>


    <?php js_tabs();

}

function wpdoc_subpage_wp_const() {

    ?>

    <div class="page-wrap">

        <h1>Wordpress Constants</h1>


        <div class="tabs">

            <ul class="nav">
                <li class="nav-one"><a href="#const_gen" class="current">Generally</a></li>
                <li class="nav-two"><a href="#const_stat">Status</a>
                <li class="nav-two"><a href="#const_path">Paths</a></li>
                <li class="nav-two"><a href="#const_database">Database</a></li>
                <li class="nav-two"><a href="#const_multisite">Multisite</a></li>
                <li class="nav-two"><a href="#const_cache">Cache</a></li>
                <li class="nav-two"><a href="#const_theme">Theme</a></li>
                <li class="nav-two"><a href="#const_debug">Debug</a></li>
                <li class="nav-two"><a href="#const_cookie">Cookie</a></li>
                <li class="nav-two"><a href="#const_time">Time</a></li>
            </ul>

            <div class="list-wrap">

                <ul id="const_gen">
                    <?php wpinfo_constants_generally();?>
                </ul>

                <ul id="const_stat" class="hide">
                    <?php wpinfo_constants_status();?>
                </ul>

                <ul id="const_path" class="hide">
                    <?php wpinfo_constants_path();?>
                </ul>

                <ul id="const_database" class="hide">
                    <?php wpinfo_constants_database();?>
                </ul>

                <ul id="const_multisite" class="hide">
                    <?php wpinfo_constants_multisite();?>
                </ul>

                <ul id="const_cache" class="hide">
                    <?php wpinfo_constants_cache();?>
                </ul>

                <ul id="const_datasystem" class="hide">
                    <?php wpinfo_constants_datasystem();?>
                </ul>

                <ul id="const_theme" class="hide">
                    <?php wpinfo_constants_theme();?>
                </ul>

                <ul id="const_debug" class="hide">
                    <?php wpinfo_constants_debug();?>
                </ul>

                <ul id="const_cookie" class="hide">
                    <?php wpinfo_constants_cookie();?>
                </ul>

                <ul id="const_time" class="hide">
                    <?php wpinfo_constants_time();?>
                </ul>

            </div> <!-- END List Wrap -->

        </div>
    </div>


    <?php js_tabs();

}

function wpdoc_subpage_php() {

    ?>


<div class="page-wrap">

    <h1>PHP</h1>


    <div class="tabs">

        <ul class="nav">
            <li class="nav-one"><a href="#server" class="current">System</a></li>
            <li class="nav-two"><a href="#modules">Modules</a></li>
        </ul>

        <div class="list-wrap">

            <ul id="server">

               <?php $System = wpinfo_system();

                foreach ($System as $Sys_Info)
                    echo "<li>".$Sys_Info."</li>";
                ?>
            </ul>

            <ul id="modules" class="hide">
                <?php
                $extensions = get_loaded_extensions();

                foreach ($extensions as $extension) {
                    echo "<li>".$extension."</li>";
                }
                ?>

            </ul>

        </div> <!-- END List Wrap -->

    </div>
</div>

    <?php js_tabs();


}

function wpdoc_subpage_web() {
    ?>

    <div class="page-wrap">

        <h1>Webserver</h1>


        <div class="tabs">

            <ul class="nav">
                <li class="nav-one"><a href="#server" class="current">Server</a></li>
                <li class="nav-two"><a href="#modules">Modules</a></li>
            </ul>

            <div class="list-wrap">

                <ul id="server">
                    <?php
                    echo "<li>Admin: ".$_SERVER["SERVER_ADMIN"]."</li>";
                    echo "<li>Server-Name: ".$_SERVER["SERVER_NAME"]."</li>";
                    echo "<li>Server-Port: ".$_SERVER["SERVER_PORT"]."</li>";
                    echo "<li>Server-Protokoll: ".$_SERVER["SERVER_PROTOCOL"]."</li>";
                    echo "<li>Server-Signatur: ".$_SERVER["SERVER_SIGNATURE"]."</li>";
                    echo "<li>Server-Software: ".$_SERVER["SERVER_SOFTWARE"]."</li>";
                    ?>
                    <br /><br />
                    <?php
                    echo "<li>Remote-Adresse: ".$_SERVER["REMOTE_ADDR"]."</li>";
                    echo "<li>Remote-Port: ".$_SERVER["REMOTE_PORT"]."</li>";
                    echo "<li>Referer: ".$_SERVER["HTTP_REFERER"]."</li>";
                    ?>
                    <br /><br />
                    <?php
                    echo "<li>User-Agent: ".$_SERVER["HTTP_USER_AGENT"]."</li>";
                    ?>
                </ul>

                <ul id="modules" class="hide">
                    <?php
                    $apache_modules = apache_get_modules();

                    foreach ($apache_modules as $apache_module) {
                        echo "<li>".$apache_module."</li>";
                    } ?>
                </ul>

            </div> <!-- END List Wrap -->

        </div>
    </div>


    <?php js_tabs();


}

    function wpdoc_subpage_send() {

        buffering();

       ?>

        <div class="page-wrap">

           <?php

           //Main action
           if (isset($_POST["send_form"])) {
               form_send();
           }
           else {
               form_echo();
           }
            ?>
        </div>

    <?php
}

//buffering() generates the email output
function buffering()
{

    ob_start();

    if (in_array("wp_inst", $_POST['send_info'])) {
        ?>

        <h1>Wordpress</h1>

        <h3>Bloginfo</h3>

        <?php wpinfo_bloginfo(); ?>

        <h3>installed Plugins</h3>

        <?php wpinfo_plugins_all(); ?>

        <h3>active Plugins</h3>

        <?php wpinfo_plugins_active(); ?>

        <h3>installed Themes</h3>

        <?php wpinfo_themes_all(); ?>

        <h3>active Theme</h3>

        <?php wpinfo_themes_active(); ?>

        <br/><br/>
    <?php
    }

    if (in_array("wp_const", $_POST['send_info'])) {
        ?>

        <h1>Constants</h1>

        <h3>Generally</h3>
        <?php wpinfo_constants_generally(); ?>

        <h3>Status</h3>
        <?php wpinfo_constants_status(); ?>

        <h3>Paths</h3>
        <?php wpinfo_constants_path(); ?>

        <h3>Database</h3>
        <?php wpinfo_constants_database(); ?>

        <h3>Multisite</h3>
        <?php wpinfo_constants_multisite(); ?>

        <h3>Cache</h3>
        <?php wpinfo_constants_cache(); ?>

        <h3>Datasystem</h3>
        <?php wpinfo_constants_datasystem(); ?>

        <h3>Theme</h3>
        <?php wpinfo_constants_theme(); ?>

        <h3>Debug</h3>
        <?php wpinfo_constants_debug(); ?>

        <h3>Cookie</h3>
        <?php wpinfo_constants_cookie(); ?>

        <h3>Time</h3>
        <?php wpinfo_constants_time(); ?>

        <br/><br/>
    <?php
    }

    if (in_array("php", $_POST['send_info'])) {
        ?>

        <h1>PHP</h1>

        <h3>System</h3>
        <?php wpinfo_system(); ?>

        <h3>Modules</h3>
        <?php
        $extensions = get_loaded_extensions();

        foreach ($extensions as $extension) {
            echo "$extension <br />";
        }
        ?>

        <br/><br/>

    <?php
    }

    if (in_array("server", $_POST['send_info'])) {
        ?>

        <h1>Webserver</h1>

        <h3>Server</h3>

        <?php
        echo "Admin: " . $_SERVER["SERVER_ADMIN"] . "<br />";
        echo "Server-Name: " . $_SERVER["SERVER_NAME"] . "<br />";
        echo "Server-Port: " . $_SERVER["SERVER_PORT"] . "<br />";
        echo "Server-Protokoll: " . $_SERVER["SERVER_PROTOCOL"] . "<br />";
        echo "Server-Signatur: " . $_SERVER["SERVER_SIGNATURE"] . "<br />";
        echo "Server-Software: " . $_SERVER["SERVER_SOFTWARE"] . "<br />";
        ?>
        <br/>
        <?php
        echo "Remote-Adresse: " . $_SERVER["REMOTE_ADDR"] . "<br />";
        echo "Remote-Port: " . $_SERVER["REMOTE_PORT"] . "<br />";
        echo "Referer: " . $_SERVER["HTTP_REFERER"] . "<br />";
        ?>
        <br/>
        <?php
        echo "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . "<br />";
        ?>

        <h3>Modules</h3>

        <?php
        $apache_modules = apache_get_modules();

        foreach ($apache_modules as $apache_module) {

            echo "$apache_module <br />";
        }
    }

    $content = ob_get_contents();

    ob_end_clean();

    return $content;

}



// form_echo() generates the form output
function form_echo ($name = "", $subject = "", $comment= "", $email = "",  $error = "", $i_wp_inst = "", $i_wp_const = "", $i_php = "", $i_server = "") {

    if (!empty ($error)) {
        echo "<p class='error' />$error</p>";
    }

    ?>
    <h1>Send data:</h1>

    <div class="tabs">
        <form method="post">

            <h3>Your information:</h3>

            <input type="hidden" name="send_form" value="true"/>

            <label for="name" class="label">name*</label>
            <input type="text" id="name" name="name" placeholder="your name" value="<?php echo htmlspecialchars($name) ?>" required /><br />
            <label for="subject" class="label">subject</label>
            <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject) ?>" placeholder="email subject" /><br />
            <label for="area" class="label" style="margin-bottom: 10px;">comment</label>
            <textarea id="area" name="comment"><?php echo htmlspecialchars($comment) ?></textarea>


            <br /><br /><br />
            <h3>Which information you'd like to send?</h3>

            <input id="wp_inst" type="checkbox" name="send_info[]" value="wp_inst" <?php echo htmlspecialchars($i_wp_inst); ?>>
            <label for="wp_inst">WordPress informations</label>
            <br />
            <input id="wp_const" type="checkbox" name="send_info[]" value="wp_const" <?php echo htmlspecialchars($i_wp_const); ?>>
            <label for="wp_const">WordPress constants</label>
            <br />
            <input id="php" type="checkbox" name="send_info[]" value="php" <?php echo htmlspecialchars($i_php); ?>>
            <label for="php">PHP informations</label>
            <br />
            <input id="server" type="checkbox" name="send_info[]" value="server" <?php echo htmlspecialchars($i_server); ?>>
            <label for="server">Webserver informations</label>
            <br /><br /><br />

            <h3>Who should become these information?</h3>
            <input type="email" name="email" placeholder="email adress" value="<?php echo htmlspecialchars($email); ?>" required />
            <input type="submit" value="Send" class="button">
            <br /><br />
        </form>
    </div>

<?php

}

//form_send() generates the error or sends the form
function form_send () {


    if (isset ($_POST["name"]) && is_string($_POST["name"])) {
        $name = trim($_POST["name"]);
    }
    else {
        $name = "";
    }

    if (isset ($_POST["subject"]) && is_string($_POST["subject"])) {
        $subject = trim($_POST["subject"]);
    }
    else {
        $subject = "";
    }

    if (isset ($_POST["comment"]) && is_string($_POST["comment"])) {
        $comment = trim($_POST["comment"]);
    }
    else {
        $comment = "";
    }

    $i_wp_inst = "";
    $i_wp_const = "";
    $i_php = "";
    $i_server = "";

    if (isset ($_POST["send_info"])) {
        $send_info = $_POST["send_info"];

        if (in_array("wp_inst", $send_info)) {
            $i_wp_inst = "checked";
        }

        if (in_array("wp_const", $send_info)) {
            $i_wp_const = "checked";
        }

        if (in_array("php", $send_info)) {
            $i_php = "checked";
        }

        if (in_array("server", $send_info)) {
            $i_server = "checked";
        }

    }
    else {
        $send_info = "";
    }

    if (isset ($_POST["email"]) && is_string($_POST["email"])) {
        $email = trim($_POST["email"]);
    }
    else {
        $email = "";
    }

    $error = "";

    if (empty($name)) {
        $error = "Please enter your name. ";
    }

    if (empty($email) || (!is_email($email))) {
        $error .= "Please enter a valid email address. ";
    }

    if (empty($send_info)) {
        $error .= "Please choose some information to send.";
    }
    if (strlen($error) > 0) {
        form_echo ($name, $subject, $comment, $email, $error, $i_wp_inst, $i_wp_const, $i_php, $i_server);
    }
    else {

        $content = "<b>$name</b> has sent you the following information with the WordPress Doctor Plugin:<br /><b>$comment</b><br /><br />".buffering();

        #echo $content;

        wp_mail($email, $subject, $content);

    }

}

// js_tabs() activates the tab script
function js_tabs() { ?>

    <script>

        $j=jQuery.noConflict();

        $j(function() {

            $j(".tabs").organicTabs();

        });
    </script>

<?php
    }