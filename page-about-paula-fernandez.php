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
            <div class="row background-img" id="image-2"></div>
            <div class="row intro" id="founder">
                <div class="col-xs-12 col-sm-5 col-sm-offset-1" id="text">
                    <p>Paula Fernandes de Souza, born August 28, 1984 in Sete Lagoas, Minas Gerais, is a Brazilian singer, songwriter and arranger.
                      In a poll organized among readers of VIP magazine in 2011, she was named the 16th "sexiest woman in the world." That same year, she was one of the most accessed on Google Brazil, Minas Gerais, she lived in a farm with her parents and her younger brother during her childhood, Fernandes started singing when she was eight years old, releasing her self-titled debut album two years later, Her second album, named Ana Rayo, was released in 1995, and was inspired by the story of Ana Raio e Zé Trovão soap operas,  Fernandes went to college to study Geography in Belo Horizonte when she was 18 years old, singing in pubs during this time, She recorded one of the theme songs of Rede Globo's soap opera América, named "Ave Maria Natureza", and released the album Canções do Vento Sul soon after that, Fernandes was nominated for the Best Popular Singer Award at Brazilian Music Award  with that album, The song "Jeito do Mato" from her following album, Pássaro de Fogo, was a theme song in the Globo telenovela Paraíso, and her version of Ivete Sangalo's "Quando a Chuva Passar" was the main theme of the soap opera Escrito nas Estrelas. Fernandes released her first DVD in October 2010, and gained further recognition after she participated in two Rede Globo specials: the Roberto Carlos' end of year show, broadcast on December 25, 2010, and Show da Virada, broadcast during New Year's Eve, on December 31, 2010. Her live album, Paula Fernandes - Ao Vivo, released in 2011, was the top seller of that year, with over 3,000,000 copies sold according to the ABPD. Fernandes became known in the rest of Latin America due to her collaboration on the Juanes song "Hoy Me Voy", released in his 2012 MTV Unplugged album. Her 2013 album Multishow ao Vivo - Um Ser Amor was nominated for the 2014 Latin Grammy Award for Best Sertaneja Music Album, with the title song being nominated in the Best Brazilian Song category.
                    </p>
                </div>
        
                <div class="col-xs-12 col-sm-5" id="paula" >
                    <img class="img-responsive" src="images/paula4.jpg">
                    <h4 class="text-center">Paula Fernandes</h4>
                    <img class="img-responsive" src="images/paula2.jpg">
                </div>
            </div>
            <div class="row background-img" id="image-3"></div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
