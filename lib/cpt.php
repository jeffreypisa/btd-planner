<?php // Our custom post type function
  
  
function create_posttype() {

	register_post_type( 'kalender',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Kalender' ),
				'singular_name'         => __( 'Evenement' ),
    		'all_items'             => __( 'Alle Evenementen' ),
    		'add_new_item'          => __( 'Nieuw evenement toevoegen' ),
    		'new_item'              => __( 'Nieuw evenement' ),
        'add_new'               => __( 'Nieuw evenement' ),
    		'edit_item'             => __( 'Bewerk evenement' ),
    		'update_item'           => __( 'Update evenement' ),
    		'view_item'             => __( 'Bekijk evenement' ),
    		'search_items'          => __( 'Zoek evenement' ),
			),
			'menu_icon'           => 'dashicons-calendar',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'kalender'),
		)
	);
	
	register_post_type( 'kennisbank',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Kennisbank' ),
				'singular_name'         => __( 'Item' ),
    		'all_items'             => __( 'Alle items' ),
    		'add_new_item'          => __( 'Nieuw item toevoegen' ),
    		'new_item'              => __( 'Nieuw item' ),
        'add_new'               => __( 'Nieuw item' ),
    		'edit_item'             => __( 'Bewerk item' ),
    		'update_item'           => __( 'Update item' ),
    		'view_item'             => __( 'Bekijk item' ),
    		'search_items'          => __( 'Zoek item' ),
			),
			'menu_icon'           => 'dashicons-images-alt2',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'kennisbank'),
		)
	);
			
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' ); 

?>