<?php get_header();?>
<div class="container">
	<div class="row">

		<!-- <div class="col-lg-8 col-md-6"> -->
			
<div class="col-lg-8 col-md-8">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="page-header">
		<h2><?php the_title(); ?> <small><em>By: <?php the_author();?></em></small></h2>
	</div>
     <?php the_post_thumbnail('post-thumb'); ?>
	<?php the_content();?>
	
<?php endwhile; ?>
<?php else: ?>
<?php endif;?>



  <?php comments_template(); ?>
		</div>
		<div class="col-lg-4 col-md-4">
      <?php include ('sidebar.php'); ?>
	</div>
</div>
    </div>
<div class="container">
    <div class="row">
			<h1>Mas Videos </h1>
			<?php
 $posts = get_posts('orderby=rand&numberposts=3');
foreach($posts as $post)
 {
 ?>

<div class="col-md-4 itemsIn-portfolio">
     <h4>
                    <a href="<?php the_permalink(); ?>"><?php shorten_title(12); ?></a>
                </h4>
<a href="<?php the_permalink(); ?>">
                    <img class="img-responsive" src="" alt="" <?php the_post_thumbnail('down'); ?>
                </a>
               
    
                 

	</div>
	<?php } ?>
</div>
</div>

<?php get_footer();?>