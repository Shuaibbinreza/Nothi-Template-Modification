<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Side Navigation Bar</title>
<style>
/* CSS for the side navigation bar */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the links inside the navigation bar */
.sidenav a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 18px;
  color: white;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Hide all sections by default */
.section {
  display: none;
}
</style>
</head>
<body>

<!-- Side Navigation Bar -->
<div class="sidenav">
  <a onclick="showSection('home')">Home</a>
  <a onclick="showSection('about')">About</a>
  <a onclick="showSection('services')">Services</a>
  <a onclick="showSection('contact')">Contact</a>
</div>

<!-- Page content -->
<div style="margin-left: 200px; padding: 20px;">
  <!-- Components of Each Navigation Item -->
  <div id="home" class="section">
    <h2>Home</h2>
    <p>Welcome to our website!</p>
  </div>

  <div id="about" class="section">
    <h2>About Us</h2>
    <p>Learn more about our company.</p>
  </div>

  <div id="services" class="section">
    <h2>Our Services</h2>
    <p>Explore the services we offer.</p>
  </div>

  <div id="contact" class="section">
    <h2>Contact Us</h2>
    <p>Get in touch with us.</p>
  </div>
</div>

<script>
function showSection(sectionId) {
  // Hide all sections
  var sections = document.getElementsByClassName('section');
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = 'none';
  }

  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}
// Initially show the home section
showSection('home');
</script>

</body>
</html>
