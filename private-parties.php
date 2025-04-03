<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Party Services | The Vows and Wows</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <style>
        /* Additional styles for private parties page */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            text-align: center;
            position: relative;
        }
        
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        
        .back-link {
            position: absolute;
            left: 20px;
            top: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 15px;
            border: 2px solid white;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            background-color: white;
            color: #2c3e50;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .intro-section {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .intro-section p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 1rem auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .service-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-image {
            height: 200px;
            overflow: hidden;
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-image img {
            transform: scale(1.05);
        }
        
        .service-content {
            padding: 1.5rem;
        }
        
        .service-content h3 {
            margin-top: 0;
            color: #2c3e50;
        }
        
        .service-content p {
            color: #666;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 12px 25px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #c0392b;
        }
        
        .testimonials {
            background-color: #2c3e50;
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }
        
        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .testimonial {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-author {
            font-weight: bold;
        }
        
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="back-link">← Back to Home</a>
        <h1>Private Party Services</h1>
    </header>
    
    <div class="container">
        <section class="intro-section">
            <h2>Elevate Your Celebrations</h2>
            <p>Whether it's a birthday, anniversary, or casual gathering, we ensure you stand out with impeccable grooming and hair styling tailored to the vibe of your event.</p>
            <p>Our expert team will work with you to create the perfect look that matches your party's theme and makes you the center of attention.</p>
            <a href="#contact" class="cta-button">Book Your Session Today</a>
        </section>
        
        <h2 style="text-align: center; margin-bottom: 1rem;">Our Private Party Services</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="party1.jpg" alt="Birthday Party Styling">
                </div>
                <div class="service-content">
                    <h3>Birthday Celebrations</h3>
                    <p>Special birthday hairstyles and grooming that make the celebrant shine. Perfect for milestone birthdays and special celebrations.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="party2.jpg" alt="Anniversary Styling">
                </div>
                <div class="service-content">
                    <h3>Anniversary Events</h3>
                    <p>Romantic and elegant styling for your special anniversary celebration. We'll help you recreate your wedding day look or create something new.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="party3.jpg" alt="Themed Party Styling">
                </div>
                <div class="service-content">
                    <h3>Themed Parties</h3>
                    <p>From retro to futuristic, we create looks that perfectly match your party theme. Complete with makeup and hair styling.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
        </div>
        
        <section class="testimonials">
            <div class="testimonial-container">
                <h2>What Our Clients Say</h2>
                <div class="testimonial">
                    <p>"The team at Vows and Wows transformed our anniversary party! Everyone looked amazing and felt so special."</p>
                    <div class="testimonial-author">- Sarah & Michael J.</div>
                </div>
                <div class="testimonial">
                    <p>"My 40th birthday styling was perfect - exactly what I envisioned and more. Highly recommend their private party services!"</p>
                    <div class="testimonial-author">- David Thompson</div>
                </div>
            </div>
        </section>
        
        <section id="contact" style="background: white; padding: 2rem; border-radius: 8px; margin-top: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h2 style="text-align: center; margin-top: 0;">Book Your Private Party Styling</h2>
            <form style="max-width: 600px; margin: 0 auto;">
                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; margin-bottom: 0.5rem;">Your Name:</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; margin-bottom: 0.5rem;">Email:</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="event-type" style="display: block; margin-bottom: 0.5rem;">Event Type:</label>
                    <select id="event-type" name="event-type" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="birthday">Birthday Party</option>
                        <option value="anniversary">Anniversary</option>
                        <option value="themed">Themed Party</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="date" style="display: block; margin-bottom: 0.5rem;">Event Date:</label>
                    <input type="date" id="date" name="date" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem;">Special Requests:</label>
                    <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                </div>
                <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-weight: bold; display: block; margin: 0 auto;">Submit Booking Request</button>
            </form>
        </section>
    </div>
    
    <footer>
        <p>&copy; 2025 The Vows and Wows. All Rights Reserved.</p>
    </footer>
</body>
</html>