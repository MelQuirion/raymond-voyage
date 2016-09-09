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
			<div class="col l6 m12 s12">
				<aside class="no-background">
					<?php the_post_thumbnail() ; ?>
					<a href="#" class="bouton hvr-float-shadow">Achetez ce forfait</a>
					
				</aside>
			</div>


			<div class="col l6 m12 s12">
				<div class="texte-forfait">
					<h3>Détails</h3>
					<ul class="clearfix info-contenu">
						<li>
							<i class="fa fa-moon-o" aria-hidden="true"></i>
							<?php $nbNuits = get_field('nb_nuits'); ?>
							<span><?php echo $nbNuits ?> nuits</span>
						</li>
						<li>
							<?php
								$transport = get_field('transport');
								if ($transport == "Par avion")
								{
									?>
									<i class="fa fa-plane" aria-hidden="true"></i>
									<?php
								}
								else if ($transport == "Par autobus")
								{
									?>
									<i class="fa fa-bus" aria-hidden="true"></i>
									<?php
								}
								else if ($transport == "Par train")
								{
									?>
									<i class="fa fa-train" aria-hidden="true"></i>
									<?php
								}
							?>
						<span><?php echo $transport ?></span>
						</li>
						<li>
							<i class="fa fa-usd" aria-hidden="true"></i>
							<?php $prix = get_field('prix'); ?>
							<span><?php echo $prix ?>$</span>
						</li>
					</ul>

					
					<h3>Description</h3>
					<?php  the_content() ; ?>
					<?php echo '<a href="' . get_post_type_archive_link( 'forfaits' ) . '" class="lien-gras"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Retour aux forfaits</a>'; ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
