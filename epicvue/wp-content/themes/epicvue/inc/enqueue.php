<?php /**
 * Enqueue scripts and styles.
 */
function epicpress_scripts() {
	$css_path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, get_template_directory() . '/dist/css/app.css' );
	$js_path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, get_template_directory() . '/dist/js/app.js' );
	$css_version = file_exists($css_path) ? filemtime( $css_path ) : '1';
	$js_version = file_exists($js_path) ? filemtime( $js_path ) : '1';

	/**** Owl Carousel Style ****/
	// wp_enqueue_style( 'owlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all' );

	/*------Site Styles ----*/
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' , array(), '4.6.2' );
	
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/global.css' , array(), $css_version );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/contact.css' , array(), $css_version );
	wp_style_add_data( 'main-style', 'rtl', 'replace' );
	
	
	/*------JQuery ----*/
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
	wp_deregister_script( 'jquery-migrate' );
	wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );	
	
	
	/*------Site Scripts ----*/
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/app.js', array(), $js_version, true );


}
add_action( 'wp_enqueue_scripts', 'epicpress_scripts' );

 ?>