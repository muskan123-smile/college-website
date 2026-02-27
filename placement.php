<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement</title>
 <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="CSS/style.css"><link rel="stylesheet" href="CSS/placement.css">




</head>
<body>
<?php include 'Includes/header.php'; ?>



<!-- HERO -->
<section class="inst-hero">
  
  <div class="inst-hero-overlay"></div>

  <div class="inst-hero-content">
    <div class="inst-breadcrumb">Home / Placement</div>
    <h1>Training & Placement</h1>
  </div>

</section>


<section class="placement-section">
  <div class="container">
    <div class="placement-box">

      <div class="row align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-lg-5 text-center text-lg-start">
          <h1 class="placement-percent">95%</h1>
          <h5 class="placement-label">PLACEMENT RATE</h5>
          <p class="placement-note">
            *For eligible students who opt for placements.
          </p>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-7">
          <p class="small-title">A MESSAGE FROM THE PLACEMENT CELL</p>
          <h2 class="main-title">Connecting Talent with Opportunity</h2>
          <p class="description">
            Our dedicated Career Services team works tirelessly to bridge the gap 
            between our students and the corporate world. Through rigorous training, 
            mock interviews, and strong industry partnerships, we ensure our 
            graduates are not just job-ready, but future-ready.
          </p>
        </div>

      </div>

    </div>
  </div>
</section>

<!--LOGO SECTION START-->

<section class="affiliation-section pt-5">
  <div class="container text-center">
    
    <h1 class="section-title mb-5">
      Top Recruiters
    </h1>

    <div class="row justify-content-center align-items-center gx-5 gy-4">

      <div class="col-6 col-md-3 col-lg-2 text-center">
        <img src="Assets/images/upglogo4.jpg" class="affiliation-logo" alt="">
      </div>

      <div class="col-6 col-md-3 col-lg-2 text-center">
        <img src="Assets/images/aictelogo.jpg" class="affiliation-logo" alt="">
      </div>

      <div class="col-6 col-md-3 col-lg-2 text-center">
        <img src="Assets/images/plogo5.jpg" class="affiliation-logo" alt="">
      </div>

      <div class="col-6 col-md-3 col-lg-2 text-center">
        <img src="Assets/images/aktulogo.jpg" class="affiliation-logo" alt="">
      </div>

    </div>
  </div>
</section>

<!--LOGO SECTION END-->


<section class="placement-section">
    <h2>Placement Statistics</h2>

    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-number" data-target="95" data-prefix="" data-suffix="%+">0</div>
            <div class="stat-text">Placement Rate</div>
        </div>

        <div class="stat-card">
            <div class="stat-number" data-target="500" data-prefix="" data-suffix="+">0</div>
            <div class="stat-text">Students Placed</div>
        </div>

        <div class="stat-card">
            <div class="stat-number" data-target="50" data-prefix="" data-suffix="+">0</div>
            <div class="stat-text">Recruiting Companies</div>
        </div>

        <div class="stat-card">
            <div class="stat-number" data-target="8" data-prefix="₹" data-suffix="+ LPA">0</div>
            <div class="stat-text">Average Salary</div>
        </div>
    </div>
</section>

<script>
const counters = document.querySelectorAll('.stat-number');
const speed = 1000;

const animateCounters = () => {
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const prefix = counter.getAttribute('data-prefix');
        const suffix = counter.getAttribute('data-suffix');
        const increment = target / speed;

        const updateCount = () => {
            const count = parseInt(counter.innerText.replace(/\D/g,'')) || 0;

            if(count < target){
                counter.innerText = prefix + Math.ceil(count + increment) + suffix;
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = prefix + target + suffix;
            }
        };

        updateCount();
    });
};

const cards = document.querySelectorAll('.stat-card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('show');
            animateCounters();
        }
    });
},{ threshold:0.3 });

cards.forEach(card => observer.observe(card));
</script>


<section class="placement-cta">
    <div class="cta-container">
        <h2>Take the Next Step in Your Career Journey</h2>
        <p>
            Our placement record speaks for itself. For a detailed report on past recruitment
            drives, salary packages, and company partnerships, download our official brochure.
        </p>
        <a href="#" class="cta-btn">DOWNLOAD PLACEMENT BROCHURE</a>
    </div>
</section>








<?php include 'Includes/footer.php'; ?>
    
</body>
</html>
