##Send emails with SMTP in WordPress

This is a simple WordPress plugin for send emails with (external) SMTP server.

###Usage

1. Activate plugin
2. Fill it SMTP connect parameters
3. Use wp_mail()

```php
wp_mail('myemail@mydomain.com', 'Subject', 'Content');
```
