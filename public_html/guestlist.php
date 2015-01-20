<?php

$mysqli = new mysqli("127.0.0.1", "leannaxk_root", "th3pr@t81");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$result = $mysqli->query("SELECT id, name, response, email, guests, message FROM leannaxk_rsvp.rsvp");

if($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Response</th><th>Email</th><th>Number of guests</th><th>Message</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
	echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["response"]. "</td><td>" . $row["email"]. " </td><td>" . $row["guests"]."</td><td>" . $row["message"]."</td>";	
	echo "</tr>";
    }
}
else {
    echo 'NO RESULTS';	
}

$mysqli->close();
?>
