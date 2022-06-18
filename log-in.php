<?php  

include('config.php');


if(isset($_POST['email']) && isset($_POST['password'])){
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = "SELECT first_name FROM user_details WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if($count == 1){
        
        session_start(); 
       $_SESSION['name'] = $row ['first_name'];
       header('Location: attendance.php');
    } else {
        echo "<script> alert('Wrong log in details!') </script>";
        header('Location: log-in-form.php');
    }

}
