<?php
/**
 * Front page template
 */
get_header();
?>
<section class="hero">
  <div class="wrap">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>
  </div>
</section>
<section class="content">
  <div class="wrap">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' );
            the_content();
        endwhile;
    else :
        echo '<p>Aucun contenu.</p>';
    endif;
    ?>
  </div>
</section>
<?php
get_footer();
