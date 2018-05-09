<?php
require_once('./user_data.php');

$username=$_POST['username'];
$password=$_POST['password'];

if(isset($user_data[$username]) && $user_data[$username]['password'] === $password){
    $name = $user_data[$username]['name'];
    echo "<h1>Welcome: $name</h1>";
}else{
    echo '<h1>Access Denied</h1>';
}