<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wudang-shiyu
 */
?>

<div id="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="header entry-header">
        <h4>
          New York University <br/>
          <?php bloginfo( 'name' ); ?>
        </h4>
        <h1>
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </h1>
    </header>

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
