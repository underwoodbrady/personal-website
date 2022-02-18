<?php 
if (!isset($_POST['submit'])) {
   echo "<h1>Error</h1>\n
      <p>Accessing this page directly is not allowed.</p>";
   exit;
}

$email = preg_replace("([\r\n])", "", $email);

$find = "/(content-type|bcc:|cc:)/i";
if (preg_match($find, $name) || preg_match($find, $email) || preg_match($find, $url) || preg_match($find, $comments)) {
   echo "<h1>Error</h1>\n
      <p>No meta/header injections, please.</p>";
   exit;
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

if(str_contains(strval($message), "SEO")){
    echo "<h1>Error</h1>\n
      <p>No SEO related messages, please.</p>";
   exit;
}

$formcontent="From: $name \nEmail: $email \nMessage:$message";
$recipient = "underwood.brady@gmail.com";
$subject = "Brady Games | Contact Form Submission";
$mailheader = "From: admin@brady.games";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header( 'Location: https://brady.games/contact.html' ) ;
?>