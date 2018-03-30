<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Cette page est protégée par un mot de passe. Entrez le mot de passe pour en voir les commentaires.', 'billy' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=billycomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Les commentaires ne sont pas autorisés.', 'billy' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
