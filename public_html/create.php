<?php

$mysqli = new mysqli("127.0.0.1", "leannaxk_root", "th3pr@t81");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->query("CREATE TABLE leannaxk_rsvp.rsvp(id int(10) NOT NULL AUTO_INCREMENT,name varchar(255) NOT NULL,response varchar(255) NOT NULL,email varchar(255) NOT NULL,guests varchar(255) NOT NULL,message varchar(10240) NOT NULL,PRIMARY KEY (id))");

echo $mysqli->host_info . "\n";
?>
