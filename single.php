<?php get_header(); ?>

<div class="wrapper">
	
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
    <h3 class="page-heading"><?php the_title(); ?></h3>

    <p>
		Posted on <?php print get_the_date(); ?> by <span class="author-link"><?php print get_the_author_posts_link() ?></span>
	</p>

    <?php if(has_post_thumbnail()): ?>

    <img class="float-left" src="<?php the_post_thumbnail_url(); ?>" alt="">

    <?php endif; ?>

    <?php the_content(); ?>
	
	<p>Category: <?php the_category(); ?></p>

    <?php endwhile; endif;?>

</div>

<?php get_footer(); ?>