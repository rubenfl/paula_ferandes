<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paula_fernandes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--my code-->
			<div class="container-fluid">
  <div class="row background-img" class="img-responsive" id="image-1">
  </div>
</div>
<!--function code-->

			<!--end-->

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<!--my code-->
				<div class="myPost">
					<div class="myPostTitle">
						<?php the_title(); ?>
					</div>
					<div class="myPostContent">
						<?php the_content(); ?>
					</div>
				</div>
				
				
		<!--end-->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php rewind_posts(); ?>
<div id="mid">
	<h1>Paula's Records</h1>
		<?php
			$args = array( 'post_type' => 'midterm_item', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
		?>
	</div>
	<div id="my-function" class="text-center">

<?php //myRecords(); ?>

Here are the titles of the studio records of :	
<?php 
echo '<br>';
bloginfo('name');

?>
<?php
echo '<br>';
?>
		<?php 
$records = array("Canciones Do Vento Sul", "Dust In The Wind", "Passaro Do Fogo", "Meus Encantos", "Amanecher"); 

foreach ($records as $value) {
   echo "$value <br>";
}
?>

</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
