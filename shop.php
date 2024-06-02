<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop | Genshin Impact Merchandise</title>
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
            background-image: url('media/shop-bg.png');
            background-size: cover;
        }

        .menu-container {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .menu-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3);
        }

        .menu-image {
            width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }

        .menu-description {
            padding: 10px;
        }

        .menu-price {
            margin-top: 10px;
            color: #FDCC7B;
            font-weight: bold;
        }

        .order-button {
            background-color: #FDCC7B;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .order-button:hover {
            background-color: #FFB200;
        }

        .header-text {
            margin-top: 100px;
            text-align: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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
                        class="rounded-pill">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link m-2" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-2" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="shop.php">SHOP</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav" style="margin-right: 20px;">
                    <li class="nav-item">
                        <a class="nav-link m-2" href="login.php">LOG OUT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="header-text">Genshin Impact Merchandises</div>
    </div>

    <div class="menu-container container">
        <!-- Item 1 -->
        <div class="menu-item">
            <img src="media/slide-1.png" alt="Item 1" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Metal Bookmark: Xiao</p>
                <p class="menu-price">₱250.00</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="menu-item">
            <img src="media/slide-2.png" alt="Item 2" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Ganyu Folding Fan</p>
                <p class="menu-price">₱399.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="menu-item">
            <img src="media/slide-3.png" alt="Item 3" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Characters Key Chains</p>
                <p class="menu-price">₱149.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="menu-item">
            <img src="media/slide-4.png" alt="Item 4" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Vision Key Chains</p>
                <p class="menu-price">₱149.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="menu-item">
            <img src="media/slide-5.png" alt="Item 5" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Hu Tao Figure</p>
                <p class="menu-price">₱2139.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 6 -->
        <div class="menu-item">
            <img src="media/slide-6.png" alt="Item 6" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Hilichurl Fleece Hand Warmer</p>
                <p class="menu-price">₱599.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 7 -->
        <div class="menu-item">
            <img src="media/slide-7.png" alt="Item 7" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Xiao Vigilant Mechanical Keyboard</p>
                <p class="menu-price">₱4359.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
        <!-- Item 8 -->
        <div class="menu-item">
            <img src="media/slide-8.png" alt="Item 8" class="menu-image">
            <div class="menu-description">
                <p>Genshin Impact Lyney Grin-Malkin Cat Knead Plushie</p>
                <p class="menu-price">₱759.99</p>
                <button class="order-button">Order</button>
            </div>
        </div>
    </div>

</body>

</html>