<?php
?>

<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Log In</h2>
    <form action="log-in.php" method="post">
          <div class="form-group">
              <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Email" required><br>
          </div>
          <div class="form-group">
                <label for="password">Password</label><br>
          <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
          <button type="submit" name="log-in">Log In</button>
          </div>
          <div class="form group">
          <p>Forgotten your password?</p>
          <a href="reset-password.php">Reset Password</a>
          </div>
    </form>
    </div>
</body>
</html>