<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content boxed">

			<h1><?php _e( 'Catégorie : ', 'billy' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
