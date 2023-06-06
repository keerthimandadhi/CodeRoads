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
   <title>watch</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>.watch-video .video-container{
   background-color: var(--white);
   border-radius: .5rem;
   padding: 2rem;
}

.watch-video .video-container .video{
   position: relative;
   margin-bottom: 1.5rem;
}

.watch-video .video-container .video video{
   border-radius: .5rem;
   width: 100%;
   object-fit: contain;
   background-color: #000;
}

.watch-video .video-container .title{
   font-size: 2rem;
   color: var(--black);
}

.watch-video .video-container .info{
   display: flex;
   margin-top: 1.5rem;
   margin-bottom: 2rem;
   border-bottom: var(--border);
   padding-bottom: 1.5rem;
   gap: 2.5rem;
   align-items: center;
}

.watch-video .video-container .info p{
   font-size: 1.6rem;
}

.watch-video .video-container .info p span{
   color: var(--light-color);
}

.watch-video .video-container .info i{
   margin-right: 1rem;
   color: var(--main-color);
}

.watch-video .video-container .tutor{
   display: flex;
   align-items: center;
   gap: 2rem;
   margin-bottom: 1rem;
}

.watch-video .video-container .tutor img{
   border-radius: 50%;
   height: 5rem;
   width: 5rem;
   object-fit: cover;
}

.watch-video .video-container .tutor h3{
   font-size: 2rem;
   color: var(--black);
   margin-bottom: .2rem;
}

.watch-video .video-container .tutor span{
   font-size: 1.5rem;
   color: var(--light-color);
}

.watch-video .video-container .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
}

.watch-video .video-container .flex button{
   border-radius: .5rem;
   padding: 1rem 1.5rem;
   font-size: 1.8rem;
   cursor: pointer;
   background-color: var(--light-bg);
}

.watch-video .video-container .flex button i{
   margin-right: 1rem;
   color: var(--black);
}

.watch-video .video-container .flex button span{
   color: var(--light-color);
}

.watch-video .video-container .flex button:hover{
   background-color: var(--black);
}

.watch-video .video-container .flex button:hover i{
   color: var(--white);
}

.watch-video .video-container .flex button:hover span{
   color: var(--white);
}

.watch-video .video-container .description{
   line-height: 1.5;
   font-size: 1.7rem;
   color: var(--light-color);
   margin-top: 2rem;
}</style>

</head>
<body>

   <?php include 'components/user_header.php'; ?>

<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <iframe width="1000" height="500" src="https://www.youtube.com/embed/LbcJw-iMIoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
     

   </div>

</section>















<?php include 'components/footer.php'; ?>  

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>