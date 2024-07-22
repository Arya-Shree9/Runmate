<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql ="INSERT INTO `users`.`users` (`name`, `age`, `email`, `password`) VALUES ('$name', '$age', '$email', '$password');";

    

    if($con->query($sql)== true){
       // echo "successfully inserted";
    }else{
        echo "error";
    }
    $con->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate</title>
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
            position: relative;
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
        /* Carousel Styles */
        .carousel-container {
            position: relative;
            width: 50%;
            height: 300px;
            overflow: hidden;
            margin-bottom: 40px;
            border-radius: 10px;
            float: left;
        }
        .carousel-slide {
            display: flex;
            width: fit-content;
            transition: transform 0.5s ease;
        }
        .carousel-slide img {
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .carousel-prev, .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
        }
        .carousel-prev {
            left: 10px;
        }
        .carousel-next {
            right: 10px;
        }
        /* Card Styles */
        .card {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 35%;
            background: #fff;
            color: #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .card h2 {
            margin-top: 0;
        }
        .card form {
            display: block;
            flex-direction: column;
        }
        .card label {
            display: block;
            margin: 10px 0 5px;
        }
        .card input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .card button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card button:hover {
            background-color: #45a049;
        }
        .card a {
            color: #4CAF50;
            text-decoration: none;
            margin-top: 5px;
            display: block;
        }
        .card a:hover {
            text-decoration: underline;
        }
        /* Footer Styles */
        footer {
            background-color: #2e1818;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            font-size: 12px;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Carousel functionality
            var currentIndex = 0;
            var slides = $('.carousel-slide img');
            var totalSlides = slides.length;

            function nextSlide() {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }

            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalSlides - 1;
                }
                updateCarousel();
            }

            function updateCarousel() {
                var newMargin = -currentIndex * 100;
                $('.carousel-slide').css('transform', 'translateX(' + newMargin + '%)');
            }

            // Click events for carousel navigation
            $('.carousel-next').click(nextSlide);
            $('.carousel-prev').click(prevSlide);
        });
    </script>
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
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="https://wallpaperaccess.com/full/1986680.jpg" alt="Image 1">
            <img src="https://www.nordictrack.co.uk/learn/wp-content/uploads/2020/12/1-1.jpeg" alt="Image 2">
            <img src="https://www.verywellfit.com/thmb/4G1ki1QODdBE205TFRAMDv8FeHc=/3922x2542/filters:fill(FFDB5D,1)/GettyImages-169949925-56a8f5095f9b58b7d0f6b0fe.jpg" alt="Image 3">
        </div>
        <button class="carousel-prev">Prev</button>
        <button class="carousel-next">Next</button>
    </div>

    <div class="card" id="signup-card">
        <h2>Register Here!</h2>
        <h4> Be a part of the RunMate Fam!!!</h4>
        <form action="registration.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>

<footer>
    <div class="container">
        <p>&copy; 2023 RunMate. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
