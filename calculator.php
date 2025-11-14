<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<h2>PHP Calculator</h2>
<form method="post">
    <input type="number" name="num1" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">−</option>
        <option value="*">×</option>
        <option value="/">÷</option>
    </select>
    <input type="number" name="num2" required>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operator'];

    switch($op){
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/': 
            if($num2 == 0) $result = "Cannot divide by zero!";
            else $result = $num1 / $num2;
            break;
        default: $result = "Invalid operator";
    }

    echo "<h3>Result: $result</h3>";
}
?>
</body>
</html>
