<?php

/**
 *
 * @link              http://neevalex.com
 * @since             1.0.0
 * @package           Simple_Age_Restriction_Warning
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Age Restriction Warning
 * Plugin URI:        https://github.com/neevalex/simple-age-restriction-warning
 * Description:       Simple 18+ Age restriction warning popup for your website.
 * Version:           1.0.2
 * Author:            NeevAlex
 * Author URI:        http://neevalex.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-age-restriction-warning
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


function sarw_scripts() {
/**
 * Register global styles & scripts.
 */

wp_register_style('sarw-style',  plugin_dir_url( __FILE__ ) . 'assets/simple-age-restriction-warning-public.css', array(), '1.0.0' , 'all' );
wp_register_script('sarw-script', plugin_dir_url( __FILE__ ) . 'assets/simple-age-restriction-warning-public.js', array( 'jquery' ), '1.0.0' , false);
wp_enqueue_style('sarw-style');
wp_enqueue_script('sarw-script');





}

function sarw_footer() {
?>
 
<div class="sarw-popup">
    <div class="popup-inner"> 
       <?php echo '<img src="'.plugin_dir_url( __FILE__ ).'assets/18warning.jpg" />'; ?>
        <h2>You must be 18 years of age or older to access this website</h2>
        <p>I confirm that I am over 18 years of age, and understand that this website contains material featuring nudity and/or sexually-explicit material and/or adult themes that are age-restricted, and I confirm that by entering this website I agree that I am not offended by viewing such material.
        </p>
        <p><a class="sarw-enter" href="#">Yes, i am 18+</a><a class="sarw-exit" href="#">Exit</a></p>
        
    </div>
</div>

<?php
}

if(empty($_COOKIE['sarw-popup'])) {
    add_action( 'wp_enqueue_scripts', 'sarw_scripts' );
    add_action( 'wp_footer', 'sarw_footer', 100 );
}

