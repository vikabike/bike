<?php
/**
 * Include the Custom Functions of the Theme.
 */
require get_template_directory() . '/framework/theme-functions.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom CSS Mods.
 */
require get_template_directory() . '/inc/css-mods.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/framework//customizer/init.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load TGM.
 */
require get_template_directory() . '/framework/tgmpa.php';

function get_categories_product($categories_list = '', $parent_id = 0) {

	$get_categories_product = get_terms('product_cat', [
		'orderby' => 'name', // Поле для сортировки
		'order' => 'ASC', // Направление сортировки
		'hide_empty' => 1, // Скрывать пустые. 1 - да, 0 - нет.
		'hierarchical' => 1,
		'parent' => $parent_id
	]);

	if(count($get_categories_product) > 0) {

		$categories_list .= ($parent_id == 0 ? '<ul class="main_categories_list">' : '<ul class="sub_categories_list sub_categories_list_'.$parent_id.'">');

		foreach($get_categories_product as $categories_item) {

			$categories_list .= '

				<li>

					<a href="'.esc_url(get_term_link((int)$categories_item->term_id)).'">'.esc_html($categories_item->name).'</a>

					'.get_categories_product('', $categories_item->term_id).'

				</li>

			';

		}

		$categories_list .= '</ul>';

	}

	return $categories_list;

}