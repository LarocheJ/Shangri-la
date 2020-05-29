<?php get_header(); ?>

<div class="wrapper">

    <h3 class="page-heading">Search Results for &ldquo; <?php print $_GET['s']; ?> &rdquo;</h3>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="card">

        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>

        <div class="card-body">

            <?php if(has_post_thumbnail()): ?>

            <div>

                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="news-img"></a>

            </div>
			
			<?php endif; ?>
			
            <div>
                

                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">Read the full article</a>

                <p>
					By 
					<a class="author-link" href="<?php get_the_author_posts_link() ?>"><?php print get_the_author_meta('display_name', $author_id); ?></a>
					<?php print get_avatar(get_the_author_email());  ?>
                </p>

            </div>
        </div>

    </div>

    <?php endwhile; endif;?>

</div>

<?php get_footer(); ?>