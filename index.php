<?php get_header(); ?>

<section class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title( '<h2>', '</h2>' ); ?>
                </a>
            </header>
            <?php the_content(); ?>
        </article>

    <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no posts matched your criteria.', 'ot' ); ?>
        </p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>