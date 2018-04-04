<?php
/*
* Plugin Name: wcm2017_demo
* Description: En plugin för att ladda in javascript-filen radhika-custom-script.js
* Author: Radhika 
*/
function myOwnScriptToCall(){
  //echo'SMURFAN';
  wp_enqueue_script('radhika-custom-script',
  get_template_directory_uri().'/radhika-js-folder/radhika-custom-script.js',
  array('jquery'), 0.1, true);
}
add_action('wp_enqueue_scripts','myOwnScriptToCall');

 ?>
