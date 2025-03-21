<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background: #f9f9f9; }
        input, select { width: 100%; padding: 8px; margin: 5px 0; }
        button { background: blue; color: white; border: none; padding: 10px; width: 100%; }
    </style>
</head>
<body>

<form action="process.php" method="POST">
    <h2>Student Registration</h2>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="roll_number" placeholder="Roll Number" required>
    <input type="text" name="department" placeholder="Department" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="mobile_number" placeholder="Mobile Number" required>
    <button type="submit">Register</button>
</form>

</body>
</html>
