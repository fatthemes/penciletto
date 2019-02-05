<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penciletto
 */

?>

	</div><!-- #content -->
	<?php get_sidebar( 'footer' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p class="col-md-6 footer-text"><?php echo wp_kses_post( get_theme_mod( 'footer_text', '&copy; ' . date_i18n( __( 'Y', 'penciletto' ) ) . ' ' . get_bloginfo( 'name' ) ) ); ?></p>
			<p class="col-md-6 theme-author">Theme by <a href="http://blogonyourown.com">BlogOnYourOwn.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="pencil-search-panel">
	<button class="pencil-search-panel-close"><span class="fa fa-close"></span></button>
	<?php get_search_form(); ?>
</div>
<?php wp_footer(); ?>

</body>
</html>
