<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
  // Check if this is an Elementor page and if header is managed by Elementor
  if ( class_exists( '\Elementor\Core\Files\Manager' ) && function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
    // Elementor header is used - do nothing, Elementor will handle it
  } else {
    // Use theme header
    ?>
<nav class="site-navigation">
  <div class="nav-left">
    <a class="logo-wrap" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span class="logo-name"><?php bloginfo( 'name' ); ?></span>
      <span class="logo-title"><?php echo esc_html( get_bloginfo( 'description' ) ? get_bloginfo( 'description' ) : 'Fractional CMO' ); ?></span>
    </a>
  </div>
  <?php if ( has_nav_menu( 'primary' ) ) : ?>
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav-links',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'depth' => 1,
      ) );
    ?>
  <?php else : ?>
    <ul class="nav-links">
      <li><a href="#work">Work</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="https://calendly.com/dinkytown/marketing-meeting" target="_blank" rel="noopener">Book</a></li>
    </ul>
  <?php endif; ?>
</nav>
    <?php
  }
?>
