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

 $privacy_policy_cn              = get_field('privacy_policy_cn');
 $privacy_policy_link_cn         = get_field('privacy_policy_link_cn');
 $terms_conditions_cn            = get_field('terms_conditions_cn');
 $terms_conditions_link_cn       = get_field('terms_conditions_link_cn');
 $contact_email_cn               = get_field('contact_email_cn');

?>
<?php wp_footer(); ?>

    <!-- footer -->
    <footer>
      <div class="footer-block">
        <div class="footer-item-wrapper">
            <a target=”_blank href="<?php echo $privacy_policy_link_cn; ?>"><?php echo $privacy_policy_cn; ?></a>
        </div>
       
        <div class="footer-item-wrapper">
            <a href="mailto:<?php echo $contact_email_cn; ?>"><?php echo $contact_email_cn; ?></a>
        </div>
       
        <div class="footer-item-wrapper">
            <a target=”_blank href="<?php echo $terms_conditions_link_cn; ?>"><?php echo $terms_conditions_cn; ?></a>
        </div>
       
      </div>
    </footer><!-- footer -->
  </main>
</body>
</html>
