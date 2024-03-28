<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$inquiry = $_POST['inquiry'];

// Prepare the data for Excel
$data = array($name, $email, $phone, $inquiry);

// Append data to Excel file
$file = 'form_data.xlsx';
$fp = fopen($file, 'a');
fputcsv($fp, $data);
fclose($fp);

// Redirect back to the form page
header("Location: index.html");
exit();
?>
