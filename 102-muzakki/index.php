<?php get_header(); ?>

<div id="main-content">

    <h2>Blog Posts</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <p><?php the_excerpt(); ?></p>

    <?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>