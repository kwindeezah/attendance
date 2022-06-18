<?php 

include('config.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Password Reset</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php 

if(isset($_POST['email']) && isset($_POST['password'])){
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT id FROM user_details WHERE `email` = '$email'";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        echo "<script> alert('User does not exist!') </script>";
    if($rows==1){
        mysqli_query($conn, "UPDATE user_details SET `password`='$password' WHERE `email`='$email'");
        header('Location: log-in-form.php');
   }
}
 ?> 

<div class="container">
<h2>Reset Password</h2>
<form action="" method="post" name="reset">
<div class="form-group">
              <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Email" required><br>
          </div>
          <div class="form-group">
                <label for="password">Password</label><br>
          <input type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
          <button type="submit" name="reset">Save</button>
          </div>
    </form>
    </div>
</body>
</html>