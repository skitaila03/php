<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en">
<?php
	include("includes/db.php");
	include("includes/util.php");
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title><?php echo $title?></title>
<link rel="shortcut icon" type="image/png" href="<?php echo $favicon;?>"/>

<link href="includes/style.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrap">
	<div class="task">
		<div class="box-black">
		<a href="?">
			<img src="<?php echo $logo?>" class="logo" border="0" alt="Click!">
		</a> 
		</div>
		<div class="space">&nbsp</div>
		<div class="box-black">
			<a href="<?php echo $forum;?>" class="box-blue">
				Home
			</a>
			
			<a href="<?php echo $matches;?>" class="box-blue">
				Live
			</a>
				
			<form action="gt.php" method="post">
  				<input type="text" name="index" placeholder="GT Search...">
			</form>
		</div>
	<div class="space">&nbsp</div>
	<table class="table table-striped">
		<thead>
  			<tr>
    				<th>#</th>
				<th>Name</th>
    				<th>Wins</th>
    				<th>Looses</th>
				<th>Leaves</th>
  			</tr>
		</thead>
		<tbody>
  		<tr>
		<?php
			$start =0 ;
			$limit = 15;
			$order = "wins";
			$query = mysqli_query($db,"select * from $table order by $order desc LIMIT $start, $limit");
			$count = mysqli_query($db,"select count(*) from $table order by $order desc LIMIT $start, $limit");
			$rows = mysqli_num_rows(mysqli_query($db,"select * from $table"));
		?>
			
		<?php
			if($rows > 0){
				$i = 1;
			while($result = mysqli_fetch_array($query))
			{
				
		?>
		<?php
			if($i == 1 || $i == 2 || $i == 3)
			{
		?>
    				<td>
				<?php
					switch ($i)
					{
						case 1:
				?>
							<img src="images/gold.png" class="top"></img>
				<?php
							break;
						case 2:
				?>
							<img src="images/silver.png" class="top"></img>
				<?php
							break;
						case 3:
				?>
							<img src="images/bronze.png" class="top"></img>
				<?php
							break;
				
					}
				?>
				</td>
				<td>
					<b><?php echo $result['name']; ?></b>
				</td>
		<?php
			}
			else
			{
		?>
			<td><b><?php echo $i;?></b></td>
    			<td><?php echo $result['name']; ?></td>
		<?php
			}
		?>
			<td><?php echo $result['wins']; ?></td>
    			<td><?php echo $result['loses']; ?></td>
    			<td><?php echo $result['leaves']; ?></td>

  		</tr>
		<?php
			++$i;
		}
	}
		?>
		</tbody>
	</table>
	<div class="box-black">
		<font color="ligtblue">Total Players:</font> <?php echo $rows?>
	</div>
	<br>
	<br>
	</div>
	</div>
</body>
<footer>

</footer>
</html>
