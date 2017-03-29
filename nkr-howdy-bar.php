<?php
/*
Plugin Name: NKR Howdy Bar
Description: Our First plugin, just for practice
Author: Naomi Rodriguez
License: GPLv3
Version: 0.1
*/
/**
 * HTML markup for the bar
 */
 function nkr_howdy_HTML(){
 ?>
 <div class="howdy-bar">
   This is the Howdy Bar
   <a href="" class="howdy-button">Click Me!</a>
   <span class="howdy-dismiss">x</span>
 </div>
 <?php
}
add_action( 'wp_footer', 'nkr_howdy_HTML');
/**
 * Attach a stylesheet
 */
function nkr_howdy_scripts(){
  //get the url to the stylesheet
  $stylesheet = plugins_url( 'css/howdy.css', __FILE__ );
  //tell WP to put it on the page
  wp_enqueue_style( 'howdy-css', $stylesheet );

  //load jquery
  wp_enqueue_script( 'jquery' );

  //get the url of the JS file
  $script = plugins_url( 'js/howdy.js', __FILE__ );
  //tell WP to put it on the page
  wp_enqueue_script( 'howdy-js', $script, array('jquery'), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'nkr_howdy_scripts' );
