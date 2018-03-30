<?php

/*------------------------------------*\
	INIT
\*------------------------------------*/

// add_action('init', 'create_ctp_agence'); // Agence

// add_action('init', 'create_taxonomy_localisation'); // Taxonomy Localisation

// add_action('init', 'create_ctp_slider'); // Slider

// add_action('init', 'create_taxonomy_rubrique'); // Taxonomy for Pages
// add_action('admin_init', 'tax_for_pages'); // Apply Taxonomy to Pages
// function tax_for_pages() {
//       register_taxonomy_for_object_type('rubriques', 'page');
//       add_post_type_support('page', 'rubriques');
// }

// unregister_taxonomy( 'rubriques' );

/*------------------------------------*\
	CUSTOM POST TYPE  AGENCE
\*------------------------------------*/

function create_ctp_agence()
{
    register_taxonomy_for_object_type('localisation', 'agences');
    register_post_type('agences', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => 'Agences', // Rename these to suit
            'singular_name' => 'Agence',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter un nouvel élément',
            'edit' => 'Editer',
            'edit_item' => 'Editer l\'élément',
            'new_item' => 'Nouvel élément',
            'view' => 'Visualiser',
            'view_item' => 'Voir l\'élément',
            'search_items' => 'Rechercher',
            'not_found' => 'Aucun élément trouvé',
            'not_found_in_trash' => 'Aucun élément trouvé dans la corbeille'
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ),
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
             'localisation'
         )
    ));
}

/*------------------------------------*\
	CUSTOM TAXONOMY LOCALISATION
  Applied to CPT Agence
\*------------------------------------*/

function create_taxonomy_localisation() {
	// create a new taxonomy
	register_taxonomy(
		'localisation',
    array(
      'agences'
    ),
    array(
      'hierarchical' => true,
      'label' => 'Localisations',  //Display name
      'query_var' => true,
      'rewrite' => array(
          'slug' => 'localisation', // This controls the base slug that will display before each term
          'with_front' => false // Don't display the category base before
      )
    )
	);
}


/*------------------------------------*\
	CUSTOM POST TYPE SLIDER
\*------------------------------------*/

function create_ctp_slider()
{
    register_post_type('slider', // Register Custom Post Type
        array(
        'labels' => array(
            'menu_name' => 'Slider',
            'name' => 'Slides', // Rename these to suit
            'singular_name' => 'Slide',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter un nouvel élément',
            'edit' => 'Editer',
            'edit_item' => 'Editer l\'élément',
            'new_item' => 'Nouvel élément',
            'view' => 'Visualiser',
            'view_item' => 'Voir l\'élément',
            'search_items' => 'Rechercher',
            'not_found' => 'Aucun élément trouvé',
            'not_found_in_trash' => 'Aucun élément trouvé dans la corbeille'
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'publicly_queryable' => false,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
            'title',
            'thumbnail',
            'page-attributes'
        ),
        'can_export' => true, // Allows export in Tools > Export
/*        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
*/
    ));
}

/*------------------------------------*\
	CUSTOM TAXONOMY RUBRIQUES
  Applied to pages
\*------------------------------------*/

function create_taxonomy_rubrique() {
	// create a new taxonomy
	register_taxonomy(
		'rubriques',
    array(
      'page'
    ),
    array(
      'hierarchical' => true,
      'label' => 'Rubriques',  //Display name
      'publicly_queryable' => false,
      'query_var' => true,
      'rewrite' => array(
          'slug' => 'rubrique', // This controls the base slug that will display before each term
          'with_front' => false // Don't display the category base before
      )
    )
	);
}
