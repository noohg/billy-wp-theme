<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content boxed">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page introuvable !', 'billy' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Retour à l\'accueil', 'billy' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
