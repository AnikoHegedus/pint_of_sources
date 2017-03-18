<?php
require_once "database.php";
$db = new database();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header class="header-admin">
        <h1>Please log in</h1>
       
    </header>
    <?php
        if($_POST){
        $user = $db->getUserByEmail($_POST["email"]);
        if(empty($user)){
            echo "<h1>Wrong user! - Try again! </h1><br>";
        }elseif (password_verify($_POST["password"], $user["password"])){
            session_start();
            $_SESSION["userid"] = $user["id"];
            header("Location: admin.php");
        }else{
            echo "<h1>Wrong password! - Try again!</h1><br>";
        }
    }
    ?>
    <form action="" method="post">
        Email:<br>
        <input type="text" name="email"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in" class="button">

    </form>
    <br>
    <a href="index.html">Back to main page</a>
</body>
</html>