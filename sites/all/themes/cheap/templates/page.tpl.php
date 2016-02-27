<div class="page">
    <?php print $messages; ?>
    <div class="logo">
    <img src="/sites/all/themes/cheap/images/logo.svg" />
    </div>
    <div class="content">
      <?php print render($page['content']); ?>
    </div>

    <div id="side">
      <?php if ($page['side']): ?>
          <?php print render($page['side']); ?>
      <?php endif; ?>
    </div>

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div>

</div>
