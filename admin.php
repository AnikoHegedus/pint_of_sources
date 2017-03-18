<?php
require_once "database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>You are logged in</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header class="header-admin">
        <button class="button logout" onclick='window.location.href="../index.html"'>Logout</button>
        <div class="hello"><?php require "header.php"; ?></div>
        <h2>Page for logged in users</h2>   
    </header>
    <h3>Now you can you the site as a logged-in user</h3>
   
    <a href="../index.html">Back to main page</a>

</body>
</html>