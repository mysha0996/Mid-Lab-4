<?php
	
	if(isset($_POST['Gender'])){
		echo $_POST['Gender'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		<input type="radio" name="Gender" value = "Male"  > Male
		<input type="radio" name="Gender" value = "Female" > Female
		<input type="radio" name="Gender" value = "Other" > Other
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>