<?php
/**
 * Template part for displaying a pagination
 *
 * @package cmsa2v3
 */

namespace WP_Rig\WP_Rig;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x( 'Previous', 'previous set of search results', 'cmsa2v3' ),
		'next_text'          => _x( 'Next', 'next set of search results', 'cmsa2v3' ),
		'screen_reader_text' => __( 'Page navigation', 'cmsa2v3' ),
	]
);
