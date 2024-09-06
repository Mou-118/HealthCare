<?php

$conn = mysqli_connect('localhost','root','','message_db') ;

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM `message_form` WHERE `id`='$id'");
}
    $select = "SELECT * FROM `message_form`";
    $query=mysqli_query($conn,$select);
    ?>
    


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css" />
    
</head>
<body>
<div class="table">
<div class="row min-vh-100 align-items-center">
<div class="content text-center text-md-left">
<div class="table_header">
<p><h1>ALL THE MESSAGES</h1></p>
<div class="table_section ">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>

    </div>
    <?php
    $num=mysqli_num_rows($query);
    if ($num > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($query)) {
          echo"
          <tr>
          <td>".$row['name']."</td>
          <td>".$row['email']."</td> 
          <td>
               <a href='viewmessages.php?id=".$row['id']."'' class='btn'>Delete </a>
          </td>
          
        </tr>	 ";
        }
        echo"</table>";
      } 
      else {
        echo "0 results";
      }
?>
                    
                
    </div>
</body>

    <a href="admin_page.php" class="btn">Back</a>

<a href="logout_form.php" class="btn">Log Out</a>
    

    
</html>