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
                <h1><?php the_title(); ?></h1>
            </header>

            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <?php the_field('description'); ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6 portfolio-button">
                            <a href="<?php echo get_field('work_link');?>" target="_blank" class="btn btn-primary">View Website</a>
                        </div>
                        <div class="col-md-6 portfolio-button">
                            <a href="https://krisweaverdesigns.com/my_portfolio/" class="btn btn-primary">Full Portfolio</a>
                        </div>
                    </div>
                </div><!-- End Col Md 5 -->
                
                <div class="col-md-7">
                    <?php
                    $image = get_field('portfolio_screen_shot');

                    if( !empty($image) ): ?>

                    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
                </div><!-- End Col Md 7 -->

            </div><!-- End Row -->

        </main>
    </section>

<?php
get_sidebar();
get_footer();
