<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | Genshin Impact Merchandise</title>
    <link rel="icon" href="media/tab-logo.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', Tahoma, Helvetica, Arial, sans-serif !important;
        }

        .bg-video {
            position: fixed;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 121%;
            z-index: -1;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-box {
            background: rgba(25, 20, 12, 0.8);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            width: 350px;
        }

        .login-box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .login-box h4 {
            margin-bottom: 15px;
            color: #ddd;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .login-box input[type="text"],
        .login-box input[type="password"],
        .login-box input[type="email"] {
            width: 90%;
            padding: 8px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box button {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #FDCC7B;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-box button:hover {
            background-color: #FFB200;
        }

        .login-box a {
            display: block;
            margin-top: 10px;
            color: #ddd;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <video autoplay muted loop class="bg-video">
        <source src="media/login-bg.mp4" type="video/mp4">
    </video>

    <div class="login-container">
        <div class="login-box">
            <img src="media/login-logo.png" alt="Genshin Impact Merchandise Logo">
            <h4>SIGN UP</h4>
            <form action="signup-process.php" method="POST">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email_address" placeholder="Email Address" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">SIGN UP</button>
            </form>
            <a href="login.php">BACK TO LOGIN PAGE</a>
        </div>
    </div>

</body>

</html>