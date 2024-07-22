<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMate - Home</title>
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
        /* Carousel Styles */
        .carousel-container {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin-bottom: 40px;
            border-radius: 10px;
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
        /* Welcome Section */
        .welcome-section {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(90deg, #3b8d40, #2e6a2b);
            color: white;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .welcome-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .welcome-section p {
            font-size: 18px;
        }
        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .feature {
            background: #3b8d40;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            text-align: center;
        }
        .feature i {
            font-size: 48px;
            margin-bottom: 20px;
            color: #fff;
        }
        .feature h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 16px;
        }
        /* Testimonials Section */
        .testimonials {
            text-align: center;
            margin-bottom: 40px;
        }
        .testimonials h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .testimonial {
            background: #3b8d40;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin: 10px;
            width: 45%;
        }
        .testimonial p {
            font-size: 16px;
        }
        .testimonial .author {
            font-size: 14px;
            font-style: italic;
            margin-top: 10px;
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
            <a href="registration.php">Register</a>
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

    <div class="welcome-section">
        <h1>Welcome to RunMate</h1>
        <p>Your ultimate running companion. Join us to track your runs, join events, and connect with a community of runners.</p>
    </div>

    <div class="features">
        <div class="feature">
            <i class="fas fa-running"></i>
            <h3>Track Your Runs</h3>
            <p>Keep a detailed record of your running progress with our advanced tracking features.</p>
        </div>
        <div class="feature">
            <i class="fas fa-users"></i>
            <h3>Join the Community</h3>
            <p>Connect with fellow runners, share your progress, and participate in community events.</p>
        </div>
        <div class="feature">
            <i class="fas fa-trophy"></i>
            <h3>Earn Prizes</h3>
            <p>Take part in challenges and earn rewards for your achievements.</p>
        </div>
    </div>

    <div class="testimonials">
        <h2>What Our Users Say</h2>
        <div class="testimonial">
            <p>"RunMate has transformed my running experience. The community is amazing and the tracking features are top-notch."</p>
            <p class="author">- Yuvraj</p>
        </div>
        <div class="testimonial">
            <p>"I love participating in the events organized by RunMate. It's motivating and fun to compete and earn prizes."</p>
            <p class="author">- Balu</p>
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
