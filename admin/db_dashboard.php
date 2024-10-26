<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "book_service");

if ($mysqli->connect_error) {
    die("connection Failed: " . $mysqli->connect_error);
}else{
    echo("");
};

?>