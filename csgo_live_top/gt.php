<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en">
<?php
	include("includes/db.php");
	include("includes/util.php");
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="3; url=http://www.gametracker.com/player/<?php echo $_POST["index"]; ?>/<?php echo $gt_server; ?>/" />
<title><?php echo $title?></title>
<link rel="shortcut icon" type="image/png" href="<?php echo $favicon;?>"/>

<link href="includes/style.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<center>
	<h3> <font color="white"> Searching for <?php echo $_POST["index"]; ?> on gametracker server...</h3></font>
	<br>
	<div class="loader"></div>
	</center>
</body>
</html>
