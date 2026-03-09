<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
    <h1 class="page-headline"><?php the_title(); ?></h1>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>