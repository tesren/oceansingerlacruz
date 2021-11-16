<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if( is_singular() && pings_open( get_queried_object() )  ) : ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <?php endif; ?>
    <?php wp_head();?>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

    <meta name="description" content="Ocean Singer la Cruz is a low density, 12 unit, luxury boutique condominium">
</head>

<body <?php body_class();?>>

      <div class="container-fluid">

        <header class="row justify-content-center" id='homeVideoContainer'>

            <video autoplay muted loop autoplay id="homeVideo">
                <source src="<?php echo get_template_directory_uri() .'/assets/videos/video-ocean-singer-2.m4v';?>" type="video/mp4">
            </video>

            <div class="col-12 col-md-9 align-self-center text-center" id="navMenuContainer">

                <div class="row text-center mb-5">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/ocean-singer-logo.svg';?>" alt="Ocean Singer La Cuz Brand">
                </div>

                <div class="row">
                    <nav class="navbar navbar-expand navbar-light bg-blue" id="mainHeader">

                    <div class="container-fluid d-block p-0">

                        <a class="navbar-brand me-5 me-lg-0" href="<?php echo get_home_url();?>">
                            <img id="brand" class="w-50 my-3" src="<?php echo get_template_directory_uri() .'/assets/images/ocean-singer-logo.svg';?>" alt="Ocean Singer La Cuz Brand">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            
                        <!-- <ul id="header-items" class="navbar-nav row justify-content-center mx-auto"> -->

                        <?php
                                wp_nav_menu(
                                    [
                                        'menu'        => 'primary',
                                        'container'   => '',
                                        'theme_location' => 'primary',
                                        'items_wrap'  => '<ul id="header-items" class="navbar-nav row justify-content-center mx-auto">%3$s</ul>',
                                        'walker' => new Walker_Nav_Primary(),
                                    ]
                                )
                            ?>
                            <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inventory</a>
                            </li> 
                            <li class="nav-item col-12 col-lg-4">
                                <a class="nav-link" href="#aboutOS">About Ocean Singer</a>
                            </li>
                            <li class="nav-item col-12 col-lg-4">
                            <a class="nav-link" href="progress-construction">Progress Construction</a>
                            </li>
                            <li class="nav-item col-12 col-lg-4">
                            <a class="nav-link" id="osContactFormLink" href="#osContactForm">Contact us</a>
                            </li>
                        </ul>-->
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
            <div class="overlay"></div>
        <!-- Menu -->
        </header>

  <?php
      // wp_nav_menu(
      //     [
      //         'menu'        => 'primary',
      //         'container'   => '',
      //         'theme_location' => 'primary',
      //         'items_wrap'  => '<ul>%3$s</ul>',
      //         'walker' => new Walker_Nav_Primary(),
      //     ]
      // )
  ?>
