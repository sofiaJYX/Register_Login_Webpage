<?php
$servername = "db.cs.dal.ca";
$username = "yuxinj";
$password = "XMCgxPVKUjPEGcxvq6xnmMYe8";

try {
    $connection = new PDO("mysql:host=$servername;dbname=yuxinj", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection sccuessful";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>