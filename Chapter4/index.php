<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form action="display.php" method="POST" target="_blank">
        <label for="name">Enter Student Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gr_no">Enter Student G.R #:</label>
        <input type="text" id="gr_no" name="gr_no" required><br><br>

        <label for="class">Enter Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="section">Enter Section:</label>
        <input type="text" id="section" name="section" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
