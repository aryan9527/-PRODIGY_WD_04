<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aryan Bhoyar | Frontend Developer</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0d0d1f;
      color: #fff;
      scroll-behavior: smooth;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
      padding: 2rem 0;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #0d0d1f;
      z-index: 999;
      border-bottom: 1px solid #222;
    }

    .navbar .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
    }

    .logo {
      font-size: 1.4rem;
      color: #ff007f;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      padding: 0.3rem 0.5rem;
    }

    .nav-links a:hover {
      color: #ff007f;
      box-shadow: 0 0 10px #ff007f;
      border-radius: 5px;
    }

    .hero-section {
      margin-top: 80px;
      padding: 5rem 0;
      background: linear-gradient(to bottom right, #1a1a40, #0d0d1f);
      text-align: center;
    }

    .hero-text h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero-text .hello {
      color: #ff007f;
    }

    .hero-text .name {
      color: #00bfff;
    }

    .hero-text .tagline {
      font-size: 1.2rem;
      margin-top: 1rem;
      opacity: 0.8;
    }

    .btn-glow {
      padding: 0.8rem 1.5rem;
      background-color: #ff007f;
      color: white;
      border: none;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 0 0 15px #ff007f;
      transition: 0.3s ease;
      display: inline-block;
      margin-top: 1.5rem;
    }

    .btn-glow:hover {
      background-color: transparent;
      border: 2px solid #ff007f;
      color: #ff007f;
      box-shadow: 0 0 25px #ff007f, 0 0 50px #ff007f;
    }

    .section {
      padding: 3rem 0;
      border-bottom: 1px solid #222;
    }

    h2 {
      color: #ff007f;
      margin-bottom: 1rem;
    }

    .about-flex {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      align-items: center;
    }

    .about-text {
      flex: 1;
    }

    .about-photo {
      flex: 1;
      text-align: center;
    }

    .profile-img {
      width: 250px;
      height: auto;
      border-radius: 50%;
      border: 4px solid #ff007f;
      box-shadow: 0 0 15px #ff007f;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      list-style: none;
      padding: 0;
    }

    .skills-list li {
      background: #1f1f3a;
      padding: 0.6rem 1rem;
      border-radius: 5px;
      color: #fff;
      box-shadow: 0 0 10px #222;
    }

    .project {
      margin-bottom: 1.5rem;
    }

    a {
      color: #ff66b2;
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
      color: #ff007f;
    }

    .hidden {
      display: none;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      margin: 0.5rem 0;
      padding: 0.7rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      background-color: #1a1a40;
      color: white;
      box-shadow: 0 0 10px #ff007f;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      box-shadow: 0 0 20px #ff007f;
    }

    .footer {
      text-align: center;
      padding: 1rem;
      background-color: #111;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>
<body>

<?php
  $name = "Aryan Bhoyar";
  $email = "aryan.dev@portfolio.com";
  $phone = "+91-9876543210";
  $linkedin = "linkedin.com/in/aryanbhoyar";
  $github = "github.com/aryan-dev";
?>

<nav class="navbar">
  <div class="container">
    <h2 class="logo"><?php echo $name; ?></h2>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#education">Education</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#experience">Experience</a></li>
      <li><a href="#contact" onclick="showContactForm()">Contact</a></li>
    </ul>
  </div>
</nav>

<header class="hero-section">
  <div class="container hero-text">
    <h1>
      <span class="hello">Hello, I'm</span><br />
      <span class="name"><?php echo $name; ?></span>
    </h1>
    <p class="tagline">Crafting beautiful and functional web experiences.</p>
    <a href="#projects" class="btn-glow">View My Work</a>
  </div>
</header>

<section id="about" class="section">
  <div class="container about-flex">
    <div class="about-text">
      <h2>About Me</h2>
      <p>I’m <?php echo $name; ?>, a passionate Frontend Developer with a background in B.Com (Computer Applications). Currently pursuing MCA from R.B College, I balance academic learning with part-time development. My core stack includes HTML, CSS, JavaScript, PHP, and MySQL.</p>
    </div>
    <div class="about-photo">
      <img src="images/profile.jpg" alt="<?php echo $name; ?>" class="profile-img" />
      
    </div>
  </div>
</section>

<section id="education" class="section">
  <div class="container">
    <h2>Education</h2>
    <ul>
      <li><strong>B.Com (Computer Applications)</strong></li>
      <li><strong>MCA</strong></li>
    </ul>
  </div>
</section>

<section id="skills" class="section">
  <div class="container">
    <h2>Skills</h2>
    <ul class="skills-list">
      <li>HTML</li>
      <li>CSS</li>
      <li>JavaScript</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>Git</li>
    </ul>
  </div>
</section>

<section id="projects" class="section">
  <div class="container">
    <h2>Projects</h2>
    <div class="project">
      <h3>Responsive Portfolio Website</h3>
      <p>A personal portfolio built with HTML, CSS, and JS.</p>
      <a href="#">Live Demo</a> | <a href="#">GitHub</a>
    </div>
    <div class="project">
      <h3>Student Management System</h3>
      <p>Manage students’ records with PHP & MySQL backend.</p>
      <a href="#">Live Demo</a> | <a href="#">GitHub</a>
    </div>
    <div class="project">
      <h3>Weather App</h3>
      <p>JavaScript-based weather app using OpenWeatherMap API.</p>
      <a href="#">Live Demo</a> | <a href="#">GitHub</a>
    </div>
  </div>
</section>

<section id="experience" class="section">
  <div class="container">
    <h2>Experience</h2>
    <p><strong>Web Developer Intern</strong> at TechNova Solutions Pvt. Ltd. (Jan 2024 – June 2024)</p>
    <p>Built responsive landing pages, worked on client forms, and integrated APIs.</p>
  </div>
</section>

<section id="contact-form-section" class="section hidden">
  <div class="container">
    <h2>Contact Me</h2>
    <form action="contact.php" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit" class="btn-glow">Send Message</button>
    </form>
  </div>
</section>

<footer class="footer">
  <p>&copy; 2025 <?php echo $name; ?>. All rights reserved.</p>
</footer>

<script>
  function showContactForm() {
    document.getElementById("contact-form-section").scrollIntoView({ behavior: 'smooth' });
    document.getElementById("contact-form-section").classList.remove("hidden");
  }
</script>

</body>
</html>
