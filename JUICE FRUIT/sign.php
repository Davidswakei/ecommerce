<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="sign.css">
</head>
<body>
    <div class="form-container">
        <h1>Sign up</h1>
        <form action="verify.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" name="name" required><br><br>
          <label for="email">Email:</label>
          <input type="email" name="email" required><br><br>
          <label for="password">Password:</label>
          <input type="password" name="password" required><br><br>
          <label for="password">Confirm:</label>
          <input type="password" name="Confirm password" required><br><br>
          <button type="submit">Sign up</button>
        </form>
      </div>
</body>
</html>