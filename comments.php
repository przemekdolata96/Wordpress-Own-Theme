<?php

if ( post_password_required() ) {
	return;
}
?>
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
           <?php comments_number(); ?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->



	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments">No comments</p>
	<?php endif; ?>

	<?php comment_form(); ?>
