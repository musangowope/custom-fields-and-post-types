<?php
get_header();

$moves = get_field('moves', get_the_ID());

?>

<div>
  <div>
    <a href="<?= get_site_url() ?>/pokemon">Show all pokemon</a>
  </div>
  <h2><?= get_the_title(); ?></h2>

  <div>
    <? the_post_thumbnail('large') ?>
  </div>

  <p>
    <?= get_the_content(); ?>
  </p>


  <h3>Pokemon Attacks</h3>
  <?php foreach ($moves as $move) : ?>
    <div><?= $move['move'] ?></div>
  <?php endforeach; ?>
</div>

<?php

get_footer();
