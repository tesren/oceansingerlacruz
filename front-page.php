<?php get_header('front');?>

    <div class="row justify-content-center" id='homeVideoContainer'>
        <video autoplay muted loop autoplay id="homeVideo">
            <source src="<?php echo get_template_directory_uri() .'/assets/videos/video-ocean-marzo.m4v';?>" type="video/mp4">
        </video>
    </div>

        <div class="row position-relative">
            <section class="px-0"style="height:90vh;">
                
                <h2 class="animatable fadeIn" id='slider-text'>Exclusive 12 Unit<br> High-End<br>Boutique Condos</h2>
                    
                <img class="w-100" src="<?php echo get_template_directory_uri().'/assets/images/render-facade.jpg'; ?>" alt="Building Render" loading="lazy" style="height:90vh; object-fit:cover; object-position: top;">
                
            </section>
            <!-- <section id="content"></section> -->
        </div><!-- Parallax -->

        <div class="row justify-content-center" id="aboutOS" style="height:200vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/ocean-singer-real-view2.jpg';?>);">
            <div class="col-12 col-md-8 align-self-top text-center">
                <div class="row" style="margin-top:30vh;">
                    <div class="col-12 mb-5">
                        <h1 class="animatable fadeInDown" style="color:white;"><span>OCEAN </span> SINGER LA CRUZ</h1>
                        <p class="animatable fadeInUp" style="color:white;">Enjoy forever views, living beachfront at the La Cruz marina, in our delightful Mexican fishing village. A low density, 12 unit, luxury boutique condominium, Ocean Singer combines ‘’best in class’’ design and construction standards with a one of a kind location. From your terrace, behold the whales and the sails of Banderas Bay. Many great restaurants, live entertainment, watersports options, artesan stalls and fisherman’s markets.</p>
                    </div>
                    <div class="col-4 animatable fadeIn">
                        <i class="fas fa-4x fa-bed os-icon"></i>
                        <div class="tag-description"> 2 & 3 <br> bedroom condos</div>
                       
                    </div>
                    <div class="col-4 animatable fadeIn">
                        <i class="fas fa-4x fa-dollar-sign os-icon"></i>
                        <div class="tag-description">Starting <br> at US$500K</div>
                    </div>
                    <div class="col-4 animatable fadeIn">
                        <i class="fas fa-4x fa-home os-icon"></i>
                        <div class="tag-description">143m2 <br> 241m2</div>
                    </div>
                </div>
                
            </div>
        </div><!-- Description -->

        <div class="row text-center" id="front-gallery">
            <div class="col-12">
                
                 <h2 class="text-center animatable fadeInDown">Gallery</h2>

                <div class="row">
                    <div class="col-lg-8 mb-3 animatable fadeInUp">
                         <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/pool-render-new.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Pool" style="height:560px; object-fit:cover;">
                    </div>
                    <div class="col-lg-4 animatable fadeInDown mb-3">        
                        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/fachada.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Building render" style="height:560px; object-fit:cover;">                                              
                    </div>

                    <div class="col-lg-4 mb-3 animatable fadeInDown">
                        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/terraza-dptos.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Rooftop">
                    </div>
                    <div class="col-lg-4 animatable fadeInDown mb-3">
                        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/interior.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Interior">
                    </div>

                    <div class="col-lg-4 animatable fadeInDown">
                        <img class="w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/roof.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Rooftop">
                    </div>

                    <!--Estas imagenes solo se ven si entras a la galeria-->
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/roof-2.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Rooftop">
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/pool.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Roof top pool">
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/recamara.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Bedroom">
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/recamara-2.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Bedroom">
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/cocina.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Kitchen">
                    <img class="d-none" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/cocina-sala.jpg';?>" data-fancybox="gallery" loading="lazy" alt="Kitchen">



                    <?php for($k=1; $k<5; $k++): ?>
                        <img class='d-none' src="<?php echo get_template_directory_uri() .'/assets/images/gallery/interior-'.$k.'.jpg';?>" alt="Interior" data-fancybox="gallery" loading="lazy">
                    <?php endfor; ?>
                </div>
               
                
            </div>
        
        </div><!-- gallery -->

        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="text-center animatable fadeInDown"> Amenities</h2>
            </div>
            <div class="col-12">
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fas fa-5x fa-swimming-pool" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Swimming Pools
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 amenitie-item  animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fab fa-5x fa-pagelines" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Garden Terrace Level
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fas fa-5x fa-couch" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Lobby area on ground level
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fas fa-5x fa-parking" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Underground Parking
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fas fa-5x fa-box-open" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Storage
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <i class="fas fa-5x fa-dumbbell" style="color: #1d345d;"></i>
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Gym & Sauna
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-3 offset-1">
                                <img src="<?php echo get_template_directory_uri();?>/assets/svgs/rooftoop1.svg" alt="Rooftop" loading="lazy" style="width:50px;" loading="lazy">
                            </div>
                            <div class="col-8 col-md-7 os-ameniti-desc">
                                Roof Top
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-5 amenitie-item animatable fadeInUp">
                    </div> -->
                </div>


 
            </div>

            <div class="col-12 mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">

                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/parking-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Parking">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/open-area-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Open Area">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/lobby-area-on-grond-level-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Lobby">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/gym-sauna-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Gym">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/swimming-endless-pool-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Pools">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/garden-terrace-new.jpg';?>" class="d-block w-100" loading="lazy" alt="Terrace">
                            </div>    
     
                        </div>
                       
                    </div>
                    <!-- <video autoplay muted loop autoplay>
                        <source src="<?php //echo get_template_directory_uri() .'/assets/videos/common-areas.m4v';?>" type="video/mp4">
                    </video> -->
                </div>
            </div>
        
        </div><!-- Amenities -->

        <div class="row text-center" id="ocean-model">
            <div class="col-12 mt-5">
                <h2 class="animatable fadeInDown">Ocean Model</h2>
            </div>
            <div class="col-12" style="background:#fbfbfb;" >
                <div class="row">
                    <div class="col-12" style="padding:15px;">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 p-2 p-md-5">

                                <ul class="nav nav-pills mb-3 text-center justify-content-center" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Model</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Blueprint</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <img src="<?php echo get_template_directory_uri() .'/assets/images/gallery/ocean-model.jpg';?>" class="d-block w-100" alt="Ocean Model" loading="lazy" data-fancybox="ocean-gal">
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <img src="<?php echo get_template_directory_uri() .'/assets/images/gallery/ocean-model-blueprints.jpg';?>" class="d-block w-100" alt="Ocean Model Blueprints" loading="lazy" data-fancybox="ocean-gal">
                                    </div>
                                </div>
                   
                            </div>
                        </div>

                        <div class="row" style="font-size:1.1rem;">
                            <div class="col-5 col-md-4 offset-md-2">
                                <ul class="list-unstyled animatable fadeInUp">
                                    <li class="list-item">2,594 ft<sup>2</sup></li>
                                    <li class="list-item">3 Bed</li>
                                    <li class="list-item">3.5 Baths</li>
                                    <li class="list-item">Covered Parking</li>
                                </ul>

                            </div>

                            <div class="col-7 col-md-6">

                                <ul class="list-unstyled animatable fadeInUp">
                                    <li class="list-item">Open Kitchen & Living Area</li>
                                    <li class="list-item">Large Terrace with Hot Tub</li>
                                    <li class="list-item">Panoramic Ocean View</li>
                                    <li class="list-item">Laundry Room</li>
                                    <li class="list-item">Direct Access Elevator</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row text-center">
                            <h4 class="animatable fadeInDown">4th Level View</h4>

                            <div class="col-12 col-lg-8">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/4th-level-view-ocean-singer.jpg';?>" loading="lazy" alt="View">
                            </div>

                            <div class="col-12 col-lg-4 mt-3 mt-lg-0 animatable fadeInUp">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/UUlPKQ2ej_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--Ocean Model-->

        <!-- PH VIDEO<iframe width="560" height="315" src="https://www.youtube.com/embed/KBcVzCi6_hU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <div class="row text-center" id="singer-model">
            <div class="col-12 mt-5">
                <h2 class="animatable fadeInDown">Singer Model</h2>
            </div>
            <div class="col-12" style="background:#fbfbfb;" >
                <div class="row">
                    <div class="col-12" style="padding:15px;">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 p-2 p-md-5">

                            <ul class="nav nav-pills mb-3 text-center justify-content-center" id="pills-tab-singer" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pill-singer-model" data-bs-toggle="pill" data-bs-target="#pills-singer-model" type="button" role="tab" aria-controls="pills-singer-model" aria-selected="true">Model</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pill-singer-blue" data-bs-toggle="pill" data-bs-target="#pills-singer-blue" type="button" role="tab" aria-controls="pills-singer-blue" aria-selected="false">Blueprints</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-singer-model" role="tabpanel" aria-labelledby="pills-singer-model-tab">
                                    <img src="<?php echo get_template_directory_uri() .'/assets/images/gallery/singer-model.jpg';?>" class="d-block w-100" alt="Singer Model" loading="lazy" data-fancybox="singer-gal">
                                </div>

                                <div class="tab-pane fade" id="pills-singer-blue" role="tabpanel" aria-labelledby="pills-singer-blue-tab">
                                    <img src="<?php echo get_template_directory_uri() .'/assets/images/gallery/singer-model-blueprints.jpg';?>" class="d-block w-100" alt="Singer Model Blueprints" loading="lazy" data-fancybox="singer-gal">
                                </div>
                            </div>        
                                
                            </div>
                        </div>

                        <div class="row" style="font-size:1.1rem;">
                            <div class="col-5 col-md-4 offset-md-2 animatable fadeInDown">
                                <ul class="list-unstyled">
                                    <li class="list-item">1,539 ft<sup>2</sup></li>
                                    <li class="list-item">2 Bed</li>
                                    <li class="list-item">2 Baths</li>
                                     <li class="list-item">Large Terrace</li>
                                   
                                </ul>

                            </div>

                            <div class="col-7 col-md-6">

                                <ul class="list-unstyled animatable fadeInUp">
                                    <li class="list-item">Open Kitchen & Living Area</li>
                                    <li class="list-item">Marina, Ocean & Mountain View</li>
                                     <li class="list-item">Covered Parking</li>
                                    <li class="list-item">Laundry Room</li>
                                    <li class="list-item">Direct Access Elevator</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <h4 class="animatable fadeInDown">4th Level View</h4>

                            <div class="col-12 col-lg-8">
                                <img class="img-fluid animatable fadeInUp" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/4th-level-view-singer-new.jpg';?>" loading="lazy">
                            </div>
                        
                            <div class="col-12 col-lg-4 mt-3 mt-lg-0 animatable fadeInDown">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jkyxlSEFpyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!--Singer Model-->
        <div class="row text-center">
          <div class="col-12">
             <h2 >La Cruz</h2>
          </div>
        </div>
        <div class="row" style="min-height:80vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/marina-la-cruz.jpg';?>); image-reapeat:none; background-position: bottom center; background-size: cover;">
        </div><!-- La Cruz -->

        <div class="row" style="height:600px;">
            <iframe class="px-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14924.092528263764!2d-105.38050670427145!3d20.74985649375142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842141cc1f83b9c7%3A0x8ee25640ab0dcc32!2sOcean%20Singer%20La%20Cruz!5e0!3m2!1ses-419!2smx!4v1637170705253!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!-- Location Map -->

         <div class="row mb-5">
            <img class="px-0 w-100" src="<?php echo get_template_directory_uri() .'/assets/images/oceansinger-location-min.jpg';?>" alt="Ocean Singer Location" loading="lazy" style="min-height:50vh; object-fit:cover;">
         </div><!-- La Cruz -->

         <div class="row text-center">
             <div class="col-12">
                <h2 class="animatable fadeInDown">LifeStyle</h2>
             </div>
             <div class="col-12">
                 <div class="row justify-content-start justify-content-md-start" style="height:90vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/couple-in-pool.jpg';?>); image-reapeat:none; background-position: bottom center; background-size: cover; ">
                     <div class="col-6" style="margin-top:80px;">
                        <h4 class="titles-over-image ms-3 animatable fadeIn text-start">Simply spectacular sunrises and sunsets!</h4>
                     </div>
                 </div>
             </div>
            
        </div><!-- LifeStyle-->

         <div class="row lifestyle-section">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable fadeInDown">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/paddle-board.jpg';?>" loading="lazy" alt="Paddle Board">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable fadeInUp">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center">
                                 <h3> Paddleboarding </h3>
                                <p>Dare yourself to make new activities, create memories and get new stories to share.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Paddleboarding -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 animatable fadeInDown">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center">
                                 <h3>Morning walk</h3>
                                <p>Feel the sea breeze on your face every morning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 animatable fadeInUp">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/morning-walk.jpg';?>" loading="lazy" alt="Morning Walks">
                    </div>
                </div>
            </div><!-- Morning walk -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable fadeInDown">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/fishing.jpg';?>" loading="lazy" alt="Fishing">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable fadeInUp">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center">
                                <h3>Sport Fishing</h3>
                                <p>A fishing rod and a good company is the perfect combination to have an incredible day.</p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div><!-- Sport Fishing -->


            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 animatable fadeInDown">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center ">
                                 <h3>International Gastronomy</h3>
                                <p>Pamper your taste everyday with the magnificent flavors that are waiting for you in the seashore.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-6 animatable fadeInUp">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/international-food.jpg';?>" alt="International Food" loading="lazy">
                    </div>
                </div>
            </div> <!-- International Gastronomy -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable fadeInDown">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/la-cruz-town.jpg';?>" alt="Town" loading="lazy">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable fadeInUp">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center">
                                <h3>Live like at home</h3>
                                <p>Take a walk in the vivid village and experience life from a local perspective.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!-- Live like at home -->
        </div><!-- Activities-->

        <div class="row mb-5 mt-5">
            <div class="col-12 col-md-12 col-lg-7 col-xl-6 p-5 contact-section-right animatable fadeInUp">
                <div class="row">
                    <div class="col-12 mb-4">
                         <h3>Need more information!</h3>
                        <p style="color:white;">Would you like to receive more information by email, please fill our form and we will be contacting you soon! If you rather you can reach us on our contact information bellow.</p>
                    </div>
                    <div class="col-12 text-center">
                        <h4>Contact us</h4>
                    </div>
                    <div class="col-11 col-md-6 text-center mt-3">
                        Maru De la Peña
                        <a href="mailto:maru.dlpm@gmail.com" style="display:block;color:white; text-decoration:none;">maru.dlpm@gmail.com</a>
                        Phone +52 322.306.0100
                    </div>
                    <div class="col-11 col-md-6 text-center mt-3">
                        Chris Bouchard
                        <a href="mailto:chris@remaxplayalacruz.com" style="display:block;color:white; text-decoration:none;">chris@remaxplayalacruz.com</a>
                        Phone +52 322.173.3832
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="mailto:info@oceansingerlacruz.com" style="color:white; text-decoration:none;"><i class="fas fa-envelope-open-text"></i> info@oceansingerlacruz.com</a>
                        <ul class="list-inline mt-2">
                            <li class="list-inline-item"> <i class="fab fa-facebook-messenger"></i> Messenger</li>
                            <li class="list-inline-item"><i class="fab fa-whatsapp"></i> Whatsapp</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-6 p-5 animatable fadeInDown">
                <h3>Contact form</h3>

                <form id="osContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php');?>">

                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" name="phone" id="phone" class="form-control" id="phone" placeholder="Phone Number">
                        <label for="phone">Phone number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" placeholder="Write your message here!" id="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div>
                        <!-- <input class="btn-primary-osinger" type="submit" name="send" value="send message"> -->
                    <button type="submit" class="btn-primary-osinger">send message</button>
                    <!-- <small class="text-info form-control-msg js-form-submission">Submission in process, please wait...</small>
                    <small class="text-success form-control-msg js-form-success">Message succesfully submitted, thank you!</small>
                    <small class="text-danger form-control-msg js-form-error">There was a problem with the contact form, please try again</small> -->
                    </div>


                </form>

            </div>
        </div><!-- Contact form-->

<?php get_footer(); ?>