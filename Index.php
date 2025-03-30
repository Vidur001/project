<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vows and Wows</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">

</head>
<body>
    <!-- Cookie Consent Banner -->
    <div id="cookie-banner">
        <p>This website uses cookies to improve your experience. By accepting, you consent to the use of cookies. <a href="#">Learn More</a></p>
        <button id="accept-cookies">Accept</button>
    </div>

    <!-- Navigation -->
<!-- Navigation Bar -->
<nav>
    <ul class="nav-list">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
    <button class="login-button" onclick="openModal()">Login</button>
</nav>

<!-- Login Modal -->
<div class="modal" id="loginModal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h2>Employee Login</h2>
        <form method="POST" action="login">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>




    </nav> <!-- Video Section -->
    <section id="video-section">
       <div class="video-content">
        <div class="video-container">
            <video id="video" class="video" autoplay muted loop>
                <source src="Updated.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
           <h2 class="video-heading">Discover Our Story</h2>
           <p class="video-description">Watch how we bring your dream events to life with our expertise and passion. Let us show you the magic!</p>
        
       </div>
   </section>
      <!-- Home Section -->
      <section id="home">
        <h1>Welcome to The Vows and Wows</h1>
        <p>Your trusted partner for unforgettable events. From luxurious weddings to seamless corporate gatherings and private parties, we create memories that last a lifetime.</p>
    </section>
    
    <!-- Language Selection Section -->
<section id="language-section">
    <div class="language-selector">
        <label for="language">Select Language:</label>
        <select id="language" name="language">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
            <option value="de">German</option>
            <option value="it">Italian</option>
            <!-- Add more languages as needed -->
        </select>
    </div>
</section>


  

    <!-- Chatbot HTML (Add just before the closing </body> tag) -->
    <div id="chatbox-container">
        <div id="chatbox">
            <div id="chatbox-header">
                <span>Assistant</span>
                <button id="close-chat">X</button>
            </div>
            <div id="chatbox-body">
                <div id="messages"></div>
                <input type="text" id="user-input" placeholder="Ask me anything...">
                <button id="send-btn">Send</button>
            </div>
        </div>
        <button id="open-chat-btn">Chat with Us</button>
    </div>
    <!-- Services Section -->
<section id="services">
    <h2>Our Event Services</h2>
    <div class="service-container">
        <div class="service-item">
            <h3><a href="weddings.php" class="service-link">Weddings</a></h3>
            <p>Your big day deserves perfection. From timeless haircuts to stylish beard grooming, our wedding services ensure you look picture-perfect for those cherished memories.</p>
            <a href="weddings.php" class="button">Explore</a>
        </div>
        <div class="service-item">
            <h3><a href="private-parties.php" class="service-link">Private Parties</a></h3>
            <p>Elevate your celebrations with our expert styling services. Whether it's a birthday, anniversary, or casual gathering, we ensure you stand out with impeccable grooming and hair styling tailored to the vibe of your event.</p>
            <a href="private-parties.php" class="button">Explore</a>
        </div>
        <div class="service-item">
            <h3><a href="corporate-events.php" class="service-link">Corporate Events</a></h3>
            <p>Make a lasting impression at your next business meeting, conference, or gala. Our professional grooming services are designed to give you a polished and confident look, ensuring you represent your best self.</p>
            <a href="corporate-events.php" class="button">Explore</a>
        </div>
    </div>
</section>


    <!-- Gallery Section -->
    <section id="gallery">
        <h2>Gallery</h2>
        <p>Explore some of our stunning event setups and decorations.</p>
        <div class="gallery">
            <img src="11.jpg" alt="Event Image 1">
            <img src="13.jpg" alt="Event Image 2">
            <img src="4.jpg" alt="Event Image 3">
            <img src="WhatsApp Image 2025-01-16 at 18.18.34_00b78b61.jpg" alt="Event Image 5">
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>
            At The Vows and Wows, we specialize in bringing your visions to life. With a passionate and experienced team, we ensure that every event we plan is executed with precision, elegance, and a personal touch. Let us take care of every detail while you focus on enjoying your special moments.
        </p>
    </section>

   

     <!-- Contact Us Section -->
     <section id="contact">
        <h2>Contact Us</h2>
        <p>Have questions or ready to plan your event? Get in touch with us!</p>
        <form id="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Event Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="location">Event Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <div id="thank-you-message">Thank you for reaching out to us! We’ll get back to you soon with exciting plans for your event!</div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 The Vows and Wows. All Rights Reserved.</p>
    </footer>
      <!-- Back to Top Button -->
      <button id="backToTop">↑ Back to Top</button>
      <script>
        // Get the button
        const backToTopBtn = document.getElementById("backToTop");
        
        // Show or hide the button based on scroll position
        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        });
        
        // Scroll to the top when the button is clicked
        backToTopBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        </script>
 <script>
        // JavaScript to handle form submission
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting to the server
            const thankYouMessage = document.getElementById('thank-you-message');
            thankYouMessage.style.display = 'block'; // Show the thank-you message
            document.getElementById('contact-form').reset(); // Reset the form fields
        });
    </script>

    <!-- External JS files -->
    <script src="cookies.js"></script>
    <script src="chatbot.js"></script>
    <!-- At the bottom, just before the closing </body> tag -->
    <script src="language-switcher.js"></script>
    <script>
        function openModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }
    
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
    
        // Close the modal when clicking outside the modal content
        window.onclick = function(event) {
            const modal = document.getElementById('loginModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>

</body>
</html>
