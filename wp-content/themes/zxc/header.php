<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zxc
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mountain King - Bootstrap Template</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri();?>/bootstrap/css/theme.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/pushy.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/masonry.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/odometer-theme-default.css">
    </head>
    <body class="">
      <!-- Pushy Menu -->
      <nav class="pushy pushy-left">
        <ul class="list-unstyled">
            <li><a href="#home">Home</a></li>
            <li><a href="#feat">Features</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#news">My Blog</a></li>
            <li><a href="#history">My History</a></li>
            <li><a href="#photos">Look my Photos</a></li>
            <li><a href="#contact">Get in Touch!</a></li>
            <li><a href="http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" target="_blank">Download</a></li>
        </ul>
      </nav>

      <!-- Site Overlay -->
      <div class="site-overlay"></div>

        <header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-10">
                            <a href="#" class="thumbnail logo">
                                <img src="<?php the_field('logo'); ?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                          <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h1><small> the </small></br>
						<strong><?php the_field('word_press'); ?></strong></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, provident facere. Unde magnam sunt soluta tenetur fugit excepturi iste officia illum ut est, veniam repellat eligendi quo repudiandae aspernatur dolorem.</p>
                    </div>
                </div>
            </div>
        </header>