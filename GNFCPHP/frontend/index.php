<?php
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("gnfcinv");
	$query = "SELECT * FROM games";
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result))
	{
		echo "<h2><a href='gameDetails.php?game=" . $row['game_name'] . "'>" . $row['game_name'] . "</a></h2>";
	}
?>
<a href="addGame.php">Add a Game</a>