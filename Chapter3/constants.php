<?php
/*Write a simple program of the following output using Constants.
Employee code is 001
Employee Name is ABC
Employee Salary is 25000
Working Hours are 7.5*/

define("EMPLOYEE_CODE", "001");
define("EMPLOYEE_NAME", "ABC");
define("EMPLOYEE_SALARY", 25000);
define("WORKING_HOURS", 7.5);


echo "<h1>Employee Information</h1>";
echo "<p><strong>Employee Code:</strong> " . EMPLOYEE_CODE . "</p>";
echo "<p><strong>Employee Name:</strong> " . EMPLOYEE_NAME . "</p>";
echo "<p><strong>Employee Salary:</strong> " . EMPLOYEE_SALARY . "</p>";
echo "<p><strong>Working Hours:</strong> " . WORKING_HOURS . "</p>";
?>
