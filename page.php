<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true );
<?php the_content();?>
<?php endwhile; ?>
<?php else: ?>
<?php endif;?>

	

<?php get_footer();?>