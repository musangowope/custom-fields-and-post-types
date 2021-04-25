<div style="margin-bottom: 20px">
  <h4 class="entry-title"><?php the_title(); ?></h4>
  <div style="width: 500px">
    <?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', ''); ?>
  </div>

  <br />

  <div>
    <?php the_excerpt(); ?>
  </div>
  <div>
    <a href="<?= get_permalink(get_the_ID()) ?>">
      Read More
    </a>
  </div>
</div>