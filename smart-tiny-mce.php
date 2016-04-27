<?php
/*
Plugin Name: Smart TinyMCE
*/

function my_enqueue($hook) {
    if ( 'edit.php' == $hook ) {
        return;
    }
function my_format_TinyMCE( $in ) {
  $in['addcontrol'] = false;
  $in['plugins'] = 'visualblocks';
  return $in;





}
/* Add the TinyMCE VisualBlocks Plugin */
add_filter('mce_external_plugins', 'my_custom_plugins');

function my_custom_plugins () {
     $plugins = array('visualblocks'); //Add any more plugins you want to load here
     $plugins_array = array();

     //Build the response - the key is the plugin name, value is the URL to the plugin JS
     foreach ($plugins as $plugin ) {
          $plugins_array[ $plugin ] = plugins_url('bower_components/tinymce/plugins/', __FILE__) . $plugin . '/plugin.js';
     }
     return $plugins_array;
}


add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );
    wp_enqueue_style( 'my_custom_style', plugin_dir_url( __FILE__ ) . 'mystyle.css', time() );
    wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'myscript.js', time() );
  //  wp_enqueue_script( 'my_custom_script2', plugin_dir_url( __FILE__ ) . 'bower_components/waypoints/lib/jquery.waypoints.min.js', time() );
    wp_enqueue_script( 'my_custom_script3', plugin_dir_url( __FILE__ ) . 'bower_components/tinymce/tinymce.min.js', time() );

}

add_action( 'edit_form_after_title', 'my_enqueue' );
