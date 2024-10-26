<?php
// Connect to MySQL
// $mysqli = new mysqli("localhost", "root", "", "book_service");

// if ($mysqli->connect_error) {
//     die("connection Failed: " . $mysqli->connect_error);
// }else{
//     echo("");
// };


// db.php
$con = mysqli_connect("localhost", "root", "", "book_service");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo("");
};


?>