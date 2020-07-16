<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'Robot');

$success=mysqli_connect(HOST,USER,PASS,DB) or die('unable to connect to Database');

mysqli_set_charset($success, "utf8");
?>
