<?php

require 'php-sdk/facebook.php';



$facebook = new Facebook(array(
  'appId'  => '597508756940240',
  'secret' => '	69799a2fb3374a1a0dafbd33fa189457',
));

// Get User ID
$user = $facebook->getUser();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h3>Hello World!!</h3>
</body>
</html>