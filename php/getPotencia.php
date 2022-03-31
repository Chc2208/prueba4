<?php
include "connect.php";
header('Access-Control-Allow-Origin: *');

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dataBase", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT potencia FROM statusPotencia ORDER BY reg_date DESC LIMIT 1';
    //$sql = 'SELECT reg_date, status FROM statusT ORDER BY reg_date DESC LIMIT 1';

    foreach ($conn->query($sql) as $row) {
        echo $row['statusT'];
    }

    $conn->exec($sql);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;