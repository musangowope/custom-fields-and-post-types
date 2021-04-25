<?php
get_header();
?>
  <div id="primary" class="site-content">
    <div>
      <?= get_template_part('template-parts/categories-selection') ?>
    </div>

    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('template-parts/pokemon-preview') ?>
      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php

get_footer();