<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Convert Temperature from Centigrade to Fahrenheit</h2>
    <form action="" method="POST">
        <label for="celsius">Enter Temperature in Centigrade:</label><br>
        <input type="number" id="celsius" name="celsius" required><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the temperature in Centigrade from the form
        $celsius = htmlspecialchars($_POST['celsius']);
        
        // Convert Centigrade to Fahrenheit
        $fahrenheit = ($celsius * 9/5) + 32;

        // Display the result
        echo "<h3>Temperature in Fahrenheit: " . number_format($fahrenheit, 2) . " °F</h3>";
    }
    ?>
</body>
</html>
