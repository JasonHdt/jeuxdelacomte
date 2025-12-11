<?php
/**
 * Single post template
 */
get_header();
?>
<div class="wrap">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div class="entry-content"><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>Aucun article trouvé.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
