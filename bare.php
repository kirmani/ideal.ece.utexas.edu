<?php
/**
 * Template Name: Bare Page
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()): the_post(); ?>
  <?php the_content(__('(more...)')); ?>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matches your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
