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
</head>
<body <?php body_class();?>>
      <div class="container-fluid">
        <header class="row justify-content-center" id="secondaryHeader">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm navbar-light bg-light" width="100%">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img width="320" src="<?php echo get_template_directory_uri() .'/assets/svgs/oceansinger/ocean-singer-logo-blue.svg';?>" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarNav" >
                        <ul class="navbar-nav" style="margin-left:auto; ">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo get_home_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/progress-construction">Progress Construction</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#osContactForm">Contact us</a>
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
