<?php
/**
 * Template Name: Index
 */
?>

<?php while (have_posts()) : the_post(); ?>  
  <?php get_template_part('templates/documentation/index'); ?>
<?php endwhile; ?>
