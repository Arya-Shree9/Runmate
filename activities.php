<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - Activities</title>
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
        /* Activities Section */
        .activities {
            text-align: center;
            margin-top: 40px;
        }
        .activities h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .activity {
            background: #3b8d40;
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
            width: calc(50% - 40px);
            display: inline-block;
            vertical-align: top;
        }
        .activity img {
            width: 80%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .activity h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .activity p {
            font-size: 16px;
        }
        .activity button {
            padding: 10px 20px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .activity button:hover {
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
    <div class="activities">
        <h2>Available Activities</h2>
        
        <div class="activity">
            <img src="https://c1.staticflickr.com/1/578/21820499801_7cb12b1043_b.jpg" alt="5K Meter Run">
            <h3>5K Meter Run</h3>
            <p>Challenge yourself with a 5K run. Perfect for intermediate runners.</p>
            <button onclick="alert('You have registered for the 5K Meter Run!')">Register</button>
        </div>
        
        <div class="activity">
            <img src="https://media.aws.iaaf.org/media/Original/ec6ae576-5f5d-412f-8b13-4e3a00dbae7d.jpg?v=1362382226" alt="2.5K Meter Run">
            <h3>2.5K Meter Run</h3>
            <p>Get started with a 2.5K run. Ideal for beginners and casual runners.</p>
            <button onclick="alert('You have registered for the 2.5K Meter Run!')">Register</button>
        </div>
        
        <div class="activity">
            <img src="https://cdn.dmcl.biz/media/image/189107/o/GettyImages-1229123079.jpg" alt="10K Meter Run">
            <h3>10K Meter Run</h3>
            <p>Take on the 10K challenge. Suitable for advanced runners.</p>
            <button onclick="alert('You have registered for the 10K Meter Run!')">Register</button>
        </div>
        
        <div class="activity">
            <img src="https://hips.hearstapps.com/hmg-prod/images/runners-compete-during-the-half-marathon-and-marathon-news-photo-1594820612.jpg" alt="Half Marathon">
            <h3>Half Marathon</h3>
            <p>Push your limits with a half marathon. Best for seasoned runners.</p>
            <button onclick="alert('You have registered for the Half Marathon!')">Register</button>
        </div>
        
        <div class="activity">
            <img src="https://i3.ytimg.com/vi/4FY5ufC2rCM/maxresdefault.jpg" alt="Full Marathon">
            <h3>Full Marathon</h3>
            <p>Conquer the ultimate challenge with a full marathon.</p>
            <button onclick="alert('You have registered for the Full Marathon!')">Register</button>
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
