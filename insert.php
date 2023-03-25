<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $username = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "insert into tf(username, email, mobile)
     VALUES ('$username','$email','$mobile')";
     if (mysqli_query($conn, $sql)) { echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>