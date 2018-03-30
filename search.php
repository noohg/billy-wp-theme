<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content boxed">

			<h1><?php echo sprintf( __( '%s résultats pour :  ', 'billy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
