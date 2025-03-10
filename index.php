<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHU-11ICT1P | Home</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<header>
  <div class="logo">
    <span>Chu Concert Grounds</span>
  </div>
  <nav>
    <a href="index.php" class="active">Home</a>
    <a href="about.html">About</a>
    <a href="contact.php">Contact</a>
    <a href="book.html">Booking</a>
  </nav>
</header>

<section class="hero" id="home">
  <div class="hero-content">
    <h1>Welcome to Chu Concert Grounds</h1>
    <p>Experience live performances, Shows, and unforgettable moments.</p>
    <a href="book.html" class="btn">Book Now</a>
  </div>
</section>

<section class="carousel">
  <h2>Featured LIVED concerts</h2>
  <div class="carousel-container">
    <div class="carousel-slide">
      <img src="Images/nobita.jpg" alt="show1">
      <img src="Images/concert.jpg" alt="Show 2">
      <img src="Images/concert2.jpg" alt="Show 3">
    </div>
  </div>
</section>

<section class="testimonials">
  <h2>What Our Audience Says</h2>
  <div class="testimonial-slider">
    <p>"Absolutely breathtaking performances! Can't wait for the next show!" – Alexandra P.</p>
    <p>"A magical experience from start to finish." – Erika M.</p>
    <p>"The best concert I've ever attended. Highly recommend!" – John hebbron R.</p>
  </div>
</section>
<footer>
  &copy; 2025 CHU CONCERT GROUNDS | All Rights Reserved
</footer>

</body>
</html>

<!-- styles.css -->
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #fff;
  background-color: #0e1621;
  line-height: 1.6;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 40px;
  background-color: rgba(0, 0, 0, 0.85);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1000;
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 15px;
  border: 3px solid #f8a45c;
}

.logo span {
  font-size: 1.8rem;
  font-weight: bold;
  color: #f8a45c;
}

nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 15px;
   font-size: 1rem;
  transition: color 0.3s ease;
}

nav a:hover {
  color: #f8a45c;
}

.hero {
    background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("Images/theater.jpg") no-repeat center center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}

.hero-content {
  max-width: 500px;
  text-align: right;
  animation: fadeInRight 3s ease infinite;
}

.hero-content h1 {
  font-size: 3.5rem;
  color: #f8a45c;
}

.hero-content p {
  font-size: 1.3rem;
}

.btn {
  display: inline-block;
  padding: 12px 25px;
  background-color: #f8a45c;
  color: white;
  border-radius: 8px;
  text-decoration: none;
}

.btn:hover {
  background-color: #d77a35;
}

.carousel {
  text-align: center;
  padding: 50px 0;
}

.carousel-container {
  overflow: hidden;
  width: 90%;
  margin: auto;
  border-radius: 10px;
}

.carousel-slide {
  display: middle;
}

.carousel-slide img {
  width: 40%;
  max-height: 300px;
  object-fit: cover;
}

@keyframes slide {
  0% { transform: translateX(0); }
  50% { transform: translateX(-100%); }
  100% { transform: translateX(-200%); }
}

.content, .upcoming, .testimonials, .video-section {
  padding: 50px 20px;
  text-align: center;
}

.content h2, .upcoming h2, .testimonials h2, .video-section h2 {
  font-size: 2.2rem;
  color: #f8a45c;
}

.show-cards {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 30px;
}

.card {
  background-color: rgba(0,0,0,0.8);
  padding: 20px;
  border-radius: 10px;
  width: 250px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

.card img {
  width: 100%;
  border-radius: 10px;
}

.testimonial-slider p {
  font-style: italic;
  font-size: 1.2rem;
  animation: fade 4s infinite;
}

@keyframes fade {
  0%,100% { opacity: 0; }
  20%,80% { opacity: 1; }
}

.video-container iframe {
  width: 100%;
  max-width: 600px;
  border-radius: 10px;
}

footer {
  background-color: rgba(0, 0, 0, 0.85);
  padding: 15px;
  text-align: center;
}
</style>
