<?php 
add_shortcode( 'wc_login_form_bbloomer', 'bbloomer_separate_login_form' );
  
function bbloomer_separate_login_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   do_action( 'woocommerce_before_customer_login_form' );
   woocommerce_login_form( array( 'redirect' => '/my-account' ) );
   return ob_get_clean();
}