<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="cointainer mt-5">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDA2NTg0MmMtNmE2Yi00NmQyLWEzYTQtZmIyM2U3YjE4M2Q4IiwidCI6ImZjMDNmMjM5LTdhYzktNDVmYy1iMjY4LTUwMDcwNDUwZjhhMSJ9&pageName=ReportSection9d8aabc3d58495e3937d" class="btn btn-info">Review Analytics</a>
        <a href="logout.php" class="btn btn-primary ml-3">Sign Out of Your Account</a>
    </p>
    </div>
</body>
</html>