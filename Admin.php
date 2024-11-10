<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // include "Login.php";
        if(isset($_SESSION["name"]) && !empty($_SESSION["name"]) && !empty($_SESSION["name"]) ){
            // echo $_SESSION["name"]. "<br>";
            // echo $_SESSION["passwordd"];
            echo " Chao ". $_SESSION["name"];
            
        }
        if(empty($_SESSION["name"]) && empty($_SESSION["passwordd"]) ){
            header("location:Login.php");
        }
        
    ?>
</body>
</html>