<?php
require_once "database.php";
$db = new database();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>You are logged in</title>
</head>
<header>
    <button class="button logout" onclick='window.location.href="../index.php"'>Logout</button>
    <div class="hello"><?php require "header.php"; ?></div>
</header>
<body>
    <h1>Now you can you the site as a logged-in user</h1>
</body>
</html>