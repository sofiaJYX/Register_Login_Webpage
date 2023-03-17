<?php

include_once "db.php";

//insert user input into the sql server
$regQuery = "INSERT INTO `users` (`user_name`, `user_pass`) VALUES ('{$_POST['email']}', '{$_POST['password']}')";
$result = $connection->query($regQuery);

if ($result) {
    header("Location: ../loginPage.php");
    exit();
    
} else {
    $_POST['dbError'] = "dbError!";
}

header("Location: ../loginPage.php");

?>