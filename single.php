<?php
 get_header();
?>

<div class="single-wrapper">
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
    ?>
        <h2>
            <?php  the_title();?>
        </h2>

        <h3>
            <?php the_date();?>  <?php the_author();?>
        </h3>
        <div class="thumbnail">
            <?php the_post_thumbnail('large-thumbnail');?>
        </div>
        <div class="content">
            <?php the_content();?>
        </div>
        <div class="comments">    
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        </div>
        <div class="post-links">
            <div class="previous">
                <?php previous_post_link();?>
            </div>
            <div class="next">
                <?php next_post_link();?>
            </div>
            <div class="clear"></div>
        </div>
    <?php
        

    // End the loop.
    endwhile;
    ?>
</div>

<?php
 get_footer();
?>