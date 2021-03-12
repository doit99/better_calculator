<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="POST">
        Num 1: <input type="number" name="num1"> <br>
        Num 2: <input type="number" name="num2"> <br>

        <br>
        <label> Select Operator: </label>
        <Select name="operator">
            <option value="add">+</option>
            <option value="minus">-</option>
            <option value="multiply">x</option>
            <option value="divide">/</option>
        </Select> 

        <br> <br>
        <input type="submit" name="submit" value="Calculate">
    
    </form>
</body>
</html>

<!-- PHP code here -->

<?php

    if (isset($_POST["submit"])) {      // if submit button is click
        
        // declare and assign variables
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        // formulas
        $add = $num1 + $num2;
        $minus = $num1 - $num2;
        $multiply = $num1 * $num2;
        $divide = $num1 / $num2;

        if ($operator == "add") {
            echo "Add: " . $add;
        } else if ($operator == "minus") {
            echo "Minus: " . $minus;
        } else if ($operator == "multiply") {
            echo "Multiply: " . $multiply;
        } else {
            echo "Divide: " . $divide;
        }

    }

?>



