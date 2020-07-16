<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Remote</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

  </head>
<body>

<?php
require 'connect.php';

$forward = 'f';
$backward = 'b';
$left = 'l';
$right = 'r';
$stop = 's';

$direction = $_GET['remote'];

$sql = 'SELECT * FROM `Movement`  WHERE id = 1';


$check=mysqli_query($success,$sql);

if(mysqli_num_rows($check)>0){

  while ($row=mysqli_fetch_assoc($check)) {

  if($direction == $forward){
    echo '<h1> '.$row['forward'].'</h1>';
  } elseif ($direction == $backward) {
    echo '<h1> '.$row['backward'].'</h1>';

  } elseif ($direction == $left) {
    echo '<h1> '.$row['left'].'</h1>';

  } elseif ($direction == $right) {
    echo '<h1> '.$row['right'].'</h1>';

  } elseif ($direction == $stop) {
    echo '<h1> '.$row['start/stop'].'</h1>';
  }
}

}


?>
</body>
