<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penciletto
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<div id="footer-widget" class="footer-widget widget-area" role="complementary">
    <div class="container">
	<?php dynamic_sidebar( 'footer-1' ); ?>
    </div>
</div><!-- #footer-widget -->
