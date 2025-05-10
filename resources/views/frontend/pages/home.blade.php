<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El-Habib Foundation - Empowering Girls, Transforming Communities</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2E8B57;
            --secondary: #F7941D;
            --accent: #E83E8C;
            --dark: #333333;
            --light: #F5F5F5;
            --white: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--white);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        
        .btn:hover {
            background-color: #236b43;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
        }
        
        .btn-secondary:hover {
            background-color: #e08012;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }
        
        .text-center {
            text-align: center;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary);
        }
        
        .section-title p {
            font-size: 18px;
            color: #777;
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo img {
            height: 60px;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-menu a:hover {
            color: var(--primary);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(/frontend/img/causes/urgent-causes.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            margin-top: 90px;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        /* About Section */
        .about {
            background-color: var(--light);
        }
        
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .about-content h2 {
            margin-bottom: 20px;
            font-size: 36px;
        }
        
        .about-content p {
            margin-bottom: 20px;
        }
        
        /* Mission & Vision */
        .mission-vision {
            background-color: var(--white);
        }
        
        .mission-vision-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .mission-box, .vision-box {
            background-color: var(--light);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .mission-box:hover, .vision-box:hover {
            transform: translateY(-10px);
        }
        
        .mission-box h3, .vision-box h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        /* Programs Section */
        .programs {
            background-color: var(--light);
        }
        
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .program-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
        }
        
        .program-img {
            height: 200px;
            overflow: hidden;
        }
        
        .program-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .program-card:hover .program-img img {
            transform: scale(1.1);
        }
        
        .program-content {
            padding: 25px;
        }
        
        .program-content h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        .program-content p {
            margin-bottom: 20px;
            color: #666;
        }
        
        /* Impact Section */
        .impact {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(/frontend/image5.jpeg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
        }
        
        .impact .section-title h2:after {
            background-color: var(--white);
        }
        
        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .impact-item {
            text-align: center;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        
        .impact-item i {
            font-size: 40px;
            color: var(--secondary);
            margin-bottom: 20px;
        }
        
        .impact-item h3 {
            font-size: 36px;
            margin-bottom: 10px;
            color: var(--secondary);
        }
        
        .impact-item p {
            font-size: 16px;
        }
        
        /* Get Involved Section */
        .get-involved {
            background-color: var(--white);
        }
        
        .get-involved-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .involvement-card {
            text-align: center;
            padding: 40px 30px;
            background-color: var(--light);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .involvement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .involvement-card i {
            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .involvement-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .involvement-card p {
            margin-bottom: 20px;
            color: #666;
        }
        
        /* Contact Section */
        .contact {
            background-color: var(--light);
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        
        .contact-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        
        .contact-item i {
            font-size: 24px;
            color: var(--primary);
        }
        
        .contact-item .content h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .contact-form {
            background-color: var(--white);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }
        
        .form-group textarea {
            height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: var(--white);
            padding: 80px 0 0;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-about img {
            height: 50px;
            margin-bottom: 20px;
        }
        
        .footer-about p {
            margin-bottom: 20px;
            color: #bbb;
        }
        
        .footer-title {
            font-size: 20px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: var(--white);
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 14px;
        }
        
        /* Responsive Styles */
        @media (max-width: 991px) {
            .about-grid,
            .mission-vision-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .hero h1 {
                font-size: 40px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 90px;
                left: -100%;
                background-color: var(--white);
                width: 100%;
                height: calc(100vh - 90px);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: left 0.3s ease;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 20px 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .section-title h2 {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="#"><img src="/frontend/logo.jpeg" alt="El-Habib Foundation Logo"></a>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#programs">Programs</a></li>
                    <li><a href="#impact">Impact</a></li>
                    <li><a href="#get-involved">Get Involved</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#" class="btn">Donate Now</a></li>
                </ul>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Empowering Girls, Transforming Communities</h1>
                <p>Unlocking the potential of out-of-school girls in Northern Nigeria through innovative, community-based education initiatives</p>
                <div class="hero-buttons">
                    <a href="#programs" class="btn">Our Programs</a>
                    <a href="#get-involved" class="btn btn-secondary">Get Involved</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <div class="container">
            <div class="section-title text-center">
                <h2>Who We Are</h2>
                <p>El-Habib Foundation is a Nigerian non-profit organization committed to unlocking the potential of out-of-school girls in Northern Nigeria through innovative, community-based education initiatives.</p>
            </div>
            <div class="about-grid">
                <div class="about-image">
                    <img src="/frontend/image1.jpeg" alt="Girls in classroom">
                </div>
                <div class="about-content">
                    <h2>About El-Habib</h2>
                    <p>El-Habib, meaning "the beloved", is a community-centric foundation that takes its root name from enhancing community well-being. We believe that every girl deserves the right to learn, thrive, and lead — regardless of background or circumstance.</p>
                    <p>We work tirelessly to bridge the gender education gap in underserved communities by designing inclusive, scalable, and culturally responsive education models for out-of-school girls.</p>
                    <a href="#" class="btn">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section mission-vision">
        <div class="container">
            <div class="mission-vision-grid">
                <div class="mission-box">
                    <h3>Our Mission</h3>
                    <p>To bridge the gender education gap in underserved communities by designing inclusive, scalable, and culturally responsive education models for out-of-school girls.</p>
                </div>
                <div class="vision-box">
                    <h3>Our Vision</h3>
                    <p>A Northern Nigeria where every girl has access to quality education and the opportunity to shape her future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="section programs">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Programs</h2>
                <p>Innovative educational initiatives designed to empower out-of-school girls across Northern Nigeria</p>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-img">
                        <img src="/frontend/image2.jpeg" alt="Mobile Schools">
                    </div>
                    <div class="program-content">
                        <h3>Learn2Lead Mobile Schools</h3>
                        <p>We deploy solar-powered mobile classrooms to rural areas, offering literacy, numeracy, and digital skills to girls aged 10–18.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-img">
                        <img src="/frontend/image3.jpeg" alt="Mothers as Mentors">
                    </div>
                    <div class="program-content">
                        <h3>Mothers as Mentors (MAM)</h3>
                        <p>A community-driven program that trains mothers to support home-based learning, bridging cultural barriers and promoting girl-child education.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-img">
                        <img src="/frontend/image4.jpeg" alt="Safe Spaces">
                    </div>
                    <div class="program-content">
                        <h3>Safe Spaces for Learning (SSL)</h3>
                        <p>In collaboration with local leaders, we establish safe, girl-friendly learning hubs that double as community centers.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-img">
                        <img src="/frontend/image5.jpeg" alt="Tech Innovation">
                    </div>
                    <div class="program-content">
                        <h3>Tech4Girls Innovation Labs</h3>
                        <p>Introducing STEM and vocational training for adolescent girls using gamified and tablet-based curriculums in local languages.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-img">
                        <img src="/frontend/image1.jpeg" alt="Scholarship Support">
                    </div>
                    <div class="program-content">
                        <h3>Scholarship & Transition Support</h3>
                        <p>We offer scholarships, mentorship, and psychosocial support to help girls transition from informal to formal schooling systems.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="section impact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Impact (2022-2024)</h2>
                <p>Measurable results from our continuous efforts in Northern Nigeria</p>
            </div>
            <div class="impact-grid">
                <div class="impact-item">
                    <i class="fas fa-female"></i>
                    <h3>1,500+</h3>
                    <p>Out-of-school girls reached in 2 Northern states</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>200+</h3>
                    <p>Mothers and community educators trained</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-school"></i>
                    <h3>120</h3>
                    <p>Girls transitioned into public secondary schools</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-tablet-alt"></i>
                    <h3>700+</h3>
                    <p>Digital learning kits distributed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section id="get-involved" class="section get-involved">
        <div class="container">
            <div class="section-title text-center">
                <h2>Get Involved</h2>
                <p>Whether you're an individual, donor, or development partner, you can help shape a brighter future for girls</p>
            </div>
            <div class="get-involved-grid">
                <div class="involvement-card">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Donate</h3>
                    <p>Support our programs financially and help us reach more out-of-school girls across Northern Nigeria.</p>
                    <a href="#" class="btn">Donate Now</a>
                </div>
                <div class="involvement-card">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Volunteer</h3>
                    <p>Contribute your time, skills, and expertise to support our mission and make a direct impact.</p>
                    <a href="#" class="btn btn-outline">Join as Volunteer</a>
                </div>
                <div class="involvement-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Partner With Us</h3>
                    <p>Establish strategic partnerships to expand our reach and create sustainable educational programs.</p>
                    <a href="#" class="btn btn-outline">Become a Partner</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <p>Reach out to learn more about our mission or to get involved</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="content">
                            <h3>Our Address</h3>
                            <p>No. 12, Kofar Yamma, Near Police Station, Bauchi, Nigeria</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div class="content">
                            <h3>Email Us</h3>
                            <p>info@elhabibfoundation.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div class="content">
                            <h3>Call Us</h3>
                            <p>+234 800 123 4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <div class="content">
                            <h3>Website</h3>
                            <p>www.elhabibfoundation.org</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="/frontend/logo.jpeg" alt="El-Habib Foundation Logo">
                    <p>El-Habib Foundation is committed to unlocking the potential of out-of-school girls in Northern Nigeria through innovative, community-based education initiatives.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-links-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#programs">Programs</a></li>
                        <li><a href="#impact">Impact</a></li>
                        <li><a href="#get-involved">Get Involved</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links-section">
                    <h3 class="footer-title">Our Programs</h3>
                    <ul class="footer-links">
                        <li><a href="#">Learn2Lead Mobile Schools</a></li>
                        <li><a href="#">Mothers as Mentors</a></li>
                        <li><a href="#">Safe Spaces for Learning</a></li>
                        <li><a href="#">Tech4Girls Innovation Labs</a></li>
                        <li><a href="#">Scholarship & Transition Support</a></li>
                    </ul>
                </div>
                <div class="footer-links-section">
                    <h3 class="footer-title">Newsletter</h3>
                    <p>Subscribe to our newsletter to receive updates about our work and impact.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 El-Habib Foundation. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 90,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if(navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });
        
        // Form Submission
        const contactForm = document.querySelector('.contact-form form');
        const newsletterForm = document.querySelector('.newsletter-form');
        
        if(contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            });
        }
        
        if(newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for subscribing to our newsletter!');
                this.reset();
            });
        }
        
        // Scroll Effect for Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if(window.scrollY > 50) {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>