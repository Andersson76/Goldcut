<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gc
 */

?>

<?php get_header(); ?>

    <!-- <div class="content-404">
		<h1>404</h1>
	</div> -->

<div id="primary" class="content-404">
	<div class="title">
		<h1>404</h1>
	</div>

	<div class="page-content">
		<?php
		$image = get_field( 'image', 'options' );
		if ( ! empty( $image ) ) :
			?>
			<img
				src="<?php echo esc_url( $image['url'] ); ?>"
				alt="<?php echo esc_attr( $image['alt'] ); ?>"
			/>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>