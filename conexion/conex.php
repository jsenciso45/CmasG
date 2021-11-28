<?php

$username ="root";
$password="";
$bd="comercioMas";

try {
    $conn=new PDO('mysql:host=localhost;dbname='.$bd,$username,$password);
} catch (PDOException $e) {
    die('Connection Failed: '.$e->getMessage());
}

?>