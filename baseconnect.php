<?php
$servername = "localhost";
$database = "mbl-base";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
?>    