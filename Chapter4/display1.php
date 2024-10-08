<?php
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $gr_no = htmlspecialchars($_POST['gr_no']);
    $name = htmlspecialchars($_POST['name']);

    // Display the output
    echo "<h2>Student Information</h2>";
    echo "<p><strong>G.R. No:</strong> $gr_no</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    
    // Create a hyperlink to send data back to the form page
    echo "<h3>Send Data Using Hyperlink:</h3>";
    echo "<a href='form.php?gr_no=$gr_no&name=$name'>Send Roll Number and Name Back</a>";
} else {
    echo "<p>No data submitted!</p>";
}
?>
