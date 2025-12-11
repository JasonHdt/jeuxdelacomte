<?php
/**
 * Sidebar template
 */
?>
<aside class="sidebar">
  <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  <?php else : ?>
    <div class="widget">
      <h3>À propos</h3>
      <p>Ajoutez des widgets depuis Apparence → Widgets.</p>
    </div>
  <?php endif; ?>
</aside>
