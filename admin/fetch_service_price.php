<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goodsourcekey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Get the service from the request
$service = isset($_GET['service']) ? $_GET['service'] : '';

if ($service) {
    $stmt = $conn->prepare("SELECT  FROM services WHERE service_name = ?");
    $stmt->bind_param("s", $service);
    $stmt->execute();
    $stmt->bind_result($contact_number);
    
    if ($stmt->fetch()) {
        echo json_encode(["number" => $contact_number]);
    } else {
        echo json_encode(["error" => "Service not found"]);
    }
    
    $stmt->close();
} else {
    echo json_encode(["error" => "No service specified"]);
}



$conn->close();
?>