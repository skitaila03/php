<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en">
<?php
	include("includes/db.php");
	include("includes/util.php");
	include("includes/pag.php");
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('h3').click(function(e) {
			$(this).toggleClass('closed');
			$(this).next('section').toggle();
		});
	});
</script>
<script>
	var modal = document.getElementById('myModal');
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
		modal.style.display = "block";
    		modalImg.src = this.src;
    		modalImg.alt = this.alt;
    		captionText.innerHTML = this.alt;
	}
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() {
    		modal.style.display = "none";
	}
</script>
		
<link rel="shortcut icon" type="image/png" href="<?php echo $favicon;?>"/>
<title><?php echo $title?></title>

<link href="css/style.css" rel="stylesheet">
<style type="text/css">
body
{
	background-color: <?php echo $backgroundcolor ?>;
	background-image:url('<?php echo $backgroundurl ?>');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
}
</style>
</head>
<body>
	<div id="wrap">
	<div class="task2">
		
	<div id="content">

	<div class="cf">
		<div class="summary-box">
		
		<a href="?">
			<img src="<?php echo $logo ?>" border="0" alt="Click!">
		</a> 
		</div>
	</div>

	<div id="header"></div>
<?php
	if($id > 1 &&  $rows > 0 && $players > 0 && $id <= $total)
	{
    		echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
	}
	if($id > 1 && $id!=$total && $players > 0 && $rows > 0 && $id <= $total)
	{
		echo " | ";
	}
	if($id != $total  && $players > 0 && $rows > 0 && $id <= $total)	
	{
    		echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
	}
	if($id > $total)
	{
    		echo "Wrong path buddy!<br>";
		echo "<a href=\"?\">Click to go back</a><br>";
	}
?>
<?php
	if($rows > 0 && $players > 0)
	while($result = mysqli_fetch_array($query))
	{
?>
	<h3 class="closed">Game nr. <?php echo $result["id"];?>:</h3>
	<section style="display:none;">
	<div class="task"> 
		<h2> <font color="lightblue">CT</font> 
			<font color="white">:</font><font color="yellow"> 
			<?php
    				echo $result['score_ct'];
			?>
			</font>
			<font color="white">-</font>
			<font color="red">Ts</font>
			<font color="white">:</font><font color="yellow"> 
			<?php
				echo $result['score_t'];
			?>
			</font>
		</h2>
		<h4>
			<font color="white">
				Vs.
			</font>
		</h4>
		<p class="organisator">Organisator:
			<font color="yellow">
				<?php
					echo $result["organisator"];
				?>
			</font>
		</p>
		<p class="rounds">Rounds:
			<font color="yellow">
				<?php
					echo $result["rounds"];
				?>
			</font>
		</p>
		<p class="time"><br>
			<font color="yellow">
				<?php
					echo $result["date"];
				?>
			</font>
		</p>
		<p class="end">
			Map:
			<font color="yellow">
				<?php
					echo $result["map"];
				?>
			</font>
			Start: 
			<font color="yellow">
				<?php
					echo $result["start"];
				?>
			</font>
			End:
			<font color="yellow">
				<?php
					echo $result["end"];
				?>
			</font>
		</p>
<?php
	
		while($player = mysqli_fetch_array($query_players))
		{ 
?>
		<h2> </h2>
		<h6>
			<?php 
				echo $player["player_ct_0"];
				if(!empty($player["player_ct_0"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_ct_0"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_ct_1"];
				if(!empty($player["player_ct_1"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_ct_1"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_ct_2"];
				if(!empty($player["player_ct_2"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_ct_2"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_ct_3"];
				if(!empty($player["player_ct_3"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_ct_3"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>

			<br>
			<?php 
				echo $player["player_ct_4"];
				if(!empty($player["player_ct_4"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_ct_4"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
		</h6>
		<h5>
			<?php 
				echo $player["player_t_0"];
				if(!empty($player["player_t_0"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_t_0"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_t_1"];
				if(!empty($player["player_t_1"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_t_1"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_t_2"];
				if(!empty($player["player_t_2"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_t_2"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
			<?php 
				echo $player["player_t_3"];
				if(!empty($player["player_t_3"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_t_3"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>

			<br>
			<?php 
				echo $player["player_t_4"];
				if(!empty($player["player_t_4"]))
				{
					echo "<font color='white'>[</font>";
					echo "<font color='yellow'>";
					echo $player["score_t_4"];
					echo "</font>";
					echo "<font color='white'>]</font>";
				}
			?>
			<br>
		</h5>
<?php
			break;
		}
?>
		<h7>
			<font color="white">
				<b>Vs.</b>
			</font>
		</h7>
		<h4>
			<br>
			<font color="white">
				Vs.
			<br>
		</h4>
		</font>

	</div>
	</section>
</body>
<?php
	}
	else echo "No data available!";
?>
<footer>
	<div id="footer">
	<div align="right">
	<a href="http://webxx.azurewebsites.net">
		<img id="myImg" src="<?php echo $forum_img; ?>" alt="TOP!" width="<?php echo $width_img; ?>" height="<?php echo $height_img; ?>">
	</a>
	<a href="http://steamcommunity.com">
		<img id="myImg" src="<?php echo $steam_img; ?>" alt="Steam!" width="<?php echo $width_img; ?>" height="<?php echo $height_img; ?>">
	</a>	
	<a href="http://www.gametracker.com">	
		<img id="myImg" src="<?php echo $gt_img; ?>" alt="Game Tracker" width="<?php echo $width_img; ?>" height="<?php echo $height_img; ?>">
	</a>	
	<div>
	<div id="header">
	</div>
	<div class="cf">
		<div class="summary-box2">
		Games Played: <?php echo $rows ?>
		</div>
	</div>

	</div>
</div>
</div>
</footer>
</html>
