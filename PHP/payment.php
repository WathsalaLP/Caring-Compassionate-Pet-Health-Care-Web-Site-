<?php
session_start();
$con =mysqli_connect('localhost','root','','db2');
if(mysqli_connect_errno()){
    echo 'Could not connect: ' . mysqli_connect_error();
}

$sql = " INSERT INTO payment(FullName,Password) 
VALUES('$_POST[owner_name]','$_POST[password]')";

if(!mysqli_query($con,$sql)){
    echo 'Error: ' . mysqli_error($con);

}
echo '<script>alert("Your login successfully")</script>';
mysqli_close($con);

?>