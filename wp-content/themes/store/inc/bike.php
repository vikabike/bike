<?php
function get_categories_product($categories_list = '', $parent_id = 0) {

	$get_categories_product = get_terms('product_cat', [
		'orderby' => 'name', 
		'order' => 'ASC', 
		'hide_empty' => 1, 
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
