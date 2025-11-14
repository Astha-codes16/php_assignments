<?php
$conn = new mysqli('localhost', 'root', '', 'mydb');

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

echo "<h2>Registered Users</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
}

echo "</table>";
$conn->close();
?>
