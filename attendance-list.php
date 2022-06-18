<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance List</title>
    <link rel="stylesheet" href="list-style.css">
</head>
<body>
<h1 class="">Attendance List</h1>
    <?php
        $result = mysqli_query($conn, "SELECT * FROM attendance ORDER BY id");?>
<table>
	<thead>
		<tr>
		    <th>Student Name</th>
			<th>Student Id</th>
			<th>Date/Time</th>
			<!-- <th colspan="2">Action</th> -->
		</tr>
	</thead>
        <?php while($studentData = mysqli_fetch_array($result)){ 
            $fullname = $studentData['full_name'];
            $studentId = $studentData['student_id'];
            $dateTime = $studentData['reg_time'];?>
    <tr>
            <td><?php echo $fullname;?></td>
            <td><?php echo $studentId;?></td>
            <td><?php echo $dateTime;?></td>
            <!-- <td><a href="edit.php?id=<?php 
            // echo $guestData['id'] ?>
            " class="edit-btn">Edit</a></td>
            <td><a href="delete.php?id=<?php 
            // echo $guestData['id'] ?>
            " onclick="return confirm('Are you sure you want to delete this?')" class="del-btn">Delete</a></td> -->
   </tr>
        <?php }?>
</table>
</body>
</html>