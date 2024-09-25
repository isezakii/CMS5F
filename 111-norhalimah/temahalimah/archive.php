<?php get_header(); ?>
<main>
<h1>Arsip: <?php the_archive_title(); ?></h1>
<div class="archive-content">
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>
<article>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php the_excerpt(); ?></p>
</article>
<?php
endwhile;
endif;
?>
</div>
</main>
<?php get_footer(); ?>