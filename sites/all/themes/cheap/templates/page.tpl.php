<div class="header">
  <div class="logo">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="/sites/all/themes/cheap/images/logo.svg" />
    </a>
  </div>
  <div class="menu-expander"><i class="fa fa-bars"></i></div>
</div>



<div class="navigation">
  <?php print render($page['menu']); ?>
</div>
</div>
<div class="page">
  <?php print $messages; ?>
  <?php print render($tabs); ?>

    <div class="content" role="main">

      <a id="main-content"></a>

      <?php print render($page['content']); ?>

    </div>

    <div class="side">
      <?php print render($page['side']);?>
    </div>

  <footer class="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>

</div>