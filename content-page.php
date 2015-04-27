<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wudang-shiyu
 */
?>

<div id="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1>
      <?php the_title(); ?>
    </h1>
    <div class="entry-content content">
      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'wudang-shiyu' ),
          'after'  => '</div>',
        ) );
      ?>
    </div>

  </article><!-- #post-## -->
</div>
