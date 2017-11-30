<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

			<div class="home-header row">

				<div class="col-md-4">
					<a href="https://krisweaverdesigns.com/about-me/">
						<div class="home-title">
							About Me
						</div>
						<div class="home-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</a>
				</div>

				<div class="col-md-4">
					<a href="https://krisweaverdesigns.com/portfolio/">
						<div class="home-title">
							My Portfolio
						</div>
						<div class="home-icon">
							<i class="fa fa-paint-brush" aria-hidden="true"></i>
						</div>
					</a>
				</div>

				<div class="col-md-4">
					<a href="https://krisweaverdesigns.com/contact-me/">
						<div class="home-title">
							Contact Me
						</div>
						<div class="home-icon">
							<i class="fa fa-comments-o" aria-hidden="true"></i>
						</div>
					</a>
				</div>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

	<section>
		<div class="row">
			
		</div>
	</section>

<?php
get_footer();
