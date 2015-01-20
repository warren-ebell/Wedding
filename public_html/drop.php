<?php

$mysqli = new mysqli("127.0.0.1", "leannaxk_root", "th3pr@t81");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->query("DROP TABLE leannaxk_rsvp.rsvp");

echo $mysqli->host_info . "\n";
?>
