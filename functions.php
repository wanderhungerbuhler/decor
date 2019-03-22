<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Custom Images Sizes
function my_custom_sizes() {
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

// Custom Post Type

function custom_post_type_cursos() {
	register_post_type('cursos', array(
		'label' => 'Cursos',
		'description' => 'Cursos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,

		
		'rewrite' => array('slug' => 'cursos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
		
		'labels' => array (
			'name' => 'Cursos',
			'singular_name' => 'Curso',
			'menu_name' => 'Cursos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Curso',
			'edit' => 'Editar',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view' => 'Ver Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Cursos',
			'not_found' => 'Nenhum Curso Encontrado',
			'not_found_in_trash' => 'Nenhum Curso Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_cursos');

?>