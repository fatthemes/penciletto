<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package penciletto
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-12' ); ?>>
	<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="featured-image">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'large' ); ?>   
				</a>
				</div>
				<?php endif; ?>
				<?php echo wp_kses_post( pencil_post_format_icon( get_the_ID() ) ); ?>
				<div class="featured-image-cat">
				<?php the_category( esc_html__( ' &#x2f; ', 'penciletto' ) ); ?>
				</div>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php pencil_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
