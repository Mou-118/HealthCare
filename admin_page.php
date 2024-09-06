
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hospital Management System</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo"><span>H</span>ealth<span>C</span>are<span>-Admin</span>Dashboard</a>
         <nav class="nav">
            <a href="#home">home</a>
           <a href="add_doctors.php">Add doctors</a>
            <a href="doctors.php">doctors</a>
            <a href="add_admins.php">Add admins</a>
            <a href="users.php">Admins & Users</a>
            <a href="viewappointments.php">Appointments</a>
            <a href="viewmessages.php">Messages</a>
            <a href="home.php">Log Out</a>
         </nav>

         

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

   <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h1><span>Stay</span> safe, <span>stay</span> healthy.</h1>
            <h3>Welcome admin</h3>
   
            <a href="home.php" class="link-btn">Back</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+880-171-268-0669</p>
         <p>+241-7689</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Khalishpur,Khulna,Bangladesh</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>open 24 hours</h3>
         <p>00:00 to 24.00</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>healthcare@gmail.com</p>
         <p>healthcareadmin@gmail.com</p>
      </div>

   </div>

  
</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>