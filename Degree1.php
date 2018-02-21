<?php
	
	if(isset($_POST['Degree'])){
		echo $_POST['Degree'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Degree</legend>
		<input type="checkbox" name="Degree" value = "SSC"  > SSC
		<input type="checkbox" name="Degree" value = "HSC" > HSC
		<input type="checkbox" name="Degree" value = "Bsc" > Bsc
		<input type="checkbox" name="Degree" value = "Msc" > Msc
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>