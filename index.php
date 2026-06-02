<?php
get_header(); ?>
<main class="wrap section">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1 class="intro-headline"><?php the_title(); ?></h1>
      <div class="body-text"><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <article class="body-text">
      <p><?php esc_html_e( 'Sorry, no content matched your criteria.', 'raymond-bell' ); ?></p>
    </article>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
