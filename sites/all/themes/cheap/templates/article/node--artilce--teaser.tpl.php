<?php //TITLE;?>
<h2<?php print $title_attributes; ?>>
    <a href="<?php print $node_url; ?>" rel="bookmark">
      <?php print $title; ?>
    </a>
</h2>

<?php //Taxonomy;?>
<?php print render($content['field_tags']); ?>

<?php //BODY;?>
<?php print render($content['body']); ?>

<?php //FINISH READING;?>
  <p class="finish">
    <a href="<?php print $node_url; ?>" rel="bookmark">
      <span class="fa fa-link"></span>  Finish reading <?php print $title; ?>
    </a>
  </p>



