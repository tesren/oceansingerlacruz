<?php 
if(is_front_page()) {
 get_header('front');
}
else {
 get_header();
} ?>
        <div class="row parallax-os-container">
            <section id="slider"style="height:100vh;">
                <div id="content-images-slider">
                    <div class="image-slider rellax img2" data-rellax-speed="-10" style='background-image: url(<?php echo get_template_directory_uri() .'/assets/images/slider-4.jpg'?>)'></div>
                    <div class="text-slider rellax" data-rellax-speed="-2">
                        <h2 class="animatable fadeIn" id='slider-text'>Exclusive 12 Unit<br> High-End<br>Boutique Condos</h2>
                    </div>
                    <div class="image-slider img1" style='background-image: url(<?php echo get_template_directory_uri() .'/assets/images/slider-1.png';?>)'></div>
                </div>
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
                        <div class="tag-description">Starting <br> at US$410K</div>
                    </div>
                    <div class="col-4 animatable fadeIn">
                        <i class="fas fa-4x fa-home os-icon"></i>
                        <div class="tag-description">143m2 <br> 241m2</div>
                    </div>
                </div>
                
            </div>
        </div><!-- Description -->

        <div class="row text-center">
            <div class="col-12">
                
                 <h2 class="text-center animatable fadeInDown">Gallery</h2>

                <div class="row">
                    <div class="col-md-8 mb-3 animatable fadeInUp">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/render-balcony.jpg';?>">
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 mb-3 animatable fadeInUp">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/render-kitchen.jpg';?>">
                            </div>
                            <div class="col-md-12 animatable fadeInUp">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/render-bedroom.jpg';?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 mb-3 animatable fadeInDown">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/render-living.jpg';?>">
                    </div>
                    <div class="col-md-6 animatable fadeInDown">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/pool-render.jpg';?>">
                    </div>
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
                                Swimming pool & Endless Pool
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


 
            </div>

            <div class="col-12 mt-5">
                <div class="row justify-content-center">
                    <div class="col-11">

                        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/parking.jpg';?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/open-area.jpg';?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/lobby-area-on-grond-level.jpg';?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/gym-sauna.jpg';?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/swimming-endless-pool.jpg';?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item ">
                                <img src="<?php echo get_template_directory_uri() .'/assets/images/amenities/garden-terrace.jpg';?>" class="d-block w-100" alt="...">
                                </div>
    
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- <video autoplay muted loop autoplay>
                        <source src="<?php //echo get_template_directory_uri() .'/assets/videos/common-areas.m4v';?>" type="video/mp4">
                    </video> -->
                </div>
            </div>
        
        </div><!-- Amenities -->

        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="animatable fadeInDown">Ocean Model</h2>
            </div>
            <div class="col-12" style="background:#fbfbfb;" >
                <div class="row">
                    <div class="col-12 col-md-7" style="padding:15px;">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 p-2 p-md-5">
                                <img class="img-fluid animatable fadeInUp" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/ocean-model.jpg';?>">
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
                    <div class="col-12 col-md-5">
                        <div class="row">
                            <h4 class="animatable fadeInDown">4th Level View</h4>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/4th-level-view-ocean-singer.jpg';?>">
                        </div>
                        <div class="row mt-3 animatable fadeInUp">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/UUlPKQ2ej_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Ocean Model-->
        <!-- PH VIDEO<iframe width="560" height="315" src="https://www.youtube.com/embed/KBcVzCi6_hU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="animatable fadeInDown">Singer Model</h2>
            </div>
            <div class="col-12" style="background:#fbfbfb;" >
                <div class="row">
                    <div class="col-12 col-md-7 animatable bounceInLeft" style="padding:15px;">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 p-2 p-md-5">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/singer-model.jpg';?>">
                            </div>
                        </div>

                        <div class="row" style="font-size:1.1rem;">
                            <div class="col-5 col-md-4 offset-md-2 animatable bounceInLeft">
                                <ul class="list-unstyled">
                                    <li class="list-item">1,539 ft<sup>2</sup></li>
                                    <li class="list-item">2 Bed</li>
                                    <li class="list-item">2 Baths</li>
                                     <li class="list-item">Large Terrace</li>
                                   
                                </ul>

                            </div>

                            <div class="col-7 col-md-6">

                                <ul class="list-unstyled animatable bounceInLeft">
                                    <li class="list-item">Open Kitchen & Living Area</li>
                                    <li class="list-item">Marina, Ocean & Mountain View</li>
                                     <li class="list-item">Covered Parking</li>
                                    <li class="list-item">Laundry Room</li>
                                    <li class="list-item">Direct Access Elevator</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="row">
                            <h4 class="animatable bounceInRight">4th Level View</h4>
                            <img class="img-fluid animatable bounceInRight" src="<?php echo get_template_directory_uri() .'/assets/images/gallery/4th-level-view-singer-tower.jpg';?>">
                        </div>
                        <div class="row mt-3 animatable bounceInRight">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/jkyxlSEFpyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <div class="row" style="height:110vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/marina-la-cruz.jpg';?>); image-reapeat:none; background-position: bottom center; background-size: cover;">
        </div><!-- La Cruz -->

        <div class="row">
            <div id="map" style="height:600px;"></div>
            <div class="interest-points"> 
            </div>
        </div><!-- Location Map -->

         <div class="row" style="height:90vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/ocean-singer-location.jpg';?>); image-reapeat:none; background-position: bottom center; background-size: cover;">
        </div><!-- La Cruz -->

         <div class="row text-center">
             <div class="col-12">
                <h2 class="animatable fadeInDown">LifeStyle</h2>
             </div>
             <div class="col-12">
                 <div class="row justify-content-start justify-content-md-start" style="height:90vh;background-image: url(<?php echo get_template_directory_uri() .'/assets/images/couple-in-pool.jpg';?>); image-reapeat:none; background-position: bottom center; background-size: cover; ">
                     <div class="col-4" style="margin-top:80px;">
                        <h4 class="titles-over-image ms-3 animatable fadeIn">Simply spectacular sunrises and sunsets!</h4>
                     </div>
                 </div>
             </div>
            
        </div><!-- LifeStyle-->

         <div class="row lifestyle-section">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable bounceInLeft">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/paddle-board.jpg';?>" alt="">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable bounceInRight">
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
                    <div class="col-12 col-md-6 animatable bounceInLeft">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center">
                                 <h3>Morning walk</h3>
                                <p>Feel the sea breeze on your face every morning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 animatable bounceInRight">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/morning-walk.jpg';?>" alt="">
                    </div>
                </div>
            </div><!-- Morning walk -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable bounceInLeft">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/fishing.jpg';?>" alt="">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable bounceInRight">
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
                    <div class="col-12 col-md-6 animatable bounceInLeft">
                        <div class="row justify-content-center os-message-lifestyle">
                            <div class="col-11 col-md-8 align-self-center ">
                                 <h3>International Gastronomy</h3>
                                <p>Pamper your taste everyday with the magnificent flavors that are waiting for you in the seashore.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-6 animatable bounceInRight">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/international-food.jpg';?>" alt="">
                    </div>
                </div>
            </div> <!-- International Gastronomy -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 order-2 col-md-6 order-md-1 animatable bounceInLeft">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/assets/images/activities/la-cruz-town.jpg';?>" alt="">
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-2 animatable bounceInRight">
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