<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->
	
	<footer class="entry-footer">

<?php 
/* ACF Template */ 
?>

<div class="card w-25 m-5 pt-4 pl-4">
	<?php _e('The Cats Age: ') . the_field('cat_age') . _e(' Years'); ?><br>

	<?php 
	$city = get_field('cat_city');
	_e('The Cats City: ');
	if ( $city ) :
	echo esc_html( $city->name ); ?><br>
	<?php endif; ?>

	<?php 
	$size = get_field('cat_size');
	_e('The Cats Size: ');
	if ( $size ) :	
	echo esc_html( $size->name ); ?><br>
	<?php endif; ?>

	<?php _e('The Cats Color: ') . the_field('cat_color'); ?><br>
	<?php _e('The Cats Weight: ') . the_field('cat_weight') . _e('kg'); ?><br>

	<p><?php 
	$gender = get_field('cat_gender');
	_e('The Cats Gender: ');
	if ( $gender ) :	
	echo esc_html( $gender->name ); ?><br>
	<?php endif; ?></p>
</div> <!-- ./card -->

	<?php 
	$image = get_field('cat_picture');
	if( !empty( $image ) ) : ?>
	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"><br>
	<?php endif; ?>


	<?php if( get_field('cat_adopted_at') ) : _?>
	<?php _e('<p class="card w-25 m-1 p-1 pl-5 bg-dark text-white">Cat adopted at: ') . the_field('cat_adopted_at'). _e('</p>'); ?><br>
	<?php endif; ?>

<?php
/* End of ACF Template */ 
?>

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
