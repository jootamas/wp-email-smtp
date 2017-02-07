<?php
/*/
Plugin Name: WP email SMTP
Plugin URI: https://github.com/jootamas/wp-email-smtp
Description: Send all emails with SMTP server
Version: 1.0
Author: Joo Tamas
Author URI: http://jootamas.eu
/*/

add_action('phpmailer_init', 'setPHPMailer');
function setPHPMailer($phpmailer){
 $phpmailer->isSMTP();     
 $phpmailer->SMTPAuth = true;
 $phpmailer->Host = ''; // mail.mydomain.com
 $phpmailer->Port = ''; // SMTP port
 $phpmailer->Username = ''; // smtpuser@mydomain.com
 $phpmailer->Password = ''; // SMTP password
 $phpmailer->SMTPSecure = ''; // ssl / tls
 $phpmailer->From = get_bloginfo('admin_email');
 $phpmailer->FromName = '=?utf-8?B?'.base64_encode(get_bloginfo('wp_title')).'?=';
}
add_filter('wp_mail_content_type', 'setEmailContentType');
function setEmailContentType(){
 return 'text/html';
}
?>
