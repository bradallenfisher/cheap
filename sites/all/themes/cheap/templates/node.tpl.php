<?php print render($content['field_tags']); ?>
<article<?php print $attributes; ?>>

  <?php if (!empty($title_prefix) || !empty($title_suffix) || !$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php if ($page): ?>
      <h1><?php print $title;?></h1>
      <?php endif;?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?></span>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php if (!$page): ?>
  <p class="finish">
    <a href="<?php print $node_url; ?>" rel="bookmark"><span class="fa fa-link"></span>  Finish reading <?php print $title; ?></a>
  </p>
<?php endif;?>
<?php print render($content['comments']); ?>
</article>


