<?php
?>

<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
    <form action="sign-up.php" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label><br>
          <input type="text" name="firstname" placeholder="First Name" required><br>
          </div>
          <div class="form-control">
              <label for="lastname">Last Name</label><br>
           <input type="text" name="lastname" placeholder="Last Name" required><br>
          </div>
          <div class="form-group">
              <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Email" required><br>
          </div>
          <div class="form-group">
              <label for="password">Password</label><br>
          <input type="password" placeholder="Password" name="password" required>
         </div>
          <div class="form-group">
          <button type="submit" name="sign-up">Sign Up</button>
          </div>
          <div class="form group">
          <p>Already have an account?</p>
          <a href="log-in-form.php">Log In</a>
          </div>
    </form>
    </div>
</body>
</html>