<?php
echo"<h2>Form Submission Result</h2>";

$errors = [];

function required($field){
    return !isset($_POST[$field]) || trim($_POST[$field]) === '';
}

$requiredFields = ['fname','lname', 'father', 'day', 'month', 'year', 'mobile', 'email', 'password', 'gender', 'course', 'city', 'address'];

foreach($requiredFields as $field){
    if(required($field)){
        $errors[] = "$field is required.";
    }
}

if($errors){
    foreach($errors as $err){
        echo "<p style='color:red;'>$err</p>";
    }
}

echo "<strong>Name:</strong>" . ($_POST['fname'] ?? '')." ". ($_POST['lname'] ?? ''). "<br>";
echo "<strong>Father's Name:</strong> " . ($_POST['father'] ?? '') . "<br>";
echo "<strong>DOB:</strong> " . ($_POST['day'] ?? '') . "-" . ($_POST['month'] ?? '') . "-" . ($_POST['year'] ?? '') . "<br>";
echo "<strong>Mobile:</strong> " . ($_POST['mobile'] ?? '') . "<br>";
echo "<strong>Email:</strong> " . ($_POST['email'] ?? '') . "<br>";
echo "<strong>Pasword:</strong> " . ($_POST['password'] ?? '') . "<br>";
echo "<strong>Gender:</strong> " . ($_POST['gender'] ?? '') . "<br>";
echo "<strong>Department:</strong> " . (isset($_POST['dept']) ? implode(", ", $_POST['dept']) : '') . "<br>";
echo "<strong>Course:</strong> " . ($_POST['course'] ?? '') . "<br>";
echo "<strong>City:</strong> " . ($_POST['city'] ?? '') . "<br>";
echo "<strong>Address:</strong> " . ($_POST['address'] ?? '') . "<br>";

?>
