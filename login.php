<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 100px;
        }

        .login-container {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (otentikasi($username, $password)) {
            echo "<p style='color: green;'>Login successful. Welcome, $username!</p>";
        } else {
            echo "<p style='color: red;'>Invalid username or password. Please try again.</p>";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (otentikasi($username, $password)) {
  echo "<p class='text-success'>Login successful. Welcome, $username!</p>";
}
}
?>
</div>

</body>
</html>