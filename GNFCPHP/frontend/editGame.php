<?php
	$game = $_GET['game'];
	$con = mysql_connect("127.0.0.1","root","");
	mysql_select_db("gnfcinv");
	$query = "SELECT * FROM games WHERE game_name = '" . $game . "'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
?>
<h1>Update information for <?php echo $game; ?></h1>
<form method="post" action="../backend/editGame.php">
	<label>Game Name:<input name="game_name" type="text" value=<?php echo '"' . $game . '"'; ?> /></label>
	<label>Number of Players:<input name="num_players" type="text" value=<?php echo '"' . $row['num_players'] . '"'; ?> /></label>
	<label>Available:<select name="is_avail">
		<option value="1" <?php if($row['is_avail']==1){ echo "selected"; } ?>>Yes</option>
		<option value="0" <?php if($row['is_avail']==0){ echo "selected"; } ?>>No</option>
	</select></label>
	<input name="submit" type="submit">
</form>