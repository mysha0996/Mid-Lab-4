<?php error_reporting(0)?> 
<form action="#" method="POST">
	<fieldset>
		<legend>Blood Group</legend>
		<input type="checkbox" name="Degree" value = "SSC" <?php if($_POST['Degree']== "SSC") {echo "checked";}?> > SSC
		<input type="checkbox" name="Degree" value = "HSC" <?php if($_POST['Degree']== "HSC") {echo "checked";}?>> HSC
		<input type="checkbox" name="Degree" value = "Bsc" <?php if($_POST['Degree']== "Bsc") {echo "checked";}?>> Bsc
		<input type="checkbox" name="Degree" value = "Msc" <?php if($_POST['Degree']== "Msc") {echo "checked";}?>> Msc
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>