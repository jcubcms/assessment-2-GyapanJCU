<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmsa2
 */

namespace WP_Rig\WP_Rig;

if ( ! cmsa2()->is_primary_sidebar_active() ) {
	return;
}

cmsa2()->print_styles( 'cmsa2-sidebar', 'cmsa2-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php cmsa2()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
