

<form action="#" method="POST">
	<fieldset>
		<legend>Date Of Birth</legend>
		<input type="date" name="DOB" value="<?php if(isset($_POST['DOB'])){ echo $_POST['DOB']; }?>" ><br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>