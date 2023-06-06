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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>CodeRoads provides user-friendly access to a wide range of learning resources,  a comprehensive and engaging coding learning experience with clear roadmaps, interactive content, and a supportive community.</p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
      <p>CodeRoads has been an invaluable resource in my coding journey. The tutorials are clear and easy to follow, and the code examples provided have been instrumental in helping me grasp complex concepts. The interactive exercises and coding challenges have significantly improved my problem-solving skills. The supportive community and helpful discussions have made learning coding a collaborative and enjoyable experience. I highly recommend CodeRoads to anyone looking to enhance their coding skills." - John, Computer Science Student</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
            <h3>John, Computer Science Student</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>As a beginner in coding, I was overwhelmed with the vast amount of information out there. CodeRoads provided me with a structured learning path and clear roadmaps that helped me navigate through different programming languages. The cheat sheets were a lifesaver, providing quick reference guides for syntax and concepts. The website's user-friendly interface and responsive design made it easy to access learning materials on any device.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
            <h3>Sarah, Coding Enthusiast</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>CodeRoads has been an indispensable resource in my coding journey. The comprehensive tutorials provided a solid foundation, and the code examples allowed me to see real-world applications of the concepts. The interactive coding exercises challenged me to apply my knowledge and strengthened my problem-solving skills. The progress tracking feature helped me monitor my learning journey and stay motivated. The responsive and user-friendly design of the website made learning coding a seamless and enjoyable experience</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
            <h3>Michael, Aspiring Developer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>CodeRoads is a hidden gem in the coding education landscape. The tutorials are well-explained, breaking down complex concepts into manageable chunks. The practical code examples helped me understand how to apply the concepts in real-world scenarios. The integration of a progress bar and achievement badges kept me motivated throughout my learning journey. The website's sleek design and intuitive navigation made it easy to find the resources I needed. CodeRoads has been instrumental in my coding success</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
            <h3>Emily, Professional Web Developer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>I can't recommend CodeRoads enough for anyone interested in learning coding. The community support is outstanding, with active forums and chat platforms where I can ask questions and get help from experienced programmers. The coding challenges provided a great opportunity to practice my skills and improve my efficiency. The regular updates and new content ensured that I always had fresh material to learn from. CodeRoads has been my go-to resource for expanding my coding knowledge and advancing my career</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
            <h3>David, Coding Enthusiast</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>CodeRoads has transformed the way I approach coding. The clear and organized learning paths helped me progress systematically, building my knowledge step by step. The cheat sheets were incredibly handy references when I needed quick reminders on syntax or concepts. The inclusion of multiple programming languages like JavaScript, Python, CSS, and Java allowed me to explore different areas of coding. The engaging and interactive content made learning enjoyable, and the ability to track my progress motivated me to keep pushing forward.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
            <h3>Olivia, Computer Science Student</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>