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
        $frontpage_id = get_option('page_on_front');
        $frontpage_page = get_post($frontpage_id);
        $blog_id = get_option('page_for_posts');

        $content = $frontpage_page->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;


        $recent_news = new WP_Query( "posts_per_page=5" );
      ?>
      
      <?php if ( $recent_news->have_posts() ) { ?>
          <h1>Recent News</h1>

          <?php /* Start the Loop */ ?>
          <?php while ( $recent_news->have_posts() ) : $recent_news->the_post(); ?>

            <?php
              /* Include the Post-Format-specific template for the content.
               * If you want to overload this in a child theme then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'content', get_post_format() );
            ?>

          <?php endwhile; ?>
          <a class="post-nav" href="<?php echo get_permalink($blog_id); ?>">
            <h2>
              Read More
            </h2>
          </a>
        <?php } ?>




<?php get_footer(); ?>
