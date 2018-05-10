<?php
session_start();


require_once('./db_connect.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT `username`, `name`, `user_level` FROM `users` 
WHERE `username`='$username' AND `password`='$password'";

$result = mysqli_query($db, $query);

if(mysqli_num_rows($result)){
    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $user;
    header('location: /backend/php_user_auth/profile.php');
    //mamp location
}else{
    header('location: /backend/php_user_auth/?auth_error=true');
}