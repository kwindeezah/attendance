<?php 

include('config.php');

if(isset($_POST['sign-up'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT id FROM user_details WHERE email = '$email'";
    $sql = mysqli_query($conn, $query);
    if(mysqli_num_rows($sql)){ 
        echo "<script> alert('User Already Exist!') </script>";
        header("Location: index.php");
        die();
} else { 
 $query = "INSERT INTO user_details (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
$insertQuery = mysqli_query($conn, $query);
if($insertQuery){
   header("Location: log-in-form.php");
}
}
}
?>