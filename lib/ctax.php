<?php
  
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_kb_type', 0 );

function create_kb_type() {

	$labels = array(
		'name'              => _x( 'Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Zoek type' ),
		'all_items'         => __( 'Alle type' ),
		'parent_item'       => __( 'Parent type' ),
		'parent_item_colon' => __( 'Parent type' ),
		'edit_item'         => __( 'Bewerk type' ),
		'update_item'       => __( 'Update type' ),
		'add_new_item'      => __( 'Nieuw type toevoegen' ),
		'new_item_name'     => __( 'Naam nieuw type' ),
		'menu_name'         => __( 'Type' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type' ),
	);

  register_taxonomy('type', array('kennisbank'), $args);

}

?>