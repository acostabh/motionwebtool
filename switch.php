<!DOCTYPE html>
<html>
  <head>
    <title>CCTV (0) Motion</title>
    <meta name="viewport" content="width=device-width">	
  </head>
  <body>
    <div style="width:100%;padding:50px 0px;border:1px solid #000000;text-align:center;">
      <img src="hicon.png" style="padding:10px;">
      <br><br/><br/>
      <img src="loading.gif">&nbsp;&nbsp;&nbsp;&nbsp;
      <br/><br/>
      <b>Please wait!</b>
    </div>

<?php
  $com = $_POST["com"];
  include('functions.php');
  if($com) { doMotion($com); }
?>

  </body>
