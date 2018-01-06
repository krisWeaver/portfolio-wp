<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


		<div class="col-md-4 icons">
			<a href="https://krisweaverdesigns.com/about-me/">
				<div class="home-title">
					About Me
				</div>
				<div class="home-icon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</a>
		</div>

		<div class="col-md-4 icons">
			<a href="https://krisweaverdesigns.com/my-portfolio/">
				<div class="home-title">
					My Portfolio
				</div>
				<div class="home-icon">
					<i class="fa fa-paint-brush" aria-hidden="true"></i>
				</div>
			</a>
		</div>

		<div class="col-md-4 icons">
			<a href="https://krisweaverdesigns.com/contact-me/">
				<div class="home-title">
					Contact Me
				</div>
				<div class="home-icon">
					<i class="fa fa-comments-o" aria-hidden="true"></i>
				</div>
			</a>
		</div>


	</div><!-- End Row Div From Header File -->

</div><!-- End Container Div From Header File -->


<div class="container-fluid home-blog">

	<section>
		<div class="row">
			<div class="col-md-8 offset-md-2">
			<?php
				$args = array(
						 'post_type' => 'post',
					'posts_per_page' => 1,
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>

				<h3><?php the_title(); ?></h3>

			<?php
				$summary = get_the_content();
				//echo $summary;
				$excerpt = wp_trim_words($summary, $num_words = 50, $more = '...');
				echo $excerpt;
			?>
				<a href="<?php the_permalink(); ?>">View Full Entry</a>


			<?php endwhile; else: ?>
					<p><?php _e('Sorry, no content available'); ?></p>
			<?php endif; ?>

			</div>
		</div>
	</section>


<?php
get_footer();
