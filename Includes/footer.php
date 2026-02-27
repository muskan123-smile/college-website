<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ===== FOOTER ===== -->
  <link rel="stylesheet" href="CSS/footer.css">

<footer class="footer-section text-white pt-5 pb-3">
  <div class="container">

    <div class="row g-4">

      <!-- COLLEGE INFO -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-about">
          <img src="Assets/images/logo.png" class="footer-logo mb-3 rounded" alt="logo">

          <p>
            Address: Faizabad Road, Barabanki, 225203
          </p>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="aboutus.php" class="">About Us</a></li>
          <li><a href="/">Admissions</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>

      <!-- CONTACT -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-title">Contact Us</h5>

        <ul class="footer-contact">
          <li>
            <i class="fa-solid fa-location-dot"></i>
          Address: Faizabad Road, Barabanki, 225203
          </li>
         <li>
  <i class="fa-solid fa-phone"></i>
  <a href="tel:+919838076745" class="contact-link text-white">
    +91 +91 9838076745
  </a>
</li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            admission.sagar.ac.in@gmail.com
          </li>
        </ul>
      </div>

      <!-- SOCIAL -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-title">Follow Us</h5>

        <div class="footer-social">
  <a href="#" aria-label="Facebook">
    <i class="fa-brands fa-facebook-f"></i>
  </a>
  <a href="#" aria-label="Twitter">
    <i class="fa-brands fa-twitter"></i>
  </a>
  <a href="#" aria-label="YouTube">
    <i class="fa-brands fa-youtube"></i>
  </a>
  <a href="#" aria-label="Instagram">
    <i class="fa-brands fa-instagram"></i>
  </a>
</div>
      </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom text-center mt-4 pt-3">
      Copyright © 2026 Sagar College 
      
    </div>
  </div>
</footer>

<!-- FLOATING WHATSAPP WIDGET -->
<!-- WHATSAPP -->
<div class="wa-widget">
  <a id="waLink"
     href="https://wa.me/919415837201"
     target="_blank"
     aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const messages = [
    "Hello, I want to know about admissions.",
    "Hi, please share admission details.",
    "I want to inquire about school admission.",
    "Can you guide me about admission process?",
    "I am interested in admission for my child.",
    "Please provide fee and admission information."
  ];

  const randomMsg = messages[Math.floor(Math.random() * messages.length)];
  const waLink = document.getElementById("waLink");

  if (waLink) {
    waLink.href = "https://wa.me/919415837201?text=" + encodeURIComponent(randomMsg);
  }

});
</script>
<!-- PHONE -->
<div class="phone-widget">
  <a href="tel:+919415837201" aria-label="Call Now">
    <i class="fa-solid fa-phone"></i>
  </a>
</div>

 
    
</body>
</html>