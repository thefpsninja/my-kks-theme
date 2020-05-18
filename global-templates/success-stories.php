<?php
/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Get the three latest USPs
$success = new WP_Query([
	'post_type' 		=>	'success_stories',
	'posts_per_page'		=> 3,
]);

if ($success->have_posts() ) :
?>



<div class="wrapper" id="wrapper-usps">

	<div class="container">
		<div class="row">

		<?php while ($success->have_posts()) : $success->the_post(); ?>
			<!-- The USPs content item loop -->
			<?php get_template_part('loop-templates/content', 'success-stories'); ?>
		<?php endwhile; ?>

		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!-- ./wrapper -->

<!-- Reset WP postdata -->
<?php wp_reset_postdata(); ?>

<?php endif; ?>