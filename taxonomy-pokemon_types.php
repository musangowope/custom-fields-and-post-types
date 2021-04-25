<?php

get_header();

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

  <div>
    <?= get_template_part('template-parts/categories-selection'); ?>
  </div>
  <div>
    <a href="<?= get_site_url() ?>/pokemon">Show all pokemon</a>
  </div>

<h2>
  Category: <?= $term->name; ?>
</h2>
<br />
  <div id="primary" class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/pokemon-preview') ?>
      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- #primary -->
<?php

get_footer();
