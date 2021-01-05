<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmsa2v3
 */

namespace WP_Rig\WP_Rig;

if ( ! cmsa2v3()->is_primary_sidebar_active() ) {
	return;
}

cmsa2v3()->print_styles( 'cmsa2v3-sidebar', 'cmsa2v3-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php cmsa2v3()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
