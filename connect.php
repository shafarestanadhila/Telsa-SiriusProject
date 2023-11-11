<?php
$conn = mysqli_connect("localhost", "root", "", "tracking");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>