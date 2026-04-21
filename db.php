<?php
$conn = new mysqli("localhost", "root", "", "storee_db");

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>