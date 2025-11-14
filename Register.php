<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Register Here</h2>
    <form method="POST" action="register.php">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $conn = new mysqli('localhost', 'root', '', 'mydb');

        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }
   //request ki body
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  // $conn->query($sql) runs the query. If it returns true, insertion worked.
        if($conn->query($sql)){
            echo "Registration successful!";
        } else {
            echo "Error: " . $conn->error;
        }
   // Closes the database connection and frees resources.
        $conn->close();
    }
    ?>

    <br><a href="display.php">View All Users</a>
</body>
</html>
