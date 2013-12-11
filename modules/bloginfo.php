<?php

function wpinfo_bloginfo() {
  
  
  $infos = array(
  'name',
  'description', 
  'wpurl',
  'url' ,
  'admin_email', 
  'charset', 
  'version' ,
  'html_type', 
  'text_direction',
  'language',
  'stylesheet_url',
  'stylesheet_directory', 
  'template_url',
  'template_directory', 
  'pingback_url',
  'atom_url',
  'rdf_url',
  'rss_url',
  'rss2_url',
  'comments_atom_url', 
  'comments_rss2_url',
  'siteurl' ,
  'home'
    );

  wpinfo_start_table();

  wpinfo_table_head(array('Key', 'Value', 'Usage'));
  
  foreach($infos as $info) {

    wpinfo_table_row(array("<code>$info</code>", '<code>'.get_bloginfo($info). '</code>', "<code>get_bloginfo('$info');</code>"));
    
  }
  
  
  wpinfo_end_table();
  
  
}
