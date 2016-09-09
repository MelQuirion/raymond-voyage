<div class="col l4 m12 s12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<span class="date"><?php echo get_the_date(); ?></span>
			<div class="crop-container img-lien">
				<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="extrait">
				<a href="<?php echo get_permalink() ?>" class="hvr-grow"><h3><?php the_title(); ?></h3></a>
				<p><?php the_excerpt() ?></p>
			</div>
			<div class="suite">
				<a href="<?php echo get_permalink() ?>" class="lien-gras"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Lire la suite</a>
			</div>
			
	</article>
</div>
