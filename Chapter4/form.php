<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form action="display1.php" method="POST">
        <label for="gr_no">Enter G.R. No.:</label>
        <input type="text" id="gr_no" name="gr_no" required><br><br>

        <label for="name">Enter Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
