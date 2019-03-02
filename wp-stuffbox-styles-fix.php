<?php
/*
Plugin Name:  Stuffbox Style Fix
Description:  Restore the old WordPress admin styles for stuffboxes
Version:      1.0.0
Author:       Code With Feeling
Author URI:   https://codewithfeeling.com/
License:      MIT License
*/

function cwf_admin_style_fix()
{
  ?>
  <style type="text/css">
    #poststuff .stuffbox .inside {
      padding: 0 12px 12px 12px;
    }
  </style>
  <?php
}

add_action('admin_print_styles', 'cwf_admin_style_fix', 100);
