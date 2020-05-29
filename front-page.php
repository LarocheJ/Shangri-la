<?php get_header(); ?>

<div class="wrapper">

    <h3 class="page-heading"><?php the_title(); ?></h3>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; endif;?>

    <?php if(is_active_sidebar('homepage')) : ?>

    <section class="boxes-container">

        <?php dynamic_sidebar('homepage'); ?>

    </section>

    <?php endif; ?>

</div>

<?php get_footer(); ?>