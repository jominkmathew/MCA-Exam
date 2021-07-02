<br><br><br><br>
<?php 

require 'dbConnect.php';


echo "<h2 align='center''>Add Hotels</h2>";
echo "<table border='1' align='center'>";
echo "<tr><th>Hotel ID</th><th>Name</th><th>Location</th><th>AC Room (Rate)</th><th>Non AC Room (Rate)</th><th>AC Rooms (No)</th><th>NON-AC Rooms (No)</th></tr>";
echo "<form action='add_hotel.php' method='post'>";
echo "<tr>";
echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='location'></td>";
echo "<td><input type='number' name='ac' value='0'></td>";
echo "<td><input type='number' name='nonac'  value='0'></td>";
echo "<td><input type='number' name='ac_nos' value='0'></td>";
echo "<td><input type='number' name='nonac_nos' value='0'></td>";
echo "</tr>"; 
echo "</form>"; 



$query = "SELECT * FROM hotels";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["hotel_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["location"]."</td>";
        echo "<td>".$row["ac"]."</td>";
        echo "<td>".$row["nonac"]."</td>";
        echo "<td>".$row["ac_nos"]."</td>";
        echo "<td>".$row["nonac_nos"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><br>Book Hotel,<a href='index.php'>Click Here</a>";
}

?>