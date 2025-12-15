<?php
// mail_config.php
// Copy this file to set SMTP settings. Do NOT commit real credentials.

// Example for Gmail (use app password if 2FA enabled):
// SMTP_HOST = 'smtp.gmail.com'
// SMTP_PORT = 587
// SMTP_SECURE = 'tls'
// SMTP_USER = 'your@gmail.com'
// SMTP_PASS = 'your_app_password'
// SMTP_FROM_EMAIL = 'your@gmail.com' (optional)
// SMTP_FROM_NAME = 'Kankai Plastics' (optional)

if (!defined('SMTP_HOST')) define('SMTP_HOST', 'smtp.gmail.com');
if (!defined('SMTP_PORT')) define('SMTP_PORT', 587);
if (!defined('SMTP_SECURE')) define('SMTP_SECURE', 'tls');
if (!defined('SMTP_USER')) define('SMTP_USER', 'plasticsprs@gmail.com');
if (!defined('SMTP_PASS')) define('SMTP_PASS', ''); // <-- set your SMTP password or app password
if (!defined('SMTP_FROM_EMAIL')) define('SMTP_FROM_EMAIL', 'plasticsprs@gmail.com');
if (!defined('SMTP_FROM_NAME')) define('SMTP_FROM_NAME', 'Kankai Plastics');

// PHPMailer is required for SMTP. Install via Composer in project root:
// composer require phpmailer/phpmailer
// Then ensure your code includes Composer's autoload (autoload is usually at vendor/autoload.php).

// Optional: if you don't want to use Composer, you can download PHPMailer and include its src/ files.

?>
