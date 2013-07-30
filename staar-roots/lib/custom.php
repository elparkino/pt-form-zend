<?php
/**
 * Custom functions
 */


function my_scripts_method() {
	
	if (!is_admin() && is_page(22)) {
		wp_register_script( 'bbmain', '/assets/js/main.js' , array('jquery','underscore','backbone'));
		wp_register_script( 'pinterestplus', '/assets/pinterest-plus-html5.min.js' );
		wp_enqueue_script( 'bbmain' );
		wp_enqueue_script( 'underscore');
		wp_enqueue_script( 'backbone');
		wp_enqueue_script( 'pinterestplus' );
	}elseif(!is_admin() || !is_page( 22 )){
		wp_deregister_script( 'bbmain', '/assets/js/main.js' );
		wp_dequeue_script( 'bbmain', '/assets/js/main.js' );

	}

	if (!is_page( array(22,68,9)) ) {
		wp_dequeue_script( 'contact-form-7' );
		wp_dequeue_style( 'contact-form-7' );
	}

	if (!is_admin() && is_page( 39 )) {
		wp_register_style( 'faqcss', '/assets/css/text-style.css' );
		wp_register_script( 'faqshow', '/assets/js/faqshow.js' );
		wp_enqueue_style( 'faqcss' );
		wp_enqueue_script( 'faqshow' );
	}
	wp_register_script( 'piwik', '/assets/js/piwik.js' );
	wp_enqueue_script( 'piwik' );
}
function anything_deregister(){
	if (!is_page(4)){
		wp_deregister_script( 'jquery.anythingslider' );
		wp_deregister_script( 'jquery.anythingslider.fx' );
		wp_deregister_script( 'jquery.easing' );
		wp_deregister_style( 'anythingslider-base' );
		wp_dequeue_script( 'jquery.anythingslider' );
		wp_dequeue_style( 'anythingslider-base' );		
	}
}

add_action( 'wp_print_scripts', 'my_scripts_method' );
add_action( 'wp_print_styles' ,'anything_deregister' );
add_action( 'wp_print_scripts', 'anything_deregister' );
?>