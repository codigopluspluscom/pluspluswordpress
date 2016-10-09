<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('')?></title>

    <!-- Bootstrap -->

      <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <!-- Bootstrap files -->
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
   <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <nav class="navbar navbar-default navegador">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url() );?>">++ Beta</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
<!--
Search form
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo esc_url(home_url() );?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>         
<li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Acerca</a></li>
          <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
                  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-facetime-video"></span> Cursos</a>
          <ul class="dropdown-menu">
            <li><a href="#">Pygame</a></li>
            <li><a href="#">Node.Js</a></li>
            <li><a href="#">Python</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Bootstrap</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Foundation Zurb</a></li>
          </ul>
        </li>                  <li><a href="#myModal"><span class="glyphicon glyphicon-envelope"></span> Contactar</a></li>
            <li class="youknow-icon">
              <a href="#" id="addClases"><span class="glyphicon glyphicon-search"></span></a>
            </li>
                  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>