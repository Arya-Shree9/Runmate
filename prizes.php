<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - Previous Prizes</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
    padding: 10px;
    position: relative;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
}
/* Header Styles */
header {
    background: linear-gradient(90deg, #4CAF50, #3b8d40);
    color: white;
    padding: 10px 0;
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
    font-size: 20px;
}
header nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
    font-weight: bold;
    transition: color 0.3s, transform 0.3s;
    padding: 7px 8px;
    border-radius: 5px;
}
header nav a:hover {
    color: #333;
    background-color: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
}
/* Section Styles */
section {
    padding: 40px 0;
}
section:nth-child(even) {
    background-color: #2e2e2e;
}
section h2 {
    text-align: center;
    margin-bottom: 20px;
}
.prizes {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}
.prizes div {
    flex: 1 1 300px;
    margin: 10px;
    background: #333;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}
.prizes img {
    width: 50%;
    border-radius: 10px;
    margin-bottom: 15px;
}
/* Footer Styles */
footer {
    background-color: #2e1818;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
    font-size: 18px;
    box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
}

    </style>
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

    <section class="prizes">
        <div class="container">
            <h2>Previous Prizes</h2>
            <div>
                <img src="https://run247.com/wp-content/uploads/2023/06/comrades-marathon-medals.jpg" alt="Prize 1">
                <p><strong>Marathon 2023 Winner</strong></p>
                <p>Amazing medal and a 25000 Rs cash prize.</p>
            </div>
            <div>
                <img src="https://static01.nyt.com/images/2022/04/18/multimedia/18boston-marathon-blog-prize-money/18boston-marathon-blog-prize-money-superJumbo.jpg?quality=75&auto=webp" alt="Prize 2">
                <p><strong>5K Fun Run 2023 Winner</strong></p>
                <p>Exclusive running shoes and a 10000Rs gift card.</p>
            </div>
            <div>
                <img src="https://i2-prod.mirror.co.uk/incoming/article15020301.ece/ALTERNATES/s1200/0_JenniferWetton1.jpg" alt="Prize 3">
                <p><strong>City Marathon 2023 Winner</strong></p>
                <p>Travel voucher worth 15000Rs and a trophy.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 RunMate. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>