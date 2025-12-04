<?php
// Database configuration
$host = 'localhost'; // Database host
$dbname = 'root'; // Database
$password = ''; // Database password    
$dbname = 'hotel_management'; // Database name

$conn = new mysqli($host, $dbname, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function filteration($data){
    foreach($data as $key => $value){
        $value = trim($value); // Remove whitespace from both ends
        $value = stripslashes($value); // Remove backslashes
        $value = htmlspecialchars($value); // Convert special characters to HTML entities
        $value = strip_tags($value); // Remove HTML and PHP tags
        $data[$key] = $value;
    }
    return $data;
}

function select($sql, $values, $datatypes){
    $conn = $GLOBALS['conn'];
    $stmt = $conn->prepare($sql);
    if($stmt === false){
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    if($values != null && $datatypes != null){
        $stmt->bind_param($datatypes, ...$values);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
    
}

 function update($sql, $values, $datatypes){
    $conn = $GLOBALS['conn'];
    $stmt = $conn->prepare($sql);
    if($stmt === false){
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    if($values != null && $datatypes != null){
        $stmt->bind_param($datatypes, ...$values);
    }
    $stmt->execute();
    $affected_rows = $stmt->affected_rows;
    $stmt->close();
    return $affected_rows;;
 }
?>