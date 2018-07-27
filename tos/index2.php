<html>
<title>brain</title>
<?php
require_once 'dbconn.php';

$query= "SELECT * FROM user";
$result= $conn->query($query);
if(!$result) die ($conn->error);
$row= $result->num_rows;
echo'<table border=1>';
for ($i=0; $i<$row; ++$i)
{
	
echo'<tr>'; 
	$result->data_seek($i);
	
	echo '<td> id:'. $result->fetch_assoc()['id'].'</td>';
	$result->data_seek($i);
	echo '<td> username:'. $result->fetch_assoc()['username'].'</td> <br>';
	$result->data_seek($i);
	echo '<td> password:'. $result->fetch_assoc()['password'].' </td> <br>';
	echo '</tr>';

}
echo'</table>';

$result->close();
$conn->close();
?>
    
    
    
    echo "<table class='r_table'border='2'><tr>
            <th>Report ID</th>
            <th>Offender FirstName</th>
            <th>Offender's Surname</th>
            <th>Vehicle Number</th>
            <th>Driver License No</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Offence</th>
            <th>Offence Type</th>
            <th>Penalty</th>
            <th>Reporting Officer</th>
            </tr><tr>";
            
      while ($row=$result->fetch_assoc()){;
       echo"
            <td>R000$row[rp_id]</td>";
            echo "<td>$row[o_fname]</td>";
             echo "<td>$row[o_lname]</td>
            <td>$row[vehicle_no]</td>
            <td>$row[driver_license]</td>
            <td>$row[gender]</td>
            <td>$row[address]</td>
            <td>$row[offence]</td>
            <td>$row[offence_code]</td>
            <td>$row[penalty]</td>
            <td>$row[officer_reporting]</td>

            </tr></table>";