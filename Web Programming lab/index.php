<br><br><br><br>
<?php 

require 'dbConnect.php';

echo "<h2 align='center'>User Booked Hotels</h2>";
echo "<table border='1' align='center'>";
echo "<tr><th>Booking No.</th><th>Name</th><th>Contact</th><th>Hotel</th><th>Arrival</th><th>AC Rooms</th><th>NON-AC Rooms</th></tr>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='contact'></td>";
echo "<td><input type='text' name='hotel'></td>";
echo "<td><input type='date' name='arrival'></td>";
echo "<td><input type='number' name='rooms_ac' value='0'></td>";
echo "<td><input type='number' name='rooms_nonac' value='0'></td>";
echo "</tr>"; 
echo "</form>"; 


$query = "SELECT * FROM booking";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["booking_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["hotel"]."</td>";
        echo "<td>".$row["arrival"]."</td>";
        echo "<td>".$row["rooms_ac"]."</td>";
        echo "<td>".$row["rooms_nonac"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

}

?>
