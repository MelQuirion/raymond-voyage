<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col l4 m12 s12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Raymond Voyage">
					<p>Fait par: <span>Mélissa Quirion</span></p>
				</div>

				<div class="col l4 m12 s12">
					<h3>Suivez-nous</h3>
					<a href="#"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-tripadvisor fa-3x" aria-hidden="true"></i></a>
				</div>

				<div class="col l4 m12 s12">
					<h3>Nous joindre</h3>
					<div class="info">
						<span>Tel : </span><a href="tel:+4185287456">418-528-7456 </a>
					</div>
					<div class="info">
						<a href="mailto:info@raymondvoyage.ca" target="_top">info@raymondvoyage.ca</a>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/prefixfree.min.js"></script>

</body>
</html>
