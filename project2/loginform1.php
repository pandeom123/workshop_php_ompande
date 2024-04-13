<?php
$valid_username = "user";
$valid_password = "password";


function validateInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validateInput($_POST["username"]);
    $password = validateInput($_POST["password"]);

    if ($username === $valid_username && $password === $valid_password) {
        
        echo "<p>Welcome, $username!</p>";
    } else {
        
        echo "<p>Invalid username or password</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        input{
            
            padding:10px;
            margin-bottom: 10px;
            border-radius:1px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
