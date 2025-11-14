<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
<h2>Submit Feedback</h2>
<form method="POST" action="feedback.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $conn = new mysqli('localhost', 'root', '', 'mydb');
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    if($conn->query($sql)){
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="admin_feedback.php">View Feedbacks (Admin Page)</a>
</body>
</html>
