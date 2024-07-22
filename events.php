<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - Events</title>
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
        /* Events Section */
        .events {
            text-align: center;
            margin-top: 40px;
        }
        .events h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .event {
            background: #3b8d40;
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
            width: calc(50% - 40px);
            display: inline-block;
            vertical-align: top;
        }
        .event img {
            width: 80%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .event h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .event p {
            font-size: 16px;
        }
        .event button {
            padding: 10px 20px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .event button:hover {
            background-color: #CC0000;
        }
        /* Footer Styles */
        footer {
            background-color: #2e1818;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
            margin-top: 40px;
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
    <div class="events">
        <h2>Upcoming Events</h2>
        
        <div class="event">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_-_3ZEimdOARzz8MvKxxK6LgH3wHiVu2mZg&s" alt="Zumba Event">
            <h3>Zumba Class</h3>
            <p>Join us for an energetic Zumba class. Perfect for all fitness levels!</p>
            <button onclick="alert('You have registered for the Zumba Class!')">Register</button>
        </div>
        
        <div class="event">
            <img src="https://turnitupdance.com/wp-content/uploads/2021/06/Turn-It-Up-Dance-Challenge-Video-Still-1024x576.jpg" alt="Dance Workshop">
            <h3>Dance Competition</h3>
            <p>Show your dance moves and win exclusive pizes.</p>
            <button onclick="alert('You have registered for the Dance Workshop!')">Register</button>
        </div>
        
        <div class="event">
            <img src="https://e7.pngegg.com/pngimages/913/294/png-clipart-logo-music-competition-music-competition-music-competition-text-public-relations.png" alt="Music Concert">
            <h3>Music Competition</h3>
            <p>Harmony in Every Note.</p>
            <button onclick="alert('You have registered for the Music Concert!')">Register</button>
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
