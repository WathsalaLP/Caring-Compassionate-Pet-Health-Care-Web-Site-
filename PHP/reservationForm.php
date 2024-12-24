<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'db2');
if (mysqli_connect_errno()) {
    echo 'Could not connect: ' . mysqli_connect_error();
}


$ownerName = mysqli_real_escape_string($con, $_POST['owner_name']);
$petName = mysqli_real_escape_string($con, $_POST['pet_name']);
$petType = mysqli_real_escape_string($con, $_POST['pet_type']);
$petAge = mysqli_real_escape_string($con, $_POST['pet_age']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$breed = mysqli_real_escape_string($con, $_POST['breed']);
$contactNumber = mysqli_real_escape_string($con, $_POST['contact_number']);
$selectDoctor = mysqli_real_escape_string($con, $_POST['select_doctor']);

$sql = "INSERT INTO reservationForm (YourName, PetName, PetType, PetAge, DateOfBirth, Breed, ContactNo, ChooseDoctor) 
        VALUES ('$ownerName', '$petName', '$petType', '$petAge', '$dob', '$breed', '$contactNumber', '$selectDoctor')";

if (!mysqli_query($con, $sql)) {
    echo 'Error: ' . mysqli_error($con);
}

mysqli_close($con);
?>