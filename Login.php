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
    $_SESSION["name"]="";
    $_SESSION["passwordd"]="";
    ?>
    <form action="" method="post">
        Username <input type="text" name= "username"  id="" > <br>
        Password <input type="password" name= "password" id=""> <br>
        <input type="submit" value="Login">
    </form>
    <?php
        if(isset($_POST['username'])){
            if(isset($_POST['username'])){
                $_SESSION["name"]= $_POST["username"];
                $_SESSION["passwordd"]=$_POST["password"];  
                header('location:Admin.php');
            }
        }
    ?>
</body>
</html>