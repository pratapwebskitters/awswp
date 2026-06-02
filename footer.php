<?php
  // Check if this is an Elementor page and if footer is managed by Elementor
  if ( class_exists( '\Elementor\Core\Files\Manager' ) && function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) {
    // Elementor footer is used - do nothing, Elementor will handle it
  } else {
    // Use theme footer
    ?>
<footer class="site-footer">
  <div class="footer-content">
    © <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> · Fractional CMO
  </div>
</footer>

<div class="mobile-cta-bar">
  <a href="https://calendly.com/dinkytown/marketing-meeting" target="_blank" rel="noopener">
    Book a Fit Call
    <span class="mobile-cta-bar-sub">No hype. No pitch. Just a real conversation.</span>
  </a>
</div>
    <?php
  }
?>

<?php wp_footer(); ?>
</body>
</html>
