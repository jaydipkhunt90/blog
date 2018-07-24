<?php
	/** Woocommerce Hooks **/
	remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
	add_action('woocommerce_before_main_content', 'accesspress_lite_output_content_wrapper_start', 10);
	remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');
	add_action('woocommerce_after_main_content', 'accesspress_lite_output_content_wrapper_end', 10);

	function accesspress_lite_output_content_wrapper_start() {
		echo '<div class="ak-container"><div id="primary">';
	}

	function accesspress_lite_output_content_wrapper_end() {
		echo '</div>';
		get_sidebar( 'shop' );
		echo '</div>';	
	}