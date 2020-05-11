<?php
/**
 * Static hero sidebar setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div <?php if(get_theme_mod( 'your_theme_hero' ) ) :  ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_theme_mod('your_theme_hero'); ?>');" <?php endif;?> class="wrapper" id="wrapper-static-hero">

			<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

				<div class="row" id="wrapper-static-hero-content">

					<?php dynamic_sidebar( 'statichero' ); ?>

				</div>

			</div>

	</div><!-- #wrapper-static-hero -->

	<?php

// Adding Default Hero Image Area
else :	?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div <?php if(get_theme_mod( 'your_theme_hero' ) ) :  ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_theme_mod('your_theme_hero'); ?>');" <?php endif;?> class="wrapper" id="wrapper-static-hero">

			<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

				<div class="row" id="wrapper-static-hero-content">



				</div>

			</div>

	</div><!-- #wrapper-static-hero -->

<?php
endif;
