<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_number = $_POST['roll_number'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];

    $stmt = $conn->prepare("INSERT INTO students (name, roll_number, department, email, mobile_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $roll_number, $department, $email, $mobile_number);

    if ($stmt->execute()) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
