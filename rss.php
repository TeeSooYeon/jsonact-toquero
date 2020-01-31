<?php 
include 'dbconnect.php';
include 'class.retrieve.php';
header('Content-Type: application/json');
$manage = new Get();
$virus = $manage->virus_retrv();
echo "{\"Virus\":";
echo json_encode($virus);
echo "}";
?>
