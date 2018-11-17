<?php 
/* Template Name: Home Page Cn */



  // Custom Fields
  $header_copy_cn              = get_field('header_copy_cn');
  $header_video_cn             = get_field('header_video_cn');
  $copy_section_1_cn           = get_field('copy_section_1_cn');
  $copy_section_2_cn           = get_field('copy_section_2_cn');
  $mid_section_video_cn        = get_field('mid_section_video_cn');
  $why_copy_cn                 = get_field('why_copy_cn');
  $positions_link_cn           = get_field('positions_link_cn');
  $positions_button_copy_cn    = get_field('positions_button_copy_cn');
  $stay_connected_header_cn    = get_field('stay_connected_header_cn');
  $contact_form_cn             = get_field('contact_form_cn');
  $instagram_link_cn           = get_field('instagram_link_cn');
  $facebook_link_cn            = get_field('facebook_link_cn');
  $instagram_feed_cn           = get_field('instagram_feed_cn');

  // Slider #1
  $slider_1_image_1_cn        = get_field('slider_1_image_1_cn');
  $slider_1_image_2_cn        = get_field('slider_1_image_2_cn');
  $slider_1_image_3_cn        = get_field('slider_1_image_3_cn');
   // Slider #2
  $slider_2_image_1_cn        = get_field('slider_2_image_1_cn');
  $slider_2_image_2_cn        = get_field('slider_2_image_2_cn');
  $slider_2_image_3_cn        = get_field('slider_2_image_3_cn');


get_header(); ?>

    

    <!-- Hero -->
    <section id="hero-section">
      <div class="fullscreen-bg row  top-lg top-md top-sm top-xs">
      
      <div class="video-content">
          <h1><?php echo $header_copy_cn; ?>  </h1>
      </div>

      <video class="hero-video" loop muted autoplay playsinline> 
        <source src="<?php echo $header_video_cn['url']; ?>" type="video/mp4">
      </video>
    </div>
    </section> <!-- Hero -->



<!-- Copy -->
<section id="copy-section">


     <!-- copy 1 -->
     <div class="row copy-wrapper"><!-- copy-wrapper 1 -->
         <div class="copy-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
             
          <div class="copy1-para col-lg-12 scol-md-6 col-sm-12 col-xs-12">

              <p>
               <?php echo $copy_section_1_cn; ?>            
             </p>

          </div>
         
     
        </div><!-- copy 1 -->

        <!-- image 1 -->
        <div id="image-1-cn" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_1_cn['url']; ?>');
              background-size: cover;
              background-position: center;
              height: 60vh;">
       </div><!-- image 1.1 -->

       <div  id="image-2-cn" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_2_cn['url']; ?>');
             background-size: cover;
             background-position: center;
             height: 60vh;">
        </div><!-- image 1.2 -->

        <div id="image-3-cn" class="copy-image-en-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs" 
             style="background: url('<?php echo $slider_1_image_3_cn['url']; ?>');
             background-size: cover;
             background-position: center;
             height: 60vh;">
        </div><!-- image 1.3 -->
  
     </div><!-- copy-wrapper 1 -->

     
     
     <div class="row copy-wrapper"><!-- copy-wrapper 2 -->

      <div id="image-4-cn" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_2_image_1_cn['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
       </div><!-- image 2.1 -->

      <div id="image-5-cn" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_2_image_2_cn['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
       </div><!-- image 2.2 -->

      <div id="image-6-cn" class="copy-image-en-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 start-xs"
           style="background: url('<?php echo $slider_3_image_3_cn['url']; ?>');
           background-size: cover;
           background-position: center;
           height: 60vh;">
      </div><!-- image 2.3 -->

         <!-- copy 2 -->
       <div class="copy-2 col-lg-6 col-md-6 col-sm-12 col-xs-12 last-lg last-md first-sm first-xs">
           <p>
             <?php echo $copy_section_2_cn; ?>
           </p>
       </div><!-- copy 2 -->
     </div><!-- copy-wrapper 2s -->


</section> <!-- Copy -->


    <!-- Why -->
    <section id="why">

      <div class="why-row row top-lg top-md top-sm top-xs"> <!--why-row-->

          <div class="why-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p> 
                <?php echo $why_copy_cn; ?>
            </p>
        

            </div><!--why-block -->

                 <video class="why-video" loop muted autoplay playsinline> 
                  <source src="<?php echo $mid_section_video_cn['url']; ?>" type="video/mp4">
                </video>
          
          </div> <!-- position-row  -->

       </div><!-- why-block-wrapper -->
      
      </div><!--why-row-->


    </section><!-- Why -->



    <section id="postions-section"> 


      <div class="positions-button-wrapper row center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs">

          <a target=”_blank class="postions-button" href="<?php echo $positions_link_cn; ?>"><?php echo $positions_button_copy_cn; ?></a>

      </div>

    </section>


    <!-- Stay Connected -->
    <section id="stay-connected">

      <div class="row stay-connected-row center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3><?php echo $stay_connected_header_cn; ?></h3>
           
          
          <?php echo do_shortcode($contact_form_cn) ; ?>

          <div class="social-wrapper">
              <a target=”_blank href="<?php echo $instagram_link_cn; ?>"><i class="fab fa-instagram"></i></a>
              <a target=”_blank href="<?php echo $facebook_link_cn; ?>"><i class="fab fa-facebook-f"></i></a>
          </div>

        </div>
       
      </div>
    </section><!-- Stay Connected -->

    <!-- Instagram -->
    <section>
    <?php echo do_shortcode($instagram_feed_cn); ?>
  </section><!-- Instagram -->



<?php get_footer('cn'); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/home-cn.js"></script>
