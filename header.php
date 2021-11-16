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

        <header class="row d-block justify-content-center" id="secondaryHeader">
            <div class="col-12 p-0">
                <nav class="navbar navbar-expand-sm navbar-dark bg-blue d-block text-center" width="100%">

                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <img class="w-50 my-4" src="<?php echo get_template_directory_uri() .'/assets/images/ocean-singer-logo.svg';?>" alt="Logo Ocean Singer">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarNav" >
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link link-light" aria-current="page" href="<?php echo get_home_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active link-light mx-5"  href="/progress-construction">Progress Construction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-light" href="#osContactForm">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- Menu --> 
            </div>   
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
