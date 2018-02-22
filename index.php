<?php
 get_header();
?>
<?php
if(have_posts()) :
    while(have_posts()) : the_post(); ?>

    <a href="<?php the_permalink();?>">
        <article>
            <?php the_post_thumbnail('medium-thumbnail');?>
            <div class="post-background">
                <h2><?php the_title();?></h2>
                <h5><?php the_date();?>  <?php the_author();?></h5>
                <p><?php the_content();?></p>
                <div class="more-icon">
                    <i class="fas fa-search fa-2x"></i>
                </div>
            </div>
        </article>
   </a>
<?php 
   endwhile;
   else:
    echo '<p>We have no posts</p>';
   endif;
?>

<?php
 get_footer();
?>