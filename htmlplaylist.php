<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   </head>
<body>

<?php include 'components/user_header.php'; ?>
<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="https://youtu.be/VznoKyh6AXs">
         <i class="fas fa-play"></i>
         <img src="images/post-1-1.png" alt="">
         <h3>complete HTML tutorial (part 01)</h3>
      </a>

      <a class="box" href="https://youtu.be/VznoKyh6AXs">
         <i class="fas fa-play"></i>
         <img src="images/post-1-2.png" alt="">
         <h3>complete HTML tutorial (part 02)</h3>
      </a>

      <a class="box" href="https://youtu.be/VznoKyh6AXs">
         <i class="fas fa-play"></i>
         <img src="images/post-1-3.png" alt="">
         <h3>complete HTML tutorial (part 03)</h3>
      </a>

         <i class="fas fa-play"></i>
         <img src="images/post-1-4.png" alt="">
         <h3>complete HTML tutorial (part 04)</h3>
      </a>

      <a class="box" href="https://youtu.be/VznoKyh6AXs">
         <i class="fas fa-play"></i>
         <img src="images/post-1-5.png" alt="">
         <h3>complete HTML tutorial (part 05)</h3>
      </a>

      <a class="box" href="https://youtu.be/VznoKyh6AXs">
         <i class="fas fa-play"></i>
         <img src="images/post-1-6.png" alt="">
         <h3>complete HTML tutorial (part 06)</h3>
      </a>

   </div>

</section>