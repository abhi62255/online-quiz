<?php
	if(isset($_POST["submit"]))
	{
		if($_FILES["resume"]["type"]=="text/plain")
		{
			$name=$_POST["name"];
			$age=$_POST["age"];
			$email=$_POST["email"];
			$contact=$_POST["contact"];
			$registration_number=rand(1000000,100000000);
		}
	}

?>
<html>
<head>
<title>resume</title>
</head>
<body>
	<pre>
	<table border="0" cellpadding="5">
		<h2>Job Profile Registration</h2>
		<tr><th>Name</th><td><?php echo $name; ?></td></tr>
		<tr><th>Age</th><td><?php echo $age; ?></td></tr>    
		<tr><th>Email</th><td><?php echo $email; ?></td></tr>
		<tr><th>Contact</th><td><?php echo $contact; ?></td></tr>
		<tr><th>Registration Number</th><td><?php echo $registration_number; ?></td></tr>
		<tr><td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td></tr></table>
		
	</form>
	</pre>

</body>
</html>
