/** recipe recipe_testimonials plugin */

function recipe_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'recipe' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'recipe' ),
		'menu_name'             => __( 'Testimonials', 'recipe' ),
		'name_admin_bar'        => __( 'Testimonials', 'recipe' ),
		'archives'              => __( 'Archive', 'recipe' ),
		'attributes'            => __( 'Attributes', 'recipe' ),
		'parent_item_colon'     => __( 'Parent Testimonial ', 'recipe' ),
		'all_items'             => __( 'All Testimonials', 'recipe' ),
		'add_new_item'          => __( 'Add Testimonial', 'recipe' ),
		'add_new'               => __( 'Add Testimonial', 'recipe' ),
		'new_item'              => __( 'New Testimonial', 'recipe' ),
		'edit_item'             => __( 'Edit Testimonial', 'recipe' ),
		'update_item'           => __( 'Update Testimonial', 'recipe' ),
		'view_item'             => __( 'View Testimonial', 'recipe' ),
		'view_items'            => __( 'View Testimonials', 'recipe' ),
		'search_items'          => __( 'Search Testimonial', 'recipe' ),
		'not_found'             => __( 'Not found in Trash', 'recipe' ),
		'featured_image'        => __( 'Featured Image', 'recipe' ),
		'set_featured_image'    => __( 'Save Featured Image', 'recipe' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'recipe' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'recipe' ),
		'insert_into_item'      => __( 'Insert Into Testimonial', 'recipe' ),
		'uploaded_to_this_item' => __( 'Add At Testimonial', 'recipe' ),
		'items_list'            => __( 'Testimonial List', 'recipe' ),
		'items_list_navigation' => __( 'Navigate toTestimonials', 'recipe' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'recipe' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'testimonials' ),
		'description'           => __( 'Testimonials', 'testimonials' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'recipe_testimonials', 0 );