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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         
         <div class="thumb">
            <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
         </div>
         <h3 class="title">Learn DSA here</h3>
         <a href="dsaplaylist.php" class="inline-btn">view playlist</a>
      </div>


      
      <div class="box">
        
         <div class="thumb">
            <img src="https://cdn.vox-cdn.com/thumbor/_AobZZDt_RVStktVR7mUZpBkovc=/0x0:640x427/1200x800/filters:focal(0x0:640x427)/cdn.vox-cdn.com/assets/1087137/java_logo_640.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Java tutorial</h3>
         <a href="javaplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         
         <div class="thumb">
            <img src="https://ictslab.com/wp-content/uploads/2019/03/d1326ca6cca8038cd115a061b4e2b3bc.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Python tutorial</h3>
         <a href="pythonplaylist.php" class="inline-btn">view playlist</a>
      </div>
      <div class="box">
         
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="htmlplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="cssplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
        
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="jsplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
        
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Jquery tutorial</h3>
         <a href="jqueryplaylist.php" class="inline-btn">view playlist</a>
      </div>


      

      <div class="box">
      
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="bootstrapplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         
         <div class="thumb">
            <img src="images/thumb-7.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete PHP tutorial</h3>
         <a href="phpplaylist.php" class="inline-btn">view playlist</a>
      </div>
      

      <div class="box">
         
         <div class="thumb">
            <img src="images/thumb-8.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete MySQL tutorial</h3>
         <a href="mysqlplaylist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
        
         <div class="thumb">
            <img src="images/thumb-9.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete React tutorial</h3>
         <a href="reactplaylist.php" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>

<!-- courses section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>