<?php 
include('config.php');

?>
<html">
   
   <head>
      <title>Attendance</title>
      <link rel="stylesheet" href="attend-style.css">
   </head>
   
   <body>

   <?php 

if(isset($_POST['register'])){
    $fullname = $_POST['full_name'];
    $studentId = $_POST['student_id'];
    $query = "SELECT id FROM attendance WHERE student_id = '$studentId'";
    $sql = mysqli_query($conn, $query);
    if(mysqli_num_rows($sql)){ 
        echo "<script> alert('User Already Signed!') </script>";
} else { 
 $query = "INSERT INTO attendance (full_name, student_id) VALUES ('$fullname', '$studentId')";
$insertQuery = mysqli_query($conn, $query);
if($insertQuery){
   echo "<script> alert('User Signed In Successfully!') </script>";
}
}
}

?>

      <h2>STUDENTS ATTENDANCE</h2>
      <div class="container">
         <h3>
            <?php 
            session_start();
            if(isset($_SESSION['name']))
            { echo $_SESSION['name'];} 
            ?> 
        You can now Sign the Attendance 
      </h3>
      
      <form action="" method="post">
         
         <div class="form-group">
            <label for="fullname">Fullname</label><br>
            <input type="text" name="full_name" placeholder="Fullname" required><br>
         </div>
         <div class="form-group">
            <label for="student_id">Student Id</label><br>
            <input type="text" placeholder="ID" name="student_id" required>
         </div>
         <div class="form-group">
         <button type="submit" name="register">Sign Attendance</button>
         </div>
         <div class="form-group">
         <a href="log-out.php">Log Out</a>
         </div>
         <div class="form-group">
         <a href="attendance-list.php" name="list">See Attendance List</a>
         </div>
     </form>
    
</div>
   
</body>
   
</html>