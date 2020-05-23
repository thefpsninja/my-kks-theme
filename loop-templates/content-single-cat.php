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

	<?php _e('The cats Age: ') . the_field('cat_age') . _e(' Years'); ?><br>

	<?php 
	$city = get_field('cat_city');
	_e('The cats City: ');
	if ( $city ) :
	echo esc_html( $city->name ); ?><br>
	<?php endif; ?>

	<?php 
	$size = get_field('cat_size');
	_e('The cats Size: ');
	if ( $size ) :	
	echo esc_html( $size->name ); ?><br>
	<?php endif; ?>

	<?php _e('The cats Color: ') . the_field('cat_color'); ?><br>
	<?php _e('The cats Weight: ') . the_field('cat_weight') . _e('kg'); ?><br>

	<?php 
	$gender = get_field('cat_gender');
	_e('The cats Gender: ');
	if ( $gender ) :	
	echo esc_html( $gender->name ); ?><br>
	<?php endif; ?>

	<?php 
	$image = get_field('cat_picture');
	if( !empty( $image ) ) : ?>
	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"><br>
	<?php endif; ?>


	<?php if( get_field('cat_adopted_at') ) : _?>
	<?php _e('Cat adopted at: ') . the_field('cat_adopted_at'); ?><br>
	<?php endif; ?>

<?php
/* End of ACF Template */ 
?>

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
