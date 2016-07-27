<?php get_header(); ?>

<section class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- post has class "page"-->
            <?php the_post_thumbnail(); ?>
            <header class="page__header">
                <?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
            </header>
            <main>
                <?php the_content(); ?>
            </main>
        </article>

        <?php if ( comments_open() || get_comments_number() ) {
            comments_template();
        } ?>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>
