<?php      
    // include('db.php');  
    // $username = $_POST['username'];  
    // $password = $_POST['password'];  
      
    //     //to prevent from mysqli injection  
    //     $username = stripcslashes($username);  
    //     $password = stripcslashes($password);  
    //     $username = mysqli_real_escape_string($con, $username);  
    //     $password = mysqli_real_escape_string($con, $password);  
      
    //     $sql = "select *from login where username = '$username' and password = '$password'";  
    //     $result = mysqli_query($con, $sql);  
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    //     $count = mysqli_num_rows($result);  
          
    //     if($count == 1){  
	// 	    header("Location: dashboard.php");
	// 	    exit();
	// 	}  
	// 	else{  
	// 	    echo "<h1> Login failed. Invalid username or password.</h1>";  
	// 	}    




    session_start();
    include('db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    // To prevent SQL injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: admin_dashboard/index.php");
        exit();
    } else {
        // Set an error message in the session and redirect to login.php
        $_SESSION['error'] = "Login failed. Invalid username or password.";
        header("Location: login.php");
        exit();
    }





?>  