<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package customify
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( customify_is_post_title_display() ) { ?>

	<?php } ?>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'customify' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
