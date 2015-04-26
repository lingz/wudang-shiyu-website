<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wudang-shiyu
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
</a>

<div id="menu">
  <div class="pure-menu pure-menu-open">
    <ul>
      <?php 
        $pages_query = new WP_QUERY(array( "post_type" => "page", "orderby" => "menu_order", "order" => "ASC", "posts_per_page" => -1));
          while ($pages_query->have_posts()): 
            $pages_query->the_post();
            global $post;
            ?>
              <li><a class="<?php echo (is_page($post->ID) ? "active" : ""); ?>" href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></li>
            <?php
          endwhile;
      ?>
    </ul>
  </div>
</div>
