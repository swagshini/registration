<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #ffe6f2; /* Light pink background */
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        .container img {
            width: 80px;
            margin-bottom: 10px;
        }
        h2 {
            color: #ff66a3;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ff99c2;
            border-radius: 5px;
            outline: none;
        }
        input:focus {
            border-color: #ff4d94;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #ff66a3;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ff3385;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="sanrio.jpg" alt="Registration"> 
    <h2>Student Registration</h2>
    <form action="process.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="roll_number" placeholder="Roll Number" required>
        <input type="text" name="department" placeholder="Department" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="mobile_number" placeholder="Mobile Number" required>
        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
