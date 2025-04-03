<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Event Services | The Vows and Wows</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <style>
        /* Corporate Events Specific Styles */
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('corporate-header.jpg');
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        header h1 {
            margin: 0;
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
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
            z-index: 10;
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
            margin: 3rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 800px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
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
        
        .price {
            color: #e74c3c;
            font-weight: bold;
            margin: 1rem 0;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #2c3e50;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #1a252f;
        }
        
        .testimonials {
            background-color: #f8f9fa;
            padding: 3rem 0;
            margin: 3rem 0;
        }
        
        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .corporate-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            margin: 3rem 0;
        }
        
        .gallery-item {
            height: 200px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .contact-section {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 3rem auto;
            max-width: 800px;
        }
        
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="back-link">← Back to Home</a>
        <h1>Corporate Event Services</h1>
    </header>
    
    <div class="container">
        <section class="intro-section">
            <h2>Professional Styling for Business Excellence</h2>
            <p>Make a lasting impression at your next business meeting, conference, or gala. Our professional grooming services are designed to give you a polished and confident look, ensuring you represent your best self in any corporate setting.</p>
            <p>We offer tailored packages for individuals and groups, with special rates for corporate clients.</p>
            <a href="#contact" class="cta-button">Request Corporate Rates</a>
        </section>
        
        <h2 style="text-align: center; margin-bottom: 1rem;">Our Corporate Services</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="executive-grooming.jpg" alt="Executive Grooming">
                </div>
                <div class="service-content">
                    <h3>Executive Grooming</h3>
                    <p>Premium styling services for executives and leadership teams preparing for important presentations, media appearances, or high-profile meetings.</p>
                    <div class="price">Starting at $200/person</div>
                    <a href="#" class="cta-button">Details</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="team-styling.jpg" alt="Team Styling">
                </div>
                <div class="service-content">
                    <h3>Team Styling Packages</h3>
                    <p>Coordinated grooming services for entire teams attending conferences, trade shows, or corporate events.</p>
                    <div class="price">Group rates available</div>
                    <a href="#" class="cta-button">Details</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="event-staff.jpg" alt="Event Staff Styling">
                </div>
                <div class="service-content">
                    <h3>Event Staff Preparation</h3>
                    <p>Professional styling for event staff, hosts, and presenters to ensure a cohesive and polished appearance for your corporate event.</p>
                    <div class="price">Custom packages</div>
                    <a href="#" class="cta-button">Details</a>
                </div>
            </div>
        </div>
        
        <section class="testimonials">
            <div class="testimonial-container">
                <h2>Corporate Client Testimonials</h2>
                <div class="testimonial">
                    <p>"The Vows and Wows team transformed our executive team before our annual shareholder meeting. The professionalism and attention to detail was exceptional - we received numerous compliments on our appearance."</p>
                    <div class="testimonial-author">- Sarah K., CFO Tech Innovations Inc.</div>
                </div>
                <div class="testimonial">
                    <p>"For our international sales conference, we booked their team styling package. They worked efficiently with our large group and delivered consistent, professional results that aligned with our brand image."</p>
                    <div class="testimonial-author">- Michael T., Director of Marketing</div>
                </div>
            </div>
        </section>
        
        <h2 style="text-align: center; margin: 2rem 0;">Corporate Event Gallery</h2>
        
        <div class="corporate-gallery">
            <div class="gallery-item">
                <img src="corporate1.jpg" alt="Conference Styling">
            </div>
            <div class="gallery-item">
                <img src="corporate2.jpg" alt="Executive Grooming">
            </div>
            <div class="gallery-item">
                <img src="corporate3.jpg" alt="Team Preparation">
            </div>
            <div class="gallery-item">
                <img src="corporate4.jpg" alt="Award Ceremony">
            </div>
        </div>
        
        <section id="contact" class="contact-section">
            <h2 style="text-align: center; margin-top: 0;">Corporate Inquiries</h2>
            <form style="max-width: 600px; margin: 0 auto;">
                <div style="margin-bottom: 1rem;">
                    <label for="company" style="display: block; margin-bottom: 0.5rem;">Company Name:</label>
                    <input type="text" id="company" name="company" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="contact-name" style="display: block; margin-bottom: 0.5rem;">Your Name:</label>
                    <input type="text" id="contact-name" name="contact-name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="contact-email" style="display: block; margin-bottom: 0.5rem;">Email:</label>
                    <input type="email" id="contact-email" name="contact-email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="event-type" style="display: block; margin-bottom: 0.5rem;">Event Type:</label>
                    <select id="event-type" name="event-type" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="conference">Conference</option>
                        <option value="meeting">Business Meeting</option>
                        <option value="gala">Gala/Awards</option>
                        <option value="trade-show">Trade Show</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="attendees" style="display: block; margin-bottom: 0.5rem;">Approximate Number of Attendees:</label>
                    <input type="number" id="attendees" name="attendees" min="1" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem;">Additional Requirements:</label>
                    <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                </div>
                <button type="submit" style="background-color: #2c3e50; color: white; border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-weight: bold; display: block; margin: 0 auto; width: 100%; max-width: 300px;">Submit Inquiry</button>
            </form>
        </section>
    </div>
    
    <footer>
        <p>&copy; 2025 The Vows and Wows. All Rights Reserved.</p>
        <p>Corporate Event Specialists</p>
    </footer>
</body>
</html>