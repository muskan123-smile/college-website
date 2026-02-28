
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery</title>

 <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="CSS/style.css"><link rel="stylesheet" href="CSS/contactus.css">


</head>

<body>
<?php include 'Includes/header.php'; ?>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<section class="contact-hero">
  <div class="container">
    <h1>Contact Us</h1>
    <p>
      We're here to help. Whether you have a question about our programs,
      admissions, or campus life, we'd love to hear from you.
    </p>
  </div>
</section>



<section class="contact-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-5 contact-left">
        <p class="small-heading">GET IN TOUCH</p>
        <h2 class="main-heading">Find Us & Connect</h2>

        <div class="contact-info">
          <div class="info-box">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <h5>Address</h5>
              <p>Sagar Institute of Technology & Management, Barabanki, Uttar Pradesh, India</p>
            </div>
          </div>

          <div class="info-box">
            <i class="fas fa-phone-alt"></i>
            <div>
              <h5>Phone</h5>
              <p>+91 9838076745</p>
            </div>
          </div>

          <div class="info-box">
            <i class="fas fa-envelope"></i>
            <div>
              <h5>Email</h5>
              <p>admission.sagar.ac.in@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- RIGHT MAP -->
      <div class="col-lg-7">
        <div class="map-box">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.284918024696!2d81.2415253746997!3d26.926180576639084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399961958bd1ae9d%3A0x7b9720a96a1f2f5f!2sSagar%20Institute%20Of%20Technology%20and%20Management!5e0!3m2!1sen!2sin!4v1772152338237!5m2!1sen!2sin"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>



<section class="department-section">
  <div class="container text-center">
    <h2 class="dept-heading">Direct Department Contacts</h2>

    <div class="row mt-5">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="dept-card">
          <div class="icon-box">
            <i class="fas fa-user"></i>
          </div>
          <h4>Admissions Office</h4>
          <p>admission.sagar.ac.in@gmail.com</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="dept-card">
          <div class="icon-box">
            <i class="fas fa-briefcase"></i>
          </div>
          <h4>Placement Cell</h4>
          <p>placements.sagar.ac.in@gmail.com</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="dept-card">
          <div class="icon-box">
            <i class="fas fa-home"></i>
          </div>
          <h4>Administration</h4>
          <p>admin.sagar.ac.in@gmail.com</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!--Form-->

<section class="contact-section">
    <div class="contact-container">

        <h2 class="contact-heading">Send Us a Message</h2>

        <form class="contact-form">
            <div class="form-row">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
            </div>

            <div class="form-row">
                <input type="tel" placeholder="Your Phone">
                <input type="text" placeholder="Your Subject">
            </div>

            <textarea placeholder="Your Message" rows="6" required></textarea>

            <button type="submit" class="send-btn">Send Message</button>
        </form>

    </div>
</section>

<!--Form End-->



<!-- ===== FOOTER ===== -->
  <?php include 'Includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>