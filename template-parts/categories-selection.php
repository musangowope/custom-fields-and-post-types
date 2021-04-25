<?php
$pokemon_types =  get_terms('pokemon_types');
?>

<ul>
  <?php foreach ($pokemon_types as $pokemon_type) : ?>
  <li>
    <a href="<?= get_term_link($pokemon_type->term_id); ?>">
      <?= $pokemon_type->name; ?>
    </a>
  </li>
  <?php endforeach; ?>
</ul>
