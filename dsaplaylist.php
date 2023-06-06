<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <?php include 'components/user_header.php'; ?>

<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
   
         <div class="details">
            <h3>complete DSA tutorial</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
            <a href="teacher_profile.html" class="inline-btn">view profile</a>
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="c1 watch-video1.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 01)</h3>
      </a>

      <a class="box" href="c1 watch-video2.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 02)</h3>
      </a>

      <a class="box" href="c1 watch-video3.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 03)</h3>
      </a>

      <a class="box" href="c1 watch-video4.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 04)</h3>
      </a>

      <a class="box" href="c1 watch-video5.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 05)</h3>
      </a>

      <a class="box" href="c1 watch-video6.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 06)</h3>
      </a>

      <a class="box" href="c1 watch-video7.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 07)</h3>
      </a>

      <a class="box" href="c1 watch-video8.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 08)</h3>
      </a>

      <a class="box" href="c1 watch-video9.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 09)</h3>
      </a>

      <a class="box" href="c1 watch-video10.php">
         <i class="fas fa-play"></i>
         <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         <h3>complete DSA tutorial (part 10)</h3>
      </a>

      

   </div>

</section>













<?php include 'components/footer.php'; ?> 

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>