<?php


// if there are things to see, display them
$sql = "SELECT StaffID, Staff_Name, Staff_Description FROM olympus_staff_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["StaffID"]. " - Staff_Name: " . $row["Staff_Name"]. " " . $row["Staff_Description"]. "<br>";
    }
} else {
    echo "0 results";
}

?>