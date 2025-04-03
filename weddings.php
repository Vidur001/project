<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Services | The Vows and Wows</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <style>
        /* Wedding Page Specific Styles */
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('wedding-header.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        header h1 {
            margin: 0;
            font-size: 3.5rem;
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
        
        .intro-section p {
            font-size: 1.1rem;
            margin: 1rem 0;
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
            height: 250px;
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
            font-size: 1.5rem;
        }
        
        .service-content p {
            color: #666;
        }
        
        .price {
            color: #e74c3c;
            font-weight: bold;
            margin: 1rem 0;
            font-size: 1.2rem;
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
            background-color: #f8f9fa;
            padding: 3rem 0;
            margin: 3rem 0;
        }
        
        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .testimonial {
            font-style: italic;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .wedding-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            margin: 3rem 0;
        }
        
        .gallery-item {
            height: 250px;
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
                font-size: 2.5rem;
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
        <h1>Wedding Services</h1>
    </header>
    
    <div class="container">
        <section class="intro-section">
            <h2>Your Perfect Wedding Look</h2>
            <p>Your big day deserves perfection. From timeless bridal hairstyles to elegant groom styling, our wedding services ensure you look absolutely stunning for those cherished memories.</p>
            <p>Our expert team specializes in creating personalized wedding looks that reflect your unique style and complement your wedding theme.</p>
            <a href="#contact" class="cta-button">Book Your Consultation</a>
        </section>
        
        <h2 style="text-align: center; margin-bottom: 1rem;">Our Wedding Services</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="bride.jpg" alt="Bridal Hair and Makeup">
                </div>
                <div class="service-content">
                    <h3>Bridal Styling</h3>
                    <p>Complete bridal hair and makeup packages including trial sessions, day-of styling, and touch-up services throughout your wedding day.</p>
                    <div class="price">Starting at $350</div>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="groom.jpg" alt="Groom Grooming">
                </div>
                <div class="service-content">
                    <h3>Groom Grooming</h3>
                    <p>Professional haircuts, beard styling, and grooming services to ensure the groom looks his absolute best on the wedding day.</p>
                    <div class="price">Starting at $150</div>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="bride.party.jpg" alt="Bridal Party Styling">
                </div>
                <div class="service-content">
                    <h3>Bridal Party Styling</h3>
                    <p>Coordinated looks for your entire wedding party, ensuring a cohesive and photogenic group appearance.</p>
                    <div class="price">Starting at $120/person</div>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
        </div>
        
        <section class="testimonials">
            <div class="testimonial-container">
                <h2>Wedding Stories</h2>
                <div class="testimonial">
                    <p>"The Vows and Wows team made me feel like a princess on my wedding day. My hair and makeup were exactly what I envisioned - timeless yet modern. They captured my personality perfectly!"</p>
                    <div class="testimonial-author">- Emily & James R.</div>
                </div>
                <div class="testimonial">
                    <p>"As a groom, I didn't realize how much difference professional grooming would make. The team gave me the perfect look that matched our wedding's elegant theme. Highly recommend!"</p>
                    <div class="testimonial-author">- Michael T.</div>
                </div>
            </div>
        </section>
        
        <h2 style="text-align: center; margin: 2rem 0;">Our Wedding Gallery</h2>
        
        <div class="wedding-gallery">
            <div class="gallery-item">
                <img src="wedding1.jpg" alt="Wedding Styling Example 1">
            </div>
            <div class="gallery-item">
                <img src="wedding2.jpg" alt="Wedding Styling Example 2">
            </div>
            <div class="gallery-item">
                <img src="wedding3.jpg" alt="Wedding Styling Example 3">
            </div>
            <div class="gallery-item">
                <img src="wedding4.jpg" alt="Wedding Styling Example 4">
            </div>
        </div>
        
        <section id="contact" class="contact-section">
            <h2 style="text-align: center; margin-top: 0;">Plan Your Wedding Look</h2>
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
                    <label for="wedding-date" style="display: block; margin-bottom: 0.5rem;">Wedding Date:</label>
                    <input type="date" id="wedding-date" name="wedding-date" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="service" style="display: block; margin-bottom: 0.5rem;">Service Interested In:</label>
                    <select id="service" name="service" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="bridal">Bridal Styling</option>
                        <option value="groom">Groom Grooming</option>
                        <option value="bridal-party">Bridal Party</option>
                        <option value="full-package">Full Wedding Package</option>
                        <option value="consultation">Consultation</option>
                    </select>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem;">Your Vision:</label>
                    <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="Tell us about your wedding theme, colors, and style preferences..."></textarea>
                </div>
                <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-weight: bold; display: block; margin: 0 auto; width: 100%; max-width: 300px;">Request Consultation</button>
            </form>
        </section>
    </div>
    
    <footer>
        <p>&copy; 2025 The Vows and Wows. All Rights Reserved.</p>
        <p>Wedding Styling Specialists</p>
    </footer>
</body>
</html>