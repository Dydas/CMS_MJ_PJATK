<?php
function wptuts_scripts_basic()
{
wp_register_script( 'jquery-2.1.4', plugins_url( '/jquery-2.1.4.min.js', __FILE__ ) );

    wp_register_script( 'jquery-2.1.4', get_template_directory_uri() . '/jquery-2.1.4.min.js' );
 
    wp_enqueue_script( 'jquery-2.1.4' );
	

    wp_register_script( 'custom-script', plugins_url( '/calculate.js', __FILE__ ) );

    wp_register_script( 'custom-script', get_template_directory_uri() . '/calculate.js' );

    wp_enqueue_script( 'custom-script' );
	
	
	wp_register_script( 'jsStyle', plugins_url( '/jsStyle.js', __FILE__ ) );

    wp_register_script( 'jsStyle', get_template_directory_uri() . '/jsStyle.js' );
 
    wp_enqueue_script( 'jsStyle' );
	
	
	wp_register_style( 'calcStyle', plugins_url( '/calcStyle.css', __FILE__ ) );

    wp_register_style( 'calcStyle', get_template_directory_uri() . '/calcStyle.css' );
 
    wp_enqueue_style( 'calcStyle' );
	
	
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
?>