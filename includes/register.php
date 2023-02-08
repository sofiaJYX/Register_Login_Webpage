<?php

include_once "db.php";

if ($_POST['pass'] == $_POST['cpass']) {
    $regQuery = "INSERT INTO `users` (`user_name`, `user_pass`) VALUES ('{$_POST['email']}', '{$_POST['pass']}')";
    $result = $connection->query($regQuery);

    if($result) {
        header("Location: ../loginPage.php");
        exit();
    } else {
        $_POST['dbError'] = "dbError!";
    }
} else {
    $_POST['epass'] = true;
}

header("Location: ../loginPage.php");

?>