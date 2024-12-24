<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'db2');
if (mysqli_connect_errno()) {
    echo 'Could not connect: ' . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ownerName = mysqli_real_escape_string($con, $_POST['owner_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

   
    $validOwnerName = 'Wathsala';
    $validPassword = '1234';

    if ($ownerName === $validOwnerName && $password === $validPassword) {
     
        $_SESSION["owner_name"] = $ownerName;
        header("Location: home.html");
        exit();
    } else {
       
        echo '<script>alert("Invalid username or password. Please try again.")</script>';
    }
}

mysqli_close($con);
?>