<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "id17580391_tas33n"; 
$dbPassword = "Tas33n.com.pa"; 
$dbName     = "id17580391_pa"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}