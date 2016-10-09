 <?php get_header();?>
      <div id="letsAnimate" class="off">
            <div id="search" class="open">
            <button data-widget="remove" id="removeClases" class="close" type="button">×</button>
            <form action="http://bootsnipp.com/user/snippets/508jR" method="" autocomplete="getOff">
                    <input type="text" placeholder="Escribe Lo Que Buscas" value="" name="term" id="term">
                    <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Buscar</button>
            </form>
            </div>
        </div>

  <div class="jumbotron">
      <h1>Bienvenidos a Codigo++</h1>
      <p>Espero Que Aprendan mucho!</p>
      <div class="container">
          <button type="button" class="btn btn-primary btn-lg center-block">
  Tutoriales
</button>
      </div>
         <a class="btn btn-social-icon btn-lg btn-github">
    <span class="fa fa-github"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-pinterest">
    <span class="fa fa-youtube"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-twitter">
    <span class="fa fa-twitter"></span>
  </a>
      <a class="btn btn-social-icon btn-lg btn-instagram">
    <span class="fa fa-instagram"></span>
  </a>
      
      </div>

       <div class="container">
                 
       
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
           
                  <?php
$catquery = new WP_Query( 'cat=3&posts_per_page=3' );
while($catquery->have_posts()) : $catquery->the_post();
?>
 <div class="col-md-4 itemsIn-portfolio">
<a href="<?php the_permalink(); ?>">
                    <img class="img-responsive" src="" alt="" <?php the_post_thumbnail(); ?>
                </a>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p><?php the_excerpt(); ?></p>
                 
            </div>
                 
<?php endwhile; ?>
  
         </div>
      

        
        <!-- /.row -->
           
  <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
  <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 itemsIn-portfolio">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
 </div>
        <hr>
 

       
   <?php get_footer();?>