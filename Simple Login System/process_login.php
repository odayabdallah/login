<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $correctUsername = "user";
    $correctPassword = "password";

    if ($username === $correctUsername && $password === $correctPassword) {
        //
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php"); 
        exit(); 
    } else {
        
        $_SESSION['error_message'] = "اسم المستخدم أو كلمة المرور غير صحيحة.";
        header("Location: index.php"); 
        exit(); 
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>