<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package wudang-shiyu
 */

get_header(); ?>

    <?php
        $blog_id = get_option('page_for_posts');
        $blog_page = get_post($blog_id);
    ?>

    <h1><?php echo get_the_title($blog_id); ?></h1>
    <?php
        $content = $blog_page->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
    ?>

    <?php if ( have_posts() ) { ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
          ?>

        <?php endwhile; ?>
        <div class="nav-previous post-nav">
          <h1>
            <?php next_posts_link( 'Older posts' ); ?>
          </h1>
        </div>
        <div class="nav-next post-nav">
          <h1>
            <?php previous_posts_link( 'Newer posts' ); ?>
          </h1>
        </div>
      <?php } else { ?>
        <h2>No Posts</h2>
      <?php } ?>

    


<?php get_footer(); ?>
