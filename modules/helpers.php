<?php

function wpinfo_start_table() {
  
  echo '<table >';
  
}

function wpinfo_table_head($args) {
  
  ?>
  <thead>
    <tr>
      
      <?php
      
      foreach($args as $arg) {
      
        echo '<th>'. $arg .'</th>';
        
      }
      
      ?>
      
    </tr>
  </thead>
  <tbody>
  <?php
  
}

function wpinfo_table_row($args) {
  
  ?>
    <tr>
      
      <?php
      
      foreach($args as $arg) {
      
        echo '<td>'. $arg .'</td>';
        
      }
      
      ?>
      
    </tr>
  <?php
  
}

function wpinfo_end_table() {
  
  echo '  </tbody>';
  echo '</table>';
  
}


?>
