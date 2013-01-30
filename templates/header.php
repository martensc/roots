<header class="banner" role="banner">
  <div class="container">
    <?php if (is_front_page()): ?>
      <h1>
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> <small class="site-description"><?php bloginfo( 'description' ); ?></small>
      </h1>
      <?php else: ?>
      <h2>
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> <small class="site-description"><?php bloginfo( 'description' ); ?></small>
      </h2>
    <?php endif; ?>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>