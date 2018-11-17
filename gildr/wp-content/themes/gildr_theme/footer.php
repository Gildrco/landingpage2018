<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gildr
 */

 $privacy_policy           = get_field('privacy_policy');
 $privacy_policy_link      = get_field('privacy_policy_link');
 $contact_email            = get_field('contact_email');
 $terms_conditions         = get_field('terms_conditions');
 $terms_conditions_link    = get_field('terms_conditions_link');

?>
<?php wp_footer(); ?>

    <!-- footer -->
    <footer>
      <div class="footer-block">
        <div class="footer-item-wrapper">
            <a target=”_blank href="<?php echo $privacy_policy_link; ?>"><?php echo $privacy_policy; ?></a>
        </div>
       
        <div class="footer-item-wrapper">
            <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
        </div>
       
        <div class="footer-item-wrapper">
            <a target=”_blank href="<?php echo $terms_conditions_link; ?>"><?php echo $terms_conditions; ?></a>
        </div>
       
      </div>
    </footer><!-- footer -->
  </main>
</body>
</html>
