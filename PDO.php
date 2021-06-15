<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "db_name";

try {
    $db = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $db->query("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>