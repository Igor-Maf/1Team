<?php get_header(); ?>

<section class="container container--main">
    <?php if ( have_posts() ) : /* $i = 0; */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php /* if ( $i % 2 == 0 ) : ?>
                <section class="row">
            <?php endif; */ ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-6'  ); ?>> <!-- body has class "blog"-->
                <header>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <?php the_title( '<h2>', '</h2>' ); ?>
                    </a>
                </header>
                <?php ot_the_truncated_content(); ?>
            </article>

            <?php /* $i++; ?>
            <?php if ( $i % 2 == 0 ) : ?>
                </section>
            <?php endif; */ ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ot' ); ?></p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>