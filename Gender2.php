<?php error_reporting(0)?> 
<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		<input type="radio" name="Gender" value = "Male" <?php if($_POST['Gender']== "Male") {echo "checked";}?> > Male
		<input type="radio" name="Gender" value = "Female" <?php if($_POST['Gender']== "Female") {echo "checked";}?>> Female
		<input type="radio" name="Gender" value = "Other" <?php if($_POST['Gender']== "other") {echo "checked";}?>> Other
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>