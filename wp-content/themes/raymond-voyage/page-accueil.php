<?php

/*
Template Name: Page Accueil
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="forfait-vedette">
				<div class="container">
					<h2>Forfaits vedettes</h2>

					<div class="articles row">
					<?php
						$args = array(
						'post_type' => 'forfaits',
						    'posts_per_page' => 2
						);
						$derniersForfaits = new WP_Query($args);
						                    
						if ( $derniersForfaits ->have_posts() ) :
						    while ( $derniersForfaits ->have_posts() ) {
								$derniersForfaits ->the_post();
								get_template_part( 'template-parts/content', 'resume_forfait' );
						    }
						endif;
					?>
					</div>
				</div>
			</div>

			<div id="resume-article">
				<div class="container">
					<h2>Derniers articles</h2>

					<div class="articles row">
					<?php
						$args = array(
						'post_type' => 'post',
						    'posts_per_page' => 3
						);
						$derniersArticles = new WP_Query($args);
						                    
						if ( $derniersArticles->have_posts() ) :
						    while ( $derniersArticles->have_posts() ) {
								$derniersArticles->the_post();
								get_template_part( 'template-parts/content', 'extrait' );
						    }
						endif;
					?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
