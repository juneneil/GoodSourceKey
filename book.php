<?php
// Include the database connection file
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $service = htmlspecialchars(trim($_POST['service']));
    $service_date = htmlspecialchars(trim($_POST['service_date']));
    $special_request = htmlspecialchars(trim($_POST['special_request']));
    $contact_date = htmlspecialchars(trim($_POST['contact_date']));
    $contact_number = htmlspecialchars(trim($_POST['contact_number']));

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO book_service (full_name, email, service, service_date, special_request, contact_number, contact_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $email, $service, $service_date, $special_request, $contact_date, $contact_number);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to index.html after a successful booking
        header("Location: index.html");
        exit; // Make sure to exit after the redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
