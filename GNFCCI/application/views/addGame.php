<h2>Add a Game</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('GNFC/add') ?>

	<label for="game_name">Name:</label> 
	<input type="input" name="game_name" />

	<label for="num_players">Number of Players: </label>
	<input name="num_players" />
	
	<input type="submit" name="submit" value="Add Game" /> 

</form>