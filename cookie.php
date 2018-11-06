<html> 
<head> 
<title>Online Resume</title> 
</head> 
<body> 
<?php
$usr = "admin";
$psw = "password";
$username = '$_POST[username]';
$password = '$_POST[password]';
session_start();
if (($_POST['username']=="admin" && $_POST['password']=="password")) {
echo " Welcome $usr  ";
}
else {
echo "incorrect login";
}
?>
<div id="header"></div>
<div class="left"></div>
<div class="stuff">
<br><br>
<h1>Resume</h1>
<h2>UR16BCA006</h2>
<hr />
<br>
<p class="head">Interests</p>
<ul>
<li>Networking</li>
<li>Ethical Hacking</li>
<li>Web Design</li>
<li>Programming</li>
<li>Computer Forensic</li>
<p class="head">Education</p>
<ul>
<a href="http://www.karunya.edu">
<li> BCA - Karunya University </li>
</a>
</ul>
<p class="head">Skills</p>
<ul>
<li>Web Design with HTML PHP MYSQL</li>
<li> PHP scripting</li> 
<li>< Python Programming </li> 
</ul>
<p class="head">Extracurriculars</p>
<ul>
<li>NSS</li>
<li>NCC</li>
<li>Volunteer at Kerala Police Cyberdome</li>
</ul>
</div>
<div class="right"></div>
<div id="footer">
<hr />
<?php 
if (!isset($_COOKIE['count']))
{
?> 
Welcome ! Your Resume has been viewed once . 
<?php 
$cookie = 1;
setcookie("count", $cookie);
}
else
{
$cookie = ++$_COOKIE['count'];
setcookie("count", $cookie);
?> 
<font size =13> Your Resume has been viewed   <?= $_COOKIE['count'] ?> times. </font>
<?php }
?> 
</body> 
</html>
