<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Reset Password</h1>
	<form action="reset_password.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">New Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm New Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<input type="submit" value="Reset Password">
	</form>
</body>
</html>