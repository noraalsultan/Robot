
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Remote</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

  </head>
<body>

<?php
require 'connect.php';

 ?>

<div class="remote">
<form class="" action="remotePhp.php" method="get">
  <button  class="buttonF" value="f" name="remote" >Forward</button>
  <br>
  <button  class="bttonR" value="r" name="remote" >Right</button>
  <button  class="bttonS" value="s" name="remote" >Stop</button>
  <button  class="bttonL" value="l" name="remote" >Left</button>
  <br>
  <button  class="buttonB" value="b" name="remote" >Backward</button>

</form>

</div>



</body>
