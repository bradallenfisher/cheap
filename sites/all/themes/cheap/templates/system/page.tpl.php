<?php print $messages; ?>
<?php print render($tabs); ?>
<div class="header-wrapper">
  <div class="header">
    <div class="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="/sites/all/themes/cheap/images/logo.svg" />
      </a>
    </div>
    <div class="menu-expander"><i class="fa fa-bars"></i></div>
  </div>
</div>
<div class="navigation">
  <?php print render($page['menu']); ?>
</div>

<div class="social">
  <?php print render($page['social']); ?>
</div>

<div class="main-wrapper">
  <div class="main">
    <?php print render($page['content']); ?>
  </div>

  <div class="side">
    <?php print render($page['side']);?>
  </div>
</div>

<footer class="footer" role="contentinfo">
  <?php print render($page['footer']); ?>
</footer>

