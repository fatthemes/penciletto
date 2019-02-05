<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penciletto
 */

if ( ! is_active_sidebar( 'top-1' ) ) {
	return;
}
?>

<div id="top-widget" class="top-widget widget-area" role="complementary">
	<?php dynamic_sidebar( 'top-1' ); ?>
</div><!-- #secondary -->
