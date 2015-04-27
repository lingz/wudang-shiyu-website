<?php
/**
 * @package wudang-shiyu
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wudang_shiyu_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Read More</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wudang_shiyu_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
