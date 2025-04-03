<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoAlert - Protect Our Environment</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #2e7d32;
    color: white;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}
header nav {
    background-color: #2e7d32;
}
nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    display: inline-block;
    transition: transform 0.3s ease, color 0.3s ease; /* Smooth animation */
}

nav a:hover {
    transform: scale(1.2) translateY(-5px); /* Zoom & Move Up */
    color: #ffeb3b; /* Optional: Change color on hover */
}

.scrolling-images {
    white-space: nowrap;
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 100%;
}

.scrolling-images img {
    display: inline-block;
    width: 250px; /* Adjust size as needed */
    height: auto;
    margin-right: 20px;
    animation: scroll-left 10s linear infinite;
}
.scrolling-images{
    height: 200px;
}
@keyframes scroll-left {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}


section {
    padding: 20px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input, textarea {
    width: 80%;
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #2e7d32;
    color: white;
    padding: 10px 20px;
    </style>
</head>
<body>
    <header>
        <h1>EcoAlert</h1>
        <img src="logo1.jpeg" alt="logo1">
        <marquee behavior="#333" direction="">Report Environmental Harm, Raise Awareness, Make a Difference|🌱 Reduce, Reuse, Recycle ♻️ | 💧 Save Water | ⚡ Conserve Energy | 🌳 Plant More Trees | 🚶‍♂️ Reduce Carbon Footprint | 🥦 Eat Sustainably | 🚯 Avoid Pollution | 🦜 Protect Wildlife | 📢 Spread Awareness | 🌞 Support Green Innovations</marquee>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#report">Report Issue</a></li>
                <li><a href="#feed">Live Feed</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>

            </ul>
        </nav>
    </header>
    <section class="scrolling-images">
    <img src="climate.jpeg" alt="Image 1">
    <img src="climate2.jpeg" alt="Image 2">
    <img src="climate3.jpeg" alt="Image 3">
    <img src="climate4.jpeg" alt="Image 3">
    <img src="climate5.jpeg" alt="Image 3">
    <img src="climate6.jpeg" alt="Image 3">


    </section>

    <section id="about">
        <h2>About EcoAlert</h2>
        <p>EcoAlert is a platform for citizens to report and share instances of environmental harm. Whether it's illegal dumping, deforestation, or pollution, post it here to spread awareness and drive change.</p>
    </section>

    <section>

    </section><section id="info">
        <h2>Learn More About the Environment</h2>
        <p>Our environment is constantly under threat from pollution, deforestation, and climate change. Educating ourselves about these issues is the first step towards making a difference.</p>
        <div class="info-gallery">
            <div class="info-item">
                <img src="pollution.jpg" alt="Pollution affecting marine life" width="70%">
                <p>Pollution in our oceans harms marine life and disrupts ecosystems.</p>
            </div>
            <div class="info-item">
                <img src="deforestation.jpg" alt="Deforestation impact" width="70%">
                <p>Deforestation leads to habitat loss and contributes to climate change.</p>
            </div>
            <div class="info-item">
                <img src="recycling.jpg" alt="Importance of recycling" width="70%">
                <p>Recycling helps reduce waste and conserves natural resources.</p>
            </div>
        </div>
    </section>
    <section></section>
    <section id="report">
        <h2>Report an Environmental Issue</h2>
        <form>
            <input type="text" placeholder="Title of the Issue" required>
            <textarea placeholder="Describe the issue..." required></textarea>
            <input type="file" accept="image">
            <button type="submit">Submit Report</button>
        </form>
    </section>
    
    <section id="feed">
        <h2>Live Environmental Feed</h2>
        <p>See what others are reporting about environmental issues in real time.</p>
        <button onclick="alert('Please Login!!')">View Feed</button>
        <!-- Dynamic feed will be integrated here -->
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Have questions or suggestions? Reach out to us!</p>
        
        <p>Email: support@ecoalert.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Follow us on <a href="#">Social Media</a></p>
    </section>
    
    <footer>
        <p>&copy; 2025 EcoAlert | Protect Our Planet</p>
    </footer>
</body>
</html>
