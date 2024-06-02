<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Genshin Impact Merchandise</title>
    <link rel="icon" href="media/tab-logo.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Tahoma, Helvetica, Arial, sans-serif !important;
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
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box button {
            width: 100%;
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
            color: #333;
            text-decoration: none;
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
            <h2>Genshin Impact Merchandise</h2>
            <h4>Log in</h4>
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Log in</button>
            </form>
            <a href="#">Sign up</a>
        </div>
    </div>

</body>

</html>