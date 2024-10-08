<!-- Write a code to calculate and print percentage of a student where,
Total_Marks=400, Obtained_Marks=Sum of obtained marks of all 4 subjects
Percentage= (Obtained_Marks*100)/Total_Marks.
(Hint: input marks of four subjects out of 100). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Student Percentage</title>
</head>
<body>
    <h2>Calculate Student Percentage</h2>
    <form action="" method="POST">
        <label for="subject1">Enter marks for Subject 1:</label>
        <input type="number" id="subject1" name="subject1" max="100" required><br><br>

        <label for="subject2">Enter marks for Subject 2:</label>
        <input type="number" id="subject2" name="subject2" max="100" required><br><br>

        <label for="subject3">Enter marks for Subject 3:</label>
        <input type="number" id="subject3" name="subject3" max="100" required><br><br>

        <label for="subject4">Enter marks for Subject 4:</label>
        <input type="number" id="subject4" name="subject4" max="100" required><br><br>

        <input type="submit" value="Calculate Percentage">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve marks from the form
        $subject1 = htmlspecialchars($_POST['subject1']);
        $subject2 = htmlspecialchars($_POST['subject2']);
        $subject3 = htmlspecialchars($_POST['subject3']);
        $subject4 = htmlspecialchars($_POST['subject4']);
        
        // Calculate total obtained marks
        $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;
        
        // Define total marks
        $total_marks = 400; // Total marks for 4 subjects (100 each)
        
        // Calculate percentage
        $percentage = ($obtained_marks * 100) / $total_marks;

        // Display the result
        echo "<h3>Total Obtained Marks: $obtained_marks</h3>";
        echo "<h3>Percentage: " . number_format($percentage, 2) . "%</h3>"; // Format to 2 decimal places
    }
    ?>
</body>
</html>
