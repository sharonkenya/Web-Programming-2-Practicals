<?php
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $gr_no = htmlspecialchars($_POST['gr_no']);
    $class = htmlspecialchars($_POST['class']);
    $section = htmlspecialchars($_POST['section']);

    // Display the output
    echo "<h2>Student Information</h2>";
    echo "<p><strong>Student Name:</strong> $name</p>";
    echo "<p><strong>G.R. No:</strong> $gr_no</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Section:</strong> $section</p>";
} else {
    echo "<p>No data submitted!</p>";
}
?>
