<?php
// Fetching Values from URL
$submitName = $_POST["name"];
$submitResponse = $_POST["response"];
$submitEmail = $_POST["email"];
$submitGuests = $_POST["guests"];
$submitMessage = $_POST["message"];

$mysqli = new mysqli("127.0.0.1", "leannaxk_root", "th3pr@t81", "leannaxk_rsvp", 3306);
// Insert query
$mysqli->query("insert into leannaxk_rsvp.rsvp(name, response, email, guests, message) values ('$submitName', '$submitResponse', '$submitEmail', '$submitGuests','$submitMessage')");
echo "Form Submitted Succesfully";
?>
