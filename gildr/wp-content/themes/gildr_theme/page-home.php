<?php

/* 

Template Name: Home Page

*/

  // Custom Fields
  $header_copy              = get_field('header_copy');
  $header_video             = get_field('header_video');
  $copy_section_1           = get_field('copy_section_1');
  $copy_section_2           = get_field('copy_section_2');
  $mid_section_video        = get_field('mid_section_video');
  $positions_copy           = get_field('positions_copy');
  $positions_link           = get_field('positions_link');
  $stay_connected_header    = get_field('stay_connected_header');
  $contact_form             = get_field('contact_form');

get_header(); ?>


    <!-- Hero -->
    <section id="hero-section">
      <div class="fullscreen-bg row top-lg top-md">
      <div class="video-content">
          <h1><?php echo $header_copy?></h1>
      </div>
      <video class="hero-video" loop muted autoplay> 
        <source src="<?php echo $header_video['url']; ?>" type="video/mp4">
      </video>
    </div>
    </section> <!-- Hero -->


     <!-- Copy -->
    <section id="copy-section">
     
            <!-- copy 1 -->
            <div class="row copy-wrapper"><!-- copy-wrapper 1 -->
                <div class="copy-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <p>
                    <?php echo $copy_section_1; ?>
                   </p>
               </div><!-- copy 1 -->
   
               <!-- image 1 -->
               <div class="copy-image-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs">
               
               </div><!-- image 1 -->
         
            </div><!-- copy-wrapper 1 -->

            <div class="row copy-wrapper"><!-- copy-wrapper 2 -->
              <!-- image 2 -->
              <div class="copy-image-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs">
      
              </div><!-- image 1 -->

                <!-- copy 2 -->
              <div class="copy-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <p>
                  <?php echo $copy_section_2; ?>
                  </p>
              </div><!-- copy 2 -->
            </div><!-- copy-wrapper 2s -->
      

    </section> <!-- Copy -->

    <!-- Positions -->
    <section id="positions">
      <div class="position-row row center-lg center-md center-sm center-xs"> <!--postions-row-->
        
        <div class="positions-video">
            <video autoplay loop muted class="positions-video-tag" poster="video.jpg">
              <source src="<?php echo $mid_section_video['url']; ?>" type="video/mp4">
            </video>
        </div>
        

       <div class="positions-block-wrapper">

          <div class="positions-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>
              <?php echo $positions_copy ; ?>
              </p>
              <a class="postions-button" href="<?php echo $positions_link; ?>">OPEN POSTIONS</a>

            </div><!--positions-block -->
             
             
       </div><!-- positions-block-wrapper -->
      
      </div><!--postions-row-->


    </section><!-- Positions -->

    <!-- Stay Connected -->
    <section id="stay-connected">

      <div class="row stay-connected-row center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3><?php echo $stay_connected_header ; ?></h3>
           
          <?php echo do_shortcode($contact_form) ; ?>

          <div class="social-wrapper">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>

        </div>
       
      </div>
    </section><!-- Stay Connected -->

    <!-- Instagram -->
    <section>
  </section><!-- Instagram -->



<?php get_footer(); ?>
 