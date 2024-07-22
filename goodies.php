<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - Goodies</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #231515;
            color: white;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
        }
        /* Header Styles */
        header {
            background: linear-gradient(90deg, #4CAF50, #3b8d40);
            color: white;
            padding: 5px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            font-size: 24px;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
            padding: 7px 8px;
            border-radius: 1px;
        }
        header nav a:hover {
            color: #333;
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }
        /* Goodies Section */
        .goodies {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(90deg, #3b8d40, #2e6a2b);
            color: white;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .goodies h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .goodies p {
            font-size: 18px;
        }
        .goodies-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .goodie {
            background: #3b8d40;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            margin: 10px;
        }
        .goodie img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .goodie h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .goodie p {
            font-size: 16px;
        }
        /* Footer Styles */
        footer {
            background-color: #2e1818;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>RunMate</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="registration.html">Register</a>
            <a href="prizes.html">Prizes</a>
            <a href="activities.html">Activities</a>
            <a href="events.html">Events</a>
            <a href="goodies.html">Goodies</a>
        </nav>
    </div>
</header>

<div class="container">
    <div class="goodies">
        <h1>Goodies</h1>
        <p>Check out our exclusive range of goodies for our members. Earn these by participating in events and challenges.</p>
        <div class="goodies-items">
            <div class="goodie">
                <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/shoe/9/i/5/7-jg-103b-7-nivia-blue-black-original-imagm6wgh8czwdke.jpeg?q=90&crop=false" alt="Running Shoes">
                <h3>Running Shoes</h3>
                <p>High-quality running shoes to enhance your performance and keep you comfortable.</p>
            </div>
            <div class="goodie">
                <img src="https://insidethemagic.net/wp-content/uploads/2018/02/RunDisneyMerch2.jpg" alt="Merchandise">
                <h3>Merchandise</h3>
                <p>Exclusive RunMate merchandise including t-shirts, hats, and more.</p>
            </div>
            <div class="goodie">
                <img src="https://m.media-amazon.com/images/I/51bhfOx-8KL.jpg" alt="Sipper">
                <h3>Sipper</h3>
                <p>Stay hydrated with our stylish and durable sippers.</p>
            </div>
            <div class="goodie">
                <img src="https://m.media-amazon.com/images/I/71JqKg6E4hL._AC_UF1000,1000_QL80_.jpg" alt="Backpack">
                <h3>Backpack</h3>
                <p>Carry your essentials in our spacious and comfortable backpack.</p>
            </div>
            <div class="goodie">
                <img src="https://www.maxbhi.com/temp/images/products/fitness_band_dd21/maxbhi_fitness_band_dd21_1.jpg" alt="Fitness Band">
                <h3>Fitness Band</h3>
                <p>Track your fitness journey with our advanced fitness bands.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <p>&copy; 2023 RunMate. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
