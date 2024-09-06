<?php

$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(isset($_GET['submit'])){

//   $name = mysqli_real_escape_string($conn, $_GET['name']);
   $email = mysqli_real_escape_string($conn, $_GET['email']);
   $pass = md5($_GET['password']);
  // $cpass = md5($_GET['cpassword']);
 //  $user_type = $_GET['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];

         setcookie("email",$row['email'], time() + 86400);

         setcookie("password", $row['password'], time() + 86400);
         
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];

         setcookie("email",$row['email'], time() + 86400);

         setcookie("password", $row['password'], time() + 86400);


         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styling.css">

</head>
<body>
   
<div class="form-container">

   <form action="login_form.php" method="GET">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email" value="<?php echo $_COOKIE['email'];?>">
      <input type="password" name="password" required placeholder="Enter your password" value="<?php echo $_COOKIE['password'];?>">
      <input type="submit" name="submit" value="Login now" class="form-btn">
      <input type="submit" name="submit" value="Back" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>

</div>

</body>
</html>