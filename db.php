<?php
$conn = mysqli_connect("localhost", "root", "", "login_app");
if (!$conn) {
    echo "Failed to connect to the database";
}
