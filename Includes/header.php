<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Website</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<!-- ===== TOP ADMISSION BAR ===== -->
<div class="top-bar" id="topBar">
  <div class="container d-flex align-items-center justify-content-center flex-wrap gap-2 position-relative">

    <span class="top-text text-center">
      ADMISSIONS OPEN FOR 2026-27
    </span>

    <a href="admissions.php" class="btn apply-btn fw-bold">
      APPLY NOW
    </a>

    <span class="top-close position-absolute end-0 me-3" id="topClose">&times;</span>

  </div>
</div>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg main-navbar shadow-sm">
  
  <div class="container d-flex align-items-center">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="Assets/images/logo.png" alt="Logo" class="logo">
    </a>

    <!-- INQUIRY BUTTON -->
    <a href="admissions.php" 
       class="btn inquiry-btn ms-lg-auto me-lg-4 order-lg-3">
       Admissions Inquiry
    </a>

    <!-- TOGGLE BUTTON -->
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainMenu"
            aria-controls="mainMenu"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
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

        <!-- ===== COLLEGES DROPDOWN ===== -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
             href="#"
             id="collegesDropdown"
             role="button"
             data-bs-toggle="dropdown"
             aria-expanded="false">
             Colleges
          </a>

          <ul class="dropdown-menu shadow border-0">
            <li>
              <a class="dropdown-item" href="sagar-engineering.php">
                Sagar Engineering
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="sagar-pharmacy.php">
                Sagar Pharmacy
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="sagar-school.php">
                Sagar International School
              </a>
            </li>
          </ul>
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

<!-- TOP BAR CLOSE -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const closeBtn = document.getElementById("topClose");
  const bar = document.getElementById("topBar");

  if (closeBtn && bar) {
    closeBtn.addEventListener("click", function () {
      bar.style.display = "none";
    });
  }
});
</script>

<!-- AUTO CLOSE MENU ON MOBILE -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const menu = document.getElementById("mainMenu");
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

  navLinks.forEach(link => {
    link.addEventListener("click", () => {
      const bsCollapse = bootstrap.Collapse.getInstance(menu);
      if (bsCollapse) {
        bsCollapse.hide();
      }
    });
  });

});
</script>

</body>
</html>