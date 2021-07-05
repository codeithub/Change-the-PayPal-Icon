add_filter( 'woocommerce_paypal_icon', 'codeithub_replace_paypal_icon' );
  
function codeithub_replace_paypal_icon() {
   return 'https://image.flaticon.com/icons/png/512/1145/1145485.png';
}
