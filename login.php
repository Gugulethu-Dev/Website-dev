<?php
$email = $_POST['email'];
$password = $_POST['password'];

if(!file_exists("users.txt")){
   echo "No users found. Please sign up first.";
   exit;
}

$users = file("users.txt");
$found = false;

foreach($users as $line){
   if(strpos($line, "Email: ".$email) !== false && strpos($line, "Password: ".$password) !== false){
       $found = true;
       break;
   }
}

if($found){
   echo "Welcome back! Login successful.";
} else {
   echo "Error: Email or Password is wrong.";
}
?>