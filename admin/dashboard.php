<?php
// Include the database connection file
include 'db_dashboard.php';

// Prepare the SQL statement to retrieve all bookings
$stmt = $mysqli->prepare("SELECT email, service, service_date, special_request, contact_date, contact_number FROM book_service");
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// HTML and CSS for the table
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Booking Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        @media (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>
";

// Check if there are any bookings
if ($result->num_rows > 0) {
    // Display the bookings in a table
    echo "<h1>Booking Dashboard</h1>";
    echo "<table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Service Date</th>
                <th>Special Request</th>
                <th>Contact Date</th>
                <th>Contact Number</th>
            </tr>";
    
    // Fetch and display each row of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['service']) . "</td>
                <td>" . htmlspecialchars($row['service_date']) . "</td>
                <td>" . htmlspecialchars($row['special_request']) . "</td>
                <td>" . htmlspecialchars($row['contact_date']) . "</td>
                <td>" . htmlspecialchars($row['contact_number']) . "</td>
              </tr>";
    }
    
    echo "</table>";
    } else {
        echo "<h1>No bookings found.</h1>";
    }
    

// Close the statement
$stmt->close();

// Close the database connection
$mysqli->close();

echo "
</body>
</html>
";
?>