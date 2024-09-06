<?php

$conn = mysqli_connect('localhost','root','','message_db') or die('connection failed');

if(isset($_POST['submit'])){
   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   
   

   $insert = mysqli_query($conn, "INSERT INTO `message_form`(name, email) VALUES('$name','$email')") or die('query failed');

   if($insert){
      $message[] = 'message sent successfully!';
   }else{
      $message[] = 'message sent failed';
   }

}

?>


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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo"><span>H</span>ealth<span>C</span>are.</a>
         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
            <a href="register_form.php">Register</a>
            <a href="login_form.php">Log In</a>
            <a href="logout_form.php">Log Out</a>
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
            <h3>Caring for you.</h3>
   
            <a href="login_form.php" class="link-btn">Log in to make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
         <img src="images/about-img.png" width="100%" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3 id="show">True Healthcare For Your Family</h3>
            <p id ="hide">Our Emergency departments (EDs) are critical to the management of acute illness and injury, and the provision of health system access. However, EDs have become increasingly congested due to increased demand, increased complexity of care and blocked access to ongoing care (access block).</p>
            <p>Healthcare provides services to those who can pay for them and to those who are poor and can't afford the expenses with appropriate care and equal opportunities.We allow people rely on our services and significantly improve their life quality.</p>
            <a href="login_form.php" class="link-btn">log in to make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

   <div class="box" >
      <img src="images/img1.jpg" alt="">
         <h3>Cardiologists</h3>
         <p>Cardiologists focus on the cardiovascular system, which includes the heart and blood vessels. They treat many cardiovascular conditions,such as,high blood pressure,high cholesterol,heart attack and stroke,heart rhythm problems and congestive heart failure</p>
      </div>

      <div class="box">
         <img src="images/img2.jpg" alt="">
         <h3>Allergists</h3>
         <p>Our allergist or immunologist focuses on preventing and treating allergic diseases and conditions. These usually include various types of allergies and asthma.</p>
      </div>

      <div class="box">
         <img src="images/img3.jpg" alt="">
         <h3>Endocrinologists</h3>
         <p>Endocrinologists treat disorders and conditions that affect the endocrine system. This system involves various glands that make and release hormones in the body.</p>
      </div>

      <div class="box">
         <img src="images/img4.jpg" alt="">
         <h3>Gastroenterologists</h3>
         <p>Gastroenterologists focus on the digestive system. This includes the esophagus, pancreas, stomach, liver, small intestine, colon, and gallbladder.</p>
      </div>

      <div class="box">
         <img src="images/img5.jpg" alt="">
         <h3>Nephrologist</h3>
         <p>Our nephrologist focuses on kidney care and conditions that affect the kidneys.Nephrologists also have education in kidney transplants and dialysis.They also require training in internal medicine or pediatrics.</p>
      </div>

      <div class="box">
         <img src="images/img6.jpg" alt="">
         <h3>Pulmonologists</h3>
         <p>Pulmonologists focus on the organs involved with breathing. These include the lungs and heart.Pulmonologists may work in hospitals to provide ventilation or life support. They also see people in the office to treat breathing disorders, lung conditions, and allergies.Pulmonologists also require training in internal medicine or pediatrics.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process" >

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Congenital Heart Disease</h3>
         <p>Heart disease is any disorder that affects the heart's ability to function normally. The most common cause of heart disease is narrowing or blockage of the coronary arteries, which supply blood to the heart itself. This happens slowly over time.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Pediatric dentistry is the branch of dentistry dealing with children from birth through adolescence. The specialty of pediatric dentistry is recognized by the American Dental Association, Royal College of Dentists of Canada, and Royal Australasian College of Dental Surgeons.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Red Eye</h3>
         <p>Eye Redness is where there is a lack of sufficient moisture in the eye and large dilated blood vessels on the surface of the eye.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This place is trustworthy for people.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arham Ahmed</h3>
         <span>jan 5, 2019</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Highly recommended</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jannatul Ferdous Esha</h3>
         <span>jan 7, 2020</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>You won't be dissatisfied<</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Saifan-al-areez</h3>
         <span>jan 10, 2022</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Tell us something</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="Enter your name" class="box" required>
      <span>your message :</span>
      <input type="text" name="email" placeholder="Enter your message" class="box" required>
      <
      <input type="submit" value="send message" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

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