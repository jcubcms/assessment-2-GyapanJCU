<?php
/**
 * Template part for displaying the footer info
 *
 * @package cmsa2v3
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://u3atownsville.com/', 'cmsa2v3' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( '2021 &copy; %s', 'cmsa2v3' ), 'U3A' );
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Theme: %s by Group 7.', 'cmsa2v3' ), '<a href="' . esc_url( 'https://github.com/jcubcms/assessment-2-GyapanJCU' ) . '">cmsa2 v3</a>' );

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div><!-- .site-info -->
