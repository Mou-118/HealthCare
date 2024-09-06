<?php

$conn = mysqli_connect('localhost','root','','doctor_db');

if(isset($_POST['submit'])){

   $id = $_POST['id'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email =mysqli_real_escape_string($conn, $_POST['email']); 
   $number = $_POST['number'];
   $user_type = $_POST['user_type'];
   $insert = mysqli_query($conn, "INSERT INTO `doctor_form`(id,name, email, number, user_type) VALUES('$id','$name','$email','$number','$user_type')") or die('query failed');

         header('location:admin_page.php');
      }

;


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add doctors</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styling.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>add doctors</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="id" required placeholder="Enter doctor's id">
      <input type="text" name="name" required placeholder="Enter doctor's name">
      <input type="email" name="email" required placeholder="Enter doctor's email">
      <input type="text" name="number" required placeholder="Enter doctor's number">
      <select name="user_type">
          <option value="Cardiologist">Cardiologist</option>
         <option value="Allergist">Allergist</option>
         <option value="Endocrinologist">Endocrinologist</option>
         <option value="Gastroenterologist">Gastroenterologist</option>
         <option value="Nephrologist">Nephrologist</option>
         <option value="Pulmonologist">Pulmonologist</option>
      </select>
      <input type="submit" name="submit" value="Add" class="form-btn">
      <input type="submit" name="submit" value="Back" class="form-btn">
   </form>

</div>

</body>
</html>