<!-- Write a simple program to construct a Calculator that can perform Basic operation
Mathematical operation as well. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form action="" method="POST">
        <label for="number1">Enter first number:</label><br>
        <input type="number" id="number1" name="number1" step="any" required><br><br>

        <label for="number2">Enter second number:</label><br>
        <input type="number" id="number2" name="number2" step="any" required><br><br>

        <label for="operation">Select operation:</label><br>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the numbers and operation from the form
        $number1 = htmlspecialchars($_POST['number1']);
        $number2 = htmlspecialchars($_POST['number2']);
        $operation = htmlspecialchars($_POST['operation']);
        $result = 0;

        // Perform the selected operation
        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                // Check for division by zero
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    echo "<h3>Error: Division by zero is not allowed!</h3>";
                }
                break;
            default:
                echo "<h3>Invalid operation!</h3>";
                break;
        }

        // Display the result if it's valid
        if ($operation != "divide" || $number2 != 0) {
            echo "<h3>Result: $result</h3>";
        }
    }
    ?>
</body>
</html>
