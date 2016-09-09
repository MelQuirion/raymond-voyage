<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="row">
			<div class="col l4 m12 s12">
				<aside>
					<?php the_post_thumbnail('large') ; ?>
					<div class="info-vignette">
						<span>Date :
						<?php the_date() ; ?>
		 				</span>

						<?php $categories = get_the_category(); ?>

						<?php if($categories) : ?>

								<span>Catégorie(s) : </span>
								<ul>
									<?php foreach ($categories as $cat) : ?>
										<?php $url = get_category_link($cat->term_id); ?>
										<li><a href="<?php echo $url; ?>" class="lien-gras"> <?php echo $cat->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
						<?php endif; ?>
					</div>

				</aside>
			</div>


			<div class="col l8 m12 s12">
				<div class="texte-article ">
					<p class="auteur"><span>Par : </span>
					<?php  the_author() ; ?></p>
					<?php  the_content() ; ?>
					<?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '" class="lien-gras"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Retour au blogue</a>'; ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
