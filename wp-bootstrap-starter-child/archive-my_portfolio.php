<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1>Hi Friend</h1>
			</header><!-- .page-header -->

			<?php
				$args = array(
						 'post_type' => 'my_portfolio',
					'posts_per_page' => 6,
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>

				<h3><?php the_title(); ?></h3>

				<?php

				$image = get_field('logo');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			<?php endwhile; else: ?>
					<p><?php _e('Sorry, no content available'); ?></p>
			<?php endif; ?>


		</main><!-- #main -->
	</section><!-- #primary -->


<?php
get_sidebar();
get_footer();
