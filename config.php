<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("755912671087-drf9ergtv2l53nnfql7p6v8alhqqp55u.apps.googleusercontent.com");
	$gClient->setClientSecret("D6M7iIKuUE76ZeiWd6hKX7KA");
	$gClient->setApplicationName("Demo Login");
	$gClient->setRedirectUri("http://localhost/googleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


?>