<?php
/*

Author: Andrew Walsh
Date: 30/05/2006
Codewalkers_Username: Andrew


This script is a basic contact form which uses AJAX to pass the information to php, thus making the page appear to work without any refreshing or page loading time.

*/

$to = "magazyn@blacha-profile.pl"; //This is the email address you want to send the email to
$subject_prefix = "Wiadomość ze strony Blacha-Profile.pl"; //Use this if you want to have a prefix before the subject

if(!isset($_GET['action']))
{
die("Nie możesz odwiedzać tej strony bezpośrednio!"); //Just to stop people from visiting contact.php normally
}

/* Now lets trim up the input before sending it */

$name = trim($_GET['name']); //The senders name
$email = trim($_GET['email']); //The senders email address
$subject = trim($_GET['subject']); //The senders subject
$message = trim($_GET['msg']); //The senders message

mail($to,$subject,$message,"From: ".$email.""); //a very simple send

echo 'contactarea|Dzi&#281;kujemy '.$name.', Tw&#243;j e-mail zosta&#322; wys&#322;any.'; //now lets update the "contactarea" div on the contact.html page. The contactarea| tell's the javascript which div to update.
?>
