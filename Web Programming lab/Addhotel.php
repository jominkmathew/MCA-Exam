<?php

require 'dbConnect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$ac = $_POST['ac'];
$nonac = $_POST['nonac'];
$ac_nos = $_POST['ac_nos'];
$nonac_nos = $_POST['nonac_nos'];

                                                                                                                                                                                     
#insertion
$query = "INSERT INTO hotels(name,location,ac,nonac,ac_nos,nonac_nos) VALUES ('".$name."','".$location."',".$ac.",".$nonac.",".$ac_nos.",".$nonac_nos.")";

$result = mysqli_query($con,$query);

if($result)
{
    echo "<script>alert('Hotel Registred successful!')</script>";
}
else
{
    echo "<script>alert('Database insertion failed!')</script>";
}


echo "<a href='hotel.php'>Back to Home</a>";

?>