<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="post" action="formhandler.php">
		Name:<input type="text" name="name"><br>
		Email:<input type="email" name="email"><br>
		Gender:<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other
			<br>
			<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>