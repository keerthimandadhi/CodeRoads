<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
 
      .home{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  align-items: center;
}

.home .content{
  flex:1 1 40rem;
}

.home .image{
  flex:1 1 40rem;
}

.home .image img{
  width:100%;
}

.home .content h3,h1{
 
  background:var(--gradient);
  -webkit-background-clip: text;
  background-clip: text;
  font-size: 4rem;
}

.home .content p{
  padding:.5rem 0;
  font-size: 1.7rem;
  color:#666;
}

.dark{
   color: white;
}



.logo1:hover {
  color: #fff;
  text-shadow: 0 0 5px purple,
              0 0 25px purple,
              0 0 50px purple,
              0 0 100px purple;
}


   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->
<section class="home" style="margin-bottom: 69px;margin-top: 50px;">

   <div class="content">
      <h1 style="margin-left: 144px;margin-bottom: 10px;"> <a href="#" class="logo1" >Code<span style="color: #e79e78;">Roads</span></a></h1>
       <h3 style="margin-left: 63px;font-size:xx-large;"> 
   <pre>A better way to prepare 
   for coding interviews</pre></h3>
       <a href="register.php" class="btn" style="width:32%;margin-left: 150px;" >get started</a>
   </div>

   <div class="image" >
       <img src="images\home.png" alt="">
   </div>

</section>

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">view likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">view comments</a>
         <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">view bookmark</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         
         <div class="thumb">
            <img src="http://www.mycslab.in/wp-content/uploads/2020/01/1214005f6e5f8cf0b48bc88f70dc3e7a-rimg-w2560-h1440-gmir-1024x576.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete DSA tutorial</h3>
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
         <h3 class="title">complete javascript tutorial</h3>
         <a href="jsplaylist.php" class="inline-btn">view playlist</a>
      </div>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all courses</a>
   </div>

</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>