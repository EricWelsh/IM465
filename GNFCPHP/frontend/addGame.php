<h1>Add a Game</h1>
<form method="post" action="../backend/addGame.php">
	<label>Game Name:<input name="game_name" type="text" /></label>
	<label>Number of Players:<input name="num_players" type="text" /></label>
	<label>Available:<select name="is_avail">
		<option value="1">Yes</option>
		<option value="0">No</option>
	</select></label>
	<input name="submit" type="submit">
</form>