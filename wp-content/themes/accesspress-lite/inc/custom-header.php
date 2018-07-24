<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ..
 *
 * @package AccesspressLite
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses accesspresslite_header_style()
 */

function accesspresslite_custom_header_setup() {
    $accesspresslite_options = accesspress_default_setting_value();
    $accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
    $home_template = $accesspresslite_settings['accesspresslite_home_template']; 
    if($home_template == 'template_one'){       
		add_theme_support( 'custom-header', apply_filters( 'accesspresslite_custom_header_args', array(
			'default-image'          => get_template_directory_uri() . '/images/demo/logo.png',
			'default-text-color'     => '000000',
			'width'                  => 190,
			'height'                 => 70,
			'flex-height'            => true,
			'flex-width'             => true,
			'wp-head-callback'       => 'accesspresslite_header_style'
		) ) );
    }else{
        add_theme_support( 'custom-header', apply_filters( 'accesspresslite_custom_header_args', array(
			'default-image'          => get_template_directory_uri() . '/images/demo/logo2.png',
			'default-text-color'     => '000000',
			'width'                  => 190,
			'height'                 => 70,
			'flex-height'            => true,
			'flex-width'             => true,
			'wp-head-callback'       => 'accesspresslite_header_style'
		) ) );
    }
}
add_action( 'after_setup_theme', 'accesspresslite_custom_header_setup' );

if ( ! function_exists( 'accesspresslite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see accesspresslite_custom_header_setup().
 */
function accesspresslite_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // accesspresslite_header_style
