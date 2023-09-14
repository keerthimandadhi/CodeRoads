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
    <style>
       .roads div{
        text-align: center;
        border: 2px solid;
        margin: auto;
        width: 30%;
        padding: 10px;
        background-color: #8e44ad;
        
        
      }
      .roads div:hover{
        background-color: purple; 
        }a{
          color:white;
          font-size:250%;
      }
      pre{
          margin-left: 48%;
      }
      .dark{
          color:aliceblue;
      }
      

        #overlayContainer1 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 9999;
        }

        #iframeContainer1 {
            margin-left: 32.5%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 35%;
            height: 100%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        #iframe1 {
            width: 100%;
            height: 100%;
            border: none;
        }

        .close-button1 {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 999;
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php include 'components/user_header.php'; ?>

  
    <div id="overlayContainer1">
        <div id="iframeContainer1">
            <button class="close-button1" onclick="closeOverlay()">X</button>
            <iframe id="iframe1" src=""></iframe>
        </div>
    </div>
    <section class="roads">
        <h1 style="color: purple;text-align: center;font-size: 300%;margin-bottom: 40px;">A SIMPLE BEGINNER FRIENDLY ROADMAP TO LEARN PYTHON </h1>
        <div onclick="openOverlay('roadmaps/pythonintro.html')">
            <a>Introduction to Python</a>
        </div>
        <pre>
            |
            |
            |
            |
            |
            |</pre>
        <div onclick="openOverlay('roadmaps/pythondatatypes.html')">
            <a>Variables, Data Types, and Operators</a>
        </div>
        <pre>
            |
            |
            |
            |
            |
            |</pre>
        <div onclick="openOverlay('roadmaps/pythoncontrolflow.html')">
            <a>Control Flow</a>
        </div>
        <pre>
            |
            |
            |
            |
            |
            |</pre>
        <div onclick="openOverlay('roadmaps/pythonfunctions.html')">
            <a>Functions and Modules</a>
        </div>
        <pre>
            |
            |
            |
            |
            |
            |</pre>
        <div onclick="openOverlay('roadmaps/pythonio.html')">
            <a>Input/Output (I/O) Operations</a>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>  

    <script>
        function openOverlay(url) {
            var overlayContainer = document.getElementById('overlayContainer1');
            var iframe = document.getElementById('iframe1');
            iframe.src = url;
            overlayContainer.style.display = 'block';
        }

        function closeOverlay() {
            var overlayContainer = document.getElementById('overlayContainer1');
            var iframe = document.getElementById('iframe1');
            iframe.src = '';
            overlayContainer.style.display = 'none';
        }
    </script>
      
    <script src="js/script.js"></script>
</body>
</html>

