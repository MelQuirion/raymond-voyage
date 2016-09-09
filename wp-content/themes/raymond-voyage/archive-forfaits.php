<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Forfaits</h1>
			</header><!-- .page-header -->

			<?php
			?>
			<div class="articles row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'resume_forfait' );

				endwhile;

			?>
			</div>
			
			<?php  the_posts_navigation( array(
    			'prev_text' => __( 'Forfaits plus récents', 'textdomain' ),
    			'next_text' => __( 'Forfaits plus anciens', 'textdomain' ),
				) ); ?>
			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
