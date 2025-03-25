<?php
session_start();

$conn = new mysqli("localhost", "root", "", "bhai_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && $password === "abhi@123") {
        // Escape special characters to prevent SQL injection
        $email = $conn->real_escape_string($email);

        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['email'] = $email;
            header("Location: page.php");
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    } else {
        $error = "Invalid password!";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BH AI - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            max-width: 400px;
            width: 100%;
            color: white;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .btn-primary {
            background: #f4c542;
            border: none;
            width: 100%;
        }
        .btn-primary:hover {
            background: #ffcc00;
        }
        .text-muted a {
            color: white;
            text-decoration: none;
        }
        .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to BH AI</h2>
        <?php if (!empty($error)): ?>
            <p class="text-danger text-center"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
