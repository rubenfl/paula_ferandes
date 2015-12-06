<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paula_fernandes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container-fluid">

				<div class="col-xs-12 col-sm-4 col-sm-offset-0">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula1.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula2.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula3.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula4.jpg">
				</div>
				<div class="col-xs-12 col-sm-4 col-sm-offset-0">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula5.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula6.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula7.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula8.jpg">
				</div>
				<div class="col-xs-12 col-sm-4 col-sm-offset-0">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula9.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula10.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula11.jpg">
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/paula_fernandes/images/paula12.jpg">
				</div>
			</div><!--end container fluid-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
