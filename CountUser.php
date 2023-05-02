<?php
$db = new mysqli("localhost", "username", "password", "database_name");
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$result = $db->query("SELECT COUNT(*) FROM users");
$row = $result->fetch_row();
echo "Total users: " . $row[0];
$db->close();
?>