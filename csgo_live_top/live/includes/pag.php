<?php 
	$start =0 ;
	$limit = 5;

	if(isset($_GET['id']))
	{
    		$id = $_GET['id'];
    		$start = ($id-1)*$limit;
	}
	else
    		$id = 1;

	$query = mysqli_query($db,"select * from $table order by $db_id desc LIMIT $start, $limit");
	$query_players = mysqli_query($db,"select * from $table_players");

	$rows = mysqli_num_rows(mysqli_query($db,"select * from $table"));
	$players = mysqli_num_rows(mysqli_query($db,"select * from $table_players"));
	$total = ceil($rows/$limit);
?>
