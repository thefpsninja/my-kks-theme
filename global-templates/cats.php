<?php
/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Get the three latest USPs
$cats = new WP_Query([
	'post_type' 			=>	'shelter_cats',
	'posts_per_page'		=> 10,
	'paged' 				=> get_query_var( 'paged' ),
	'order'					=> 'DESC',
	'orderby'				=> 'date',
]);

if ($cats->have_posts() ) :
?>



<div class="wrapper" id="wrapper-usps">

	<div class="container">
		<div class="row">

		<?php while ($cats->have_posts()) : $cats->the_post(); ?>
			<!-- The USPs content item loop -->
			<?php get_template_part('loop-templates/content', 'shelter_cats'); ?>
		<?php endwhile; ?>
		<?php understrap_pagination(['total'=>$cats->max_num_pages,]); ?>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!-- ./wrapper -->

<!-- Reset WP postdata -->
<?php wp_reset_postdata(); ?>

<?php endif; ?>