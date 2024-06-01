<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Genshin Impact Merchandise</title>
    <link rel="icon" href="media/tab-logo.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Tahoma, Helvetica, Arial, sans-serif !important;
            background-image: url('media/contact-bg.png');
            background-size: cover;
            color: white;
        }

        .contact-section {
            background-color: rgba(25, 20, 12, 0.6);
            border-radius: 10px;
            padding: 20px;
            margin-top: 100px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .send-button {
            background-color: #FDCC7B;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .send-button:hover {
            background-color: #FFB200;
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center"
                    style="margin-left: 100px; margin-top: -40px; margin-bottom: -40px;">
                    <img src="media/logo.png" alt="Avatar Logo" style="width:150px; margin-right: 180px;"
                        class="rounded-full">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link m-2" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-2" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="shop.php">SHOP</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav" style="margin-right: 20px;">
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#">LOG IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container contact-section">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron text-white">
                    <h2>Contact Information</h2>
                    <p>Facebook: Genshin Impact Merchs - CVA</p>
                    <p>Instagram: @gimerchs-cva</p>
                    <p>Email: genshinimpactmerchscva@gmail.com</p>
                    <p>Contact Number: 0977-161-6591</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h2>Contact Me</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="send-button">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>