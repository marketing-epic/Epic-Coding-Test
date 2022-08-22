<?php 
/*********************************************************************
 * Adds "Site General Settings" to admin bar via Advanced Custom Fields
 **********************************************************************/
if( function_exists('acf_add_options_page') ) {
    $parent_option = acf_add_options_page(array(
        'page_title'    => 'Site General Settings',
        'menu_title'    => 'Site General Settings',
        'menu_slug'     => 'site-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
add_filter('wpcf7_autop_or_not', '__return_false');
remove_filter ('acf_the_content', 'wpautop');

/*********************************************************************
 * Register Nav Menus
 **********************************************************************/
register_nav_menus(
	array(
		'Main' => __( 'Main Menu', 'epicpress' ),
		'footer' => __( 'Footer Menu', 'epicpress' ),
	)
);




//Add other Site Settings here

?>