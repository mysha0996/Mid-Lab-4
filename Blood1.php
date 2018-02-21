<?php
	
	if(isset($_POST['Blood'])){
		echo $_POST['Blood'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Blood Group</legend>
		<select>
			<option value="null"></option>
			<option value="B+">B+</option>
			<option value="O-">O-</option>
		</select>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>