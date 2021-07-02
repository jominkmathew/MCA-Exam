<?php

require 'dbConnect.php';


$name = $_POST['name'];
$contact = $_POST['contact'];
$hotel = $_POST['hotel'];
$arrival = strval($_POST['arrival']);
$rooms_ac = $_POST['rooms_ac'];
$rooms_nonac = $_POST['rooms_nonac'];


//$query = "SELECT * FROM booking where seat_no=".$seat_no." AND  date='".$date."'";
//$result = mysqli_query($con,$query);
//if(mysqli_num_rows($result)==0)
                                                                                                                         

#insertion
$query = "INSERT INTO booking(name,contact,hotel,arrival,rooms_ac,rooms_nonac) VALUES ('".$name."','".$contact."','".$hotel."','".$arrival."',".$rooms_ac.",".$rooms_nonac.")";

$result = mysqli_query($con,$query);

if($result)
{
    echo "<script>alert('successfully Booked !')</script>";
}
else
{
    echo "<script>alert('Database insertion failed! Please try again')</script>";
}


echo "<a href='index.php'>Back to Home</a>";

?>