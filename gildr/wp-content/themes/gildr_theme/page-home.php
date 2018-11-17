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
  $why_copy                 = get_field('why_copy');
  $positions_link           = get_field('positions_link');
  $positions_button_copy    = get_field('positions_button_copy');
  $stay_connected_header    = get_field('stay_connected_header');
  $contact_form             = get_field('contact_form');
  $instagram_link           = get_field('instagram_link');
  $twitter_link             = get_field('twitter_link');
  $privacy_policy           = get_field('privacy_policy');
  $privacy_policy_link      = get_field('privacy_policy_link');
  $contact_email            = get_field('contact_email');
  $instagram_feed           = get_field('instagram_feed');

  // Slider #1
  $slider_1_image_1        = get_field('slider_1_image_1');
  $slider_1_image_2        = get_field('slider_1_image_2');
  $slider_1_image_3        = get_field('slider_1_image_3');
   // Slider #2
  $slider_2_image_1        = get_field('slider_2_image_1');
  $slider_2_image_2        = get_field('slider_2_image_2');
  $slider_2_image_3        = get_field('slider_2_image_3');

get_header(); ?>

    

    <!-- Hero -->
    <section id="hero-section">
      <div class="fullscreen-bg row  top-lg top-md top-sm top-xs">
      
      <div class="video-content">
          <h1><?php echo $header_copy; ?>  </h1>
      </div>

      <video class="hero-video" loop muted autoplay playsinline> 
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
        <div id="image-1" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_1['url']; ?>');
              background-size: cover;
              background-position: center;
              height: 60vh;">
       </div><!-- image 1.1 -->

       <div  id="image-2" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_2['url']; ?>');
             background-size: cover;
             background-position: center;
             height: 60vh;">
        </div><!-- image 1.2 -->

        <div id="image-3" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_3['url']; ?>');
             background-size: cover;
             background-position: center;
             height: 60vh;">
        </div><!-- image 1.3 -->
  
     </div><!-- copy-wrapper 1 -->

     
     
     <div class="row copy-wrapper"><!-- copy-wrapper 2 -->

      <div id="image-4" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_2_image_1['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
       </div><!-- image 2.1 -->

      <div id="image-5" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_2_image_2['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
       </div><!-- image 2.2 -->

      <div id="image-6" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_2_image_3['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
      </div><!-- image 2.3 -->

         <!-- copy 2 -->
       <div class="copy-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 last-lg last-md first-sm first-xs">
           <p>
             <?php echo $copy_section_2; ?>
           </p>
       </div><!-- copy 2 -->
     </div><!-- copy-wrapper 2s -->


</section> <!-- Copy -->


    <!-- Why -->
    <section id="why">

      <div class="why-row row top-lg top-md top-sm top-xs"> <!--why-row-->

          <div class="why-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p> 
                <?php echo $why_copy; ?>
            </p>
        

            </div><!--why-block -->

                 <video class="why-video" loop muted autoplay playsinline> 
                  <source src="<?php echo $mid_section_video['url']; ?>" type="video/mp4">
                </video>
          
          </div> <!-- position-row  -->

       </div><!-- why-block-wrapper -->
      
      </div><!--why-row-->


    </section><!-- Why -->



    <section id="postions-section"> 


      <div class="positions-button-wrapper row center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs">

          <a target=”_blank class="postions-button" href="<?php echo $positions_link; ?>"><?php echo $positions_button_copy; ?></a>

      </div>

    </section>


    <!-- Stay Connected -->
    <section id="stay-connected">

      <div class="row stay-connected-row center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3><?php echo $stay_connected_header; ?></h3>
           
          
          <?php echo do_shortcode($contact_form) ; ?>

          <div class="social-wrapper">
              <a target=”_blank href="<?php echo $instagram_link; ?>"><i class="fab fa-instagram"></i></a>
              <a target=”_blank href="<?php echo $facebook_link; ?>"><i class="fab fa-facebook-f"></i></a>
          </div>

        </div>
       
      </div>
    </section><!-- Stay Connected -->

    <!-- Instagram -->
    <section>
    <?php echo do_shortcode($instagram_feed); ?>
  </section><!-- Instagram -->



<?php get_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/home-en.js"></script>

 