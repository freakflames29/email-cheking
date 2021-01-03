<?php 
include 'emailCheck.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email chek</title>
    <link rel="stylesheet" href="style/cs.css">
</head>
<body>
    <div class="wrap">
    <h1>Enter your name</h1>
    <form action="index.php"  method="post" name="form">
    <input type="text" name="name" placeholder="Your name" class='field' id="name" required>
    <span class="error">
        <?php 


     if(!empty($some))
     {

        echo "Email exists";
     }


     ?>
         
     </span>
    <input type="email" name="email" placeholder="Your email" class='field' id="email" required>
    <input type="submit" name="submit" class='submit' value="Submit" id="submit">
    
    </div>
   
    
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/req.js"></script>
</body>
</html>