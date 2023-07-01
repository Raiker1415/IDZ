<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "user_s_room";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>