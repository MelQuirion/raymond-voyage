<div class="col l6 col m12 s12 resume-forfait">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

			<div class="crop-container img-lien">
				<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="extrait">
				<a href="<?php echo get_permalink() ?>" class="hvr-grow"><h3><?php the_title(); ?></h3></a>

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
			</div>
			
	</article>
</div>
