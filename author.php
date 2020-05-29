<?php get_header(); ?>

<div class="wrapper">

    <h3 class="page-heading">All Posts By <?php print the_author_meta('display_name'); ?></h3>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="card">

        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>

        <div class="card-body">

            <?php if(has_post_thumbnail()): ?>

            <div>

                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""
                        class="news-img"></a>

            </div>

            <div>
                <?php endif; ?>

                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">Read the full article</a>

            </div>

        </div>

    </div>

    <?php endwhile; endif;?>

</div>

<?php get_footer(); ?>