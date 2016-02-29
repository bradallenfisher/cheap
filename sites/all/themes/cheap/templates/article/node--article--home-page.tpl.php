<h2 class="home-page">
  <a href="<?php print $node_url; ?>" rel="bookmark">
    <?php print $title; ?>
  </a>
</h2>

<div class="social">
    <?php print render($content['rrssb']);?>
</div>
<?php print render($content['field_image']); ?>
<?php print render($content['field_tags']); ?>
<?php print render($content['body']); ?>
<p class="finish">
<span class="finish-label">Finish Reading: </span>
  <a href="<?php print $node_url; ?>" rel="bookmark">
    <?php print $title; ?>
  </a>
</p>



