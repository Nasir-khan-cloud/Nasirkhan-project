<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/dmp/admin/');

define('BASE_URL', 'http://localhost/dmp/');
define('ADMIN_URL', 'http://localhost/dmp/admin/');

//Directory

define('DIR_LANGUAGE', 'D:/xampp/htdocs/dmp/language/');
define('DIR_BASE', 'D:/xampp/htdocs/dmp/');

define('DIR_IMAGE', 'D:/xampp/htdocs/dmp/image/');
define('DIR_THEME_IMAGE', 'D:/xampp/htdocs/dmp/admin/style/images/');



// DB
	$connect = mysqli_connect('localhost', 'root', "",'dmp'); if(!$connect){die('Unable to connect to Admin Database');}
	
	mysqli_set_charset($connect,"utf8");
	date_default_timezone_set("Asia/Dhaka");
	
?>
