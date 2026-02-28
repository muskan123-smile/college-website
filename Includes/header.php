<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Website</title>



<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="CSS/style.css"><link rel="stylesheet" href="CSS/gallery.css">



<style>


</style>

</head>

<body>

<!-- ===== TOP ADMISSION BAR ===== -->
<div class="top-bar fixed-top" id="topBar">
  <div class="container topbar-inner">

    <span class="top-text">
      ADMISSIONS OPEN FOR 2026-27
    </span>

    <a href="admissions.php" 
       class="btn apply-btn fw-bold">
      APPLY NOW
    </a>

    <span class="top-close" id="topClose">&times;</span>

  </div>
</div>

<!-- ===== NAVBAR ===== -->
<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg main-navbar sticky-top shadow-sm">
<!-- INQUIRY BUTTON -->
   
  <div class="container d-flex align-items-center">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="Assets/images/logo.png" alt="Logo" class="logo">
    </a>
 <a href="admissions.php" 
   class="btn inquiry-btn ms-lg-auto me-lg-5 order-lg-3">
   Admissions Inquiry
</a>

    <!-- TOGGLE -->
   <button class="navbar-toggler order-lg-4" 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainMenu"
        aria-expanded="false"
        id="navToggle">
  <span class="toggler-icon"></span>
</button>
    <!-- MENU -->
    <div class="collapse navbar-collapse justify-content-center order-lg-2" id="mainMenu">
      <ul class="navbar-nav align-items-lg-center gap-lg-4">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>

       
        <li class="nav-item">
          <a class="nav-link" href="colleges.php">Colleges</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="admission.php">Admission</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="placement.php">Placement</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>

      </ul>
    </div>

    

  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- TOP BAR CLOSE SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const closeBtn = document.getElementById("topClose");
  const bar = document.getElementById("topBar");

  if (closeBtn && bar) {
    closeBtn.addEventListener("click", function () {
      bar.classList.add("hide-bar");
    });
  }
});
</script>



<script>
const toggleBtn = document.getElementById("navToggle");
const menu = document.getElementById("mainMenu");

menu.addEventListener("show.bs.collapse", () => {
  toggleBtn.classList.add("open");
});

menu.addEventListener("hide.bs.collapse", () => {
  toggleBtn.classList.remove("open");
});
</script>


        

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>