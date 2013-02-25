<?php 
	$game = $_GET['game'];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("gnfcinv");
	$query = "SELECT * FROM games WHERE game_name = '" . $game . "'";
	$result = mysql_query($query, $con);
	$row = mysql_fetch_array($result);
	echo "<h1>" . $game . "</h1>";
	echo "<p>Number of Players: " . $row['num_players'] . "</p>";
	echo "<p>Available: ";
	if($row['is_avail'] == 1)
	{
		echo "Yes</p>";
	}
	else
	{
		echo "No</p>";
	}
?>
<a href="editGame.php?game=<?php echo $game; ?>">Edit</a>