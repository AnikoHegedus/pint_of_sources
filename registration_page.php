<?php 
require_once "database.php";
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration page</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="header-admin">
        <h1>Registration page</h1>
        <h2>Sign up here</h2>
    </header>
    <?php
    if($_POST){
        if($_POST["password"] == $_POST["password2"]){
            $userid = $db -> insertuser($_POST["name"], $_POST["email"], $_POST["password"]);
            session_start();
            $_SESSION["userid"] = $userid;
            header("Location: admin.php");
        } else if($_POST["password"] != $_POST["password2"]){
            echo "<h1>The passwords you entered did not match</h1><br>";
        }
    }
    ?>
    <form action="" method="post">
        Name:<br>
        <input type="text" name="name"><br>
        Email:<br>
        <input type="email" name="email"><br>
        Password:<br>
        <input type="password" name="password"><br>
        Repeat password: <br>
        <input type="password" name="password2"><br>
        <input type="submit" value="Register" class="button">
    </form>
    <br>
    <a href="index.html">Back to main page</a>
</body>
</html>