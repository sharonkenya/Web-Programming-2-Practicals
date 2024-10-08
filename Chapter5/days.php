<!-- Write a simple program to calculate total numbers of days you lived up to until now
Hint: Input your age (in years) and then calculate number of days
number _of _days= age(in years) * 365 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Days Lived</title>
</head>
<body>
    <h2>Calculate Total Days Lived</h2>
    <form action="" method="POST">
        <label for="age">Enter your age (in years):</label><br>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the age from the form
        $age = htmlspecialchars($_POST['age']);
        
        // Calculate the number of days lived
        $number_of_days = $age * 365;

        // Display the result
        echo "<h3>You have lived for approximately $number_of_days days.</h3>";
    }
    ?>
</body>
</html>
