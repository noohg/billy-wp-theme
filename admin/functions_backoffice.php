<?php

/*------------------------------------*\
	CUSTOM FOOTER IN DASHBOARD
\*------------------------------------*/

function remove_footer_admin () {
  echo 'Plateforme basée sur WordPress | Développement et création par <a href="http://studiob-design.fr" target="_blank">Studio B</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/*------------------------------------*\
	LOAD CUSTOM EDITOR STYLE
\*------------------------------------*/

function admin_load_css() {
    add_editor_style( 'editor.css' );
    wp_enqueue_script('admin', get_template_directory_uri() . '/admin/admin.js');
}
add_action( 'admin_init', 'admin_load_css' ); // editor style


/*------------------------------------*\
	CUSTOM DASHBOARD WIDGET
\*------------------------------------*/

function custom_posttype_glance_items() {
	$glances = array();
	$args = array(
		'public'   => true,  // Showing public post types only
		'_builtin' => false  // Except the build-in wp post types (page, post, attachments)
	);
	// Getting your custom post types
	$post_types = get_post_types($args, 'object', 'and');
	foreach ($post_types as $post_type) {
		// Counting each post
		$num_posts = wp_count_posts($post_type->name);
		// Number format
		$num   = number_format_i18n($num_posts->publish);
		// Text format
		$text  = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));

		// Show without link
		$glance = '<span class="'.$post_type->name.'-count" style="text-transform: lowercase;">'.$num.' '.$text.'</span>';

		// Save in array
		$glances[] = $glance;
	}
  // $locs = count_users();
  // $locs = $locs['avail_roles']['client'];
  // $locs_actives = get_users( array( 'role' => "client", 'meta_key' => 'client_active', 'meta_value' => '1', 'meta_compare' => '=' ) );
  // $locs_actives = count($locs_actives);
  // $loc_return = '<span class="'.$post_type->name.'-count">'.$locs.' comptes locataires<br /> ('.$locs_actives.' activés)</span>';
  // $glances[] = $loc_return;

	// return them
	return $glances;
}
add_action('dashboard_glance_items', 'custom_posttype_glance_items');
