<?php
session_start();
$con =mysqli_connect('localhost','root','','db2');
if(mysqli_connect_errno()){
    echo 'Could not connect: ' . mysqli_connect_error();
}

$sql = " INSERT INTO regForm(OwnerName,PetName,PetType,ContactNo,Password,ConPassword,Gender) 
VALUES('$_POST[owner_name]','$_POST[pet_name]','$_POST[pet_type]','$_POST[contact_number]','$_POST[password]','$_POST[confirm_password]','$_POST[gender]')";

if(!mysqli_query($con,$sql)){
    echo 'Error: ' . mysqli_error($con);

}
echo '<script>alert("Your registration successfully")</script>';
mysqli_close($con);

?>