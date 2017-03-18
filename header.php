<?php
require_once "database.php";
require_once "user.php";

$db = new database();
$user = new user($db);

$name = $user->getName();

if($name){
    echo "You are using the site as <br>" . htmlspecialchars($user->getName());
}else{
    echo "<a href='registration_page.php'>Sign up</a><br>";
    echo "<a href='login_page.php'>Log in</a>";
}