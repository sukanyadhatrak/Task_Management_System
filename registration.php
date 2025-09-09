<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Page</title>
  	<link rel="stylesheet" href="css/style1.css">

</head>
<body>
  <div class="container">
    <h2>Create Account</h2>
    <form action="insert_db.php" method="post">
      <div class="input-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="full_name" name="full_name" placeholder="Enter your name" required />
      </div>
      <div class="input-group">
        <label for="email">Username</label>
        <input type="username" id="username" name="username" placeholder="Enter your Username" required />
      </div>
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required />
      </div>
      <div class="input-group">
        <label for="confirm password">Confirm Password</label>
        <input type="password" id="confirm password" name="confirm password" placeholder="Confirm your password" required />
      </div>
      <button type="submit" name="submit" class="btn">Register</button>
      <div class="login-link">
        Already have an account? <a href="#">Login</a>
      </div>
    </form>
  </div>
</body>
</html>