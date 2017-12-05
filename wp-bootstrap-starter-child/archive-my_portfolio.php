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
				<h1>My Portfolio</h1>
			</header><!-- .page-header -->


			<?php
				$args = array(
						 'post_type' => 'my_portfolio',
					'posts_per_page' => 6,
				);

				$portfolioNumber = 0;

				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

				$portfolioNumber = $portfolioNumber + 1;
			?>

					<?php
						if ( $portfolioNumber > 1 ) {
							echo "<div class='col-md-6'>";					
						} else {
							echo "<div class='row portfolio-row'>";
							echo "<div class='col-md-6 separator'>";
						}
					?>

					<?php

						$image = get_field('logo');

						if( !empty($image) ):
					?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

						<div class="row portfolio-buttons-row">

							<div class="col-md-6 portfolio-button">
								<a href="<?php echo get_field('work_link');?>" target="_blank" class="btn btn-primary">View Website</a>
							</div>

							<div class="col-md-6 portfolio-button">
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">View Project</a>
							</div>

						</div> <!-- End Button Rows -->

					</div> <!-- End Col Md 6-->

					<?php
						if ( $portfolioNumber > 1 ) {
							echo " </div> <!-- End Row -->";
							$portfolioNumber = 0;
						}
					?>

				<?php endwhile; else: ?>
						<p><?php _e('Sorry, no content available'); ?></p>
			<?php endif; ?>




		</main><!-- #main -->
	</section><!-- #primary -->


<?php
get_sidebar();
get_footer();
