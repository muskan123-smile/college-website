
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
  <link rel="stylesheet" href="CSS/style.css"><link rel="stylesheet" href="CSS/gallery.css">


</head>

<body>
<?php include 'Includes/header.php'; ?>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<div class="container">
<div class="gallery-header text-center">
  <h1 class="gallery-title">Gallery & Events</h1>
  <p class="gallery-desc">
    Discover the vibrant spirit of Parth International School. From classroom 
    discoveries to playground adventures, explore the daily life of our community 
    through our gallery.
  </p>
</div>
  <div class="row g-4 gallery-grid">
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/c1.jpg" onclick="openLightbox(0)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/c2.jpg" onclick="openLightbox(1)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/c3.jpg" onclick="openLightbox(2)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/c4.jpg" onclick="openLightbox(3)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/c5.jpg" onclick="openLightbox(4)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/E1.jpeg" onclick="openLightbox(5)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/sagar.jpg" onclick="openLightbox(6)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/mam.jpg" onclick="openLightbox(7)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/Sec.jpg" onclick="openLightbox(8)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/gallery/.jpeg"  onclick="openLightbox(9)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/gallery/.jpeg" onclick="openLightbox(10)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/gallery/.jpeg" onclick="openLightbox(11)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/images/.jpeg" onclick="openLightbox(12)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/images/.jpeg" onclick="openLightbox(13)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/images/.jpeg" onclick="openLightbox(14)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./Assets/images/.jpeg" onclick="openLightbox(15)">
        </div>
      </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/images/.jpeg" onclick="openLightbox(16)">
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="./assets/images/.jpeg" onclick="openLightbox(16)">
        </div>
      </div>
      </div>
</div>

<!-- ===== Lightbox ===== -->
<div class="lightbox" id="lightbox">
  <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
  <span class="lightbox-btn lightbox-prev" onclick="prevImage()">&#10094;</span>
  <img id="lightbox-img">
  <span class="lightbox-btn lightbox-next" onclick="nextImage()">&#10095;</span>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- gallery code  -->
 <script>
const images = [".\/assets\/gallery\/gallery1.jpeg",".\/assets\/gallery\/gallery10.jpeg",".\/assets\/gallery\/gallery11.jpeg",".\/assets\/gallery\/gallery12.jpeg",".\/assets\/gallery\/gallery13.jpeg",".\/assets\/gallery\/gallery14.jpeg",".\/assets\/gallery\/gallery15.jpeg",".\/assets\/gallery\/gallery16.jpeg",".\/assets\/gallery\/gallery17.jpeg",".\/assets\/gallery\/gallery2.jpeg",".\/assets\/gallery\/gallery3.jpeg",".\/assets\/gallery\/gallery4.jpeg",".\/assets\/gallery\/gallery5.jpeg",".\/assets\/gallery\/gallery6.jpeg",".\/assets\/gallery\/gallery7.jpeg",".\/assets\/gallery\/gallery8.jpeg",".\/assets\/gallery\/gallery9.jpeg"];
let currentIndex = 0;

function openLightbox(index){
  currentIndex = index;
  document.getElementById("lightbox").style.display="flex";
  document.getElementById("lightbox-img").src = images[currentIndex];
}

function closeLightbox(){
  document.getElementById("lightbox").style.display="none";
}

function nextImage(){
  currentIndex = (currentIndex + 1) % images.length;
  document.getElementById("lightbox-img").src = images[currentIndex];
}

function prevImage(){
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  document.getElementById("lightbox-img").src = images[currentIndex];
}
</script>

<!-- ===== FOOTER ===== -->
  <?php include 'Includes/footer.php'; ?>

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