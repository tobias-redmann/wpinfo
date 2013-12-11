<?php
function wpinfo_admin_tabs( $current = 'homepage' ) {
    $tabs = array( 
        'bloginfo' => 'Bloginfo' );
    
    
    echo '<h2 class="nav-tab-wrapper">';
    
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='?page=wpinfo&tab=$tab'>$name</a>";

    }
    echo '</h2>';
}
