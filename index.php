<!DOCTYPE html>
<html>
<head>
<title>CCTV (0) Motion</title>
<meta name="viewport" content="width=device-width">	
<link rel="shortcut icon" href="micon.png">	
<?php include('functions.php'); ?>
</head>
<body>
<div style="width:100%;padding:50px 0px;border:1px solid #000000;text-align:center;">
<img src="hicon.png" style="padding:10px;">
<br>

<form name="on" method="post" action="switch.php">
<input type=hidden name=com value=start>
<input type=image src="checkimg.php?cs=on" style="padding:10px;">
</form>
<br>
<form name="off" method="post" action="switch.php">
<input type=hidden name=com value=stop>
<input type=image src="checkimg.php?cs=off" style="padding:10px;">
</form>
<br><bR>
<a href="#"><img src="f5.png"></a>
</div>
</body>
</html>
