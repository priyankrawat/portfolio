<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["username"]))  
 {  
      $username = mysqli_real_escape_string($connect, $_POST["username"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);
      $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
      $message = mysqli_real_escape_string($connect, $_POST["message"]);  

      $sql = "INSERT INTO tbl_form(username, email, phone, message) VALUES ('".$username."', '".$email."', '".$phone."', '".$message."')";  
      if(mysqli_query($connect, $sql))  
      {  
           echo "Message Sent";  
      }  
 }  
 ?>  