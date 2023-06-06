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
   <title>Roadmaps</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
    section{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        
    }
    a{
        text-decoration: none;
        font-size:250% ;
        color:black;
        
    }
    .dark{
   color: white;
}
   </style>
</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- roadmaps section starts  -->
<section>
<div style="margin-bottom: 20px; text-align: center;">
        <a href="pyroad.php"><img src="images/pythonthumb.webp" alt="" width="370px" height="300px" style="border: 1px solid black;margin-bottom:0px"></a>
        <a href="pyroad.php" class="inline-btn" style="margin-top:0px">Python Roadmap</a>
        <a href="cheatsheet.php" class="inline-btn">cheatsheet</a>
    </div>
   
    <div style="margin-bottom: 20px;text-align: center;">
        <a href="javaroadmap.php"><img src="images/javathumb.jpg"alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="javaroadmap.php" class="inline-btn">Java Roadmap</a>
        <a href="javacheatsheet.php" class="inline-btn">javacheatsheet</a>
    </div>
    <div style="margin-bottom: 20px;text-align: center;">
        <a href="dsaroadmap.php"><img src="images/dsathumb.png" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="dsaroadmap.php" class="inline-btn">DSA Roadmap</a>

        
    </div>
    <div style="margin-bottom: 20px;text-align: center;">
        <a href="htmlroadmap.php"><img src="images/thumb-1.png" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="htmlroadmap.php"class="inline-btn">HTML Roadmap</a>
        <a href="dsaroadmap.php" class="inline-btn">cheatsheet</a>
    </div>
    <div style="margin-bottom: 20px;text-align: center;">
        <a href="pyroad.html"><img src="images/thumb-2.png" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="#" class="inline-btn">CSS Roadmap</a>
        <a href="dsaroadmap.php" class="inline-btn">cheatsheet</a>
    </div>
    <div style="margin-bottom: 20px;text-align: center;">
        <a href="pyroad.html"><img src="images/thumb-3.png" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="#" class="inline-btn">javascript Roadmap</a>
        <a href="dsaroadmap.php" class="inline-btn">cheatsheet</a>
    </div>
    <!-- <div style="margin-bottom: 20px;">
        <a href="pyroad.html"><img src="" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="pyroad.html">React Roadmap</a>
    </div>
    <div style="margin-bottom: 20px;">
        <a href="pyroad.html"><img src="" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="pyroad.html">Boostrap Roadmap</a>
    </div>
    <div style="margin-bottom: 20px;">
        <a href="pyroad.html"><img src="" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="pyroad.html">JQuery Roadmap</a>
    </div>
    <div style="margin-bottom: 20px;">
        <a href="pyroad.html"><img src="" alt="" width="370px" height="300px" style="border: 1px solid black;"></a>
        <a href="pyroad.html">MySQL Roadmap</a>
    </div> -->
   </section>


<!-- roadmaps section ends -->






























<?php include 'components/footer.php'; ?>    

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>