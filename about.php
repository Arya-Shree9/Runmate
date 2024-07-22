<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - About</title>
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
    padding: 20px;
    position: relative;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
}
/* Header Styles */
header {
    background: linear-gradient(90deg, #4CAF50, #3b8d40);
    color: white;
    padding: 20px 0;
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
    padding: 10px 15px;
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
/* About Styles */
.about {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.about-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    margin-top: 20px;
}
.about-content img {
    width: 50%;
    height: 50%;
    border-radius: 10px;
    margin-right: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.about-content div {
    max-width: 300px;
}
.about-content p {
    margin-bottom: 15px;
    line-height: 1.6;
}
/* Footer Styles */
footer {
    background-color: #2e1818;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
    font-size: 16px;
    box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
}
.card{
    float: right;
}

    </style>
    <header>
        
            
           
                <div class="container">
                    <h1>RunMate</h1>
                    <nav>
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                        <a href="activities.html">Activities</a>
                        <a href="events.html">Events</a>
                        <a href="prizes.html">Previous Prizes</a>
                        <a href="upcoming-prizes.html">Upcoming Prizes</a>
                    </nav>
                </div>
            
        </div>
    </header>

    <section class="about">
        
            <h2>About Us</h2>
            <div>
                <img src="https://www.womensrunning.co.uk/wp-content/uploads/2018/09/half-marathon-race.png" alt="About Us" height="300px" width="300px">
                
            </div>
        
    </section>
    <div class="card">
        <div class="card-text">
            <p>RunMate is dedicated to providing runners with the best tools and community for tracking their progress, 
                participating in events, and winning exciting prizes. 
                Our platform connects runners of all levels and helps them stay motivated and engaged.</p>

        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 RunMate. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>