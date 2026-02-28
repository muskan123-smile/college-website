<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
 <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="CSS/style.css"><link rel="stylesheet" href="CSS/admission.css">




</head>
<body>
<?php include 'Includes/header.php'; ?>



<!-- HERO -->
<section class="inst-hero">
  
  <div class="inst-hero-overlay"></div>

  <div class="inst-hero-content">
    <div class="inst-breadcrumb">Home / Admissions</div>
    <h1>ADMISSIONS</h1>
  </div>

</section>

<section class="admission-section py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-5 heading">How to Complete Your Admission</h2>

        <div class="row g-4">

            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-box">
                    <h1 class="step-number">01</h1>
                    <h5 class="step-title">Fill Details</h5>
                    <p>
                        Enter your name, contact number, email,
                        and select the course you wish to apply for.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-box">
                    <h1 class="step-number">02</h1>
                    <h5 class="step-title">Scan & Pay</h5>
                    <p>
                        Use GPay, PhonePe, or Paytm to scan
                        the QR code and pay the ₹1000 application fee.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-box">
                    <h1 class="step-number">03</h1>
                    <h5 class="step-title">Enter UTR</h5>
                    <p>
                        Copy the 12-digit Transaction ID (UTR)
                        and paste it into the form as proof.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-box">
                    <h1 class="step-number">04</h1>
                    <h5 class="step-title">Submit</h5>
                    <p>
                        Click submit. WhatsApp will open with
                        your details pre-filled for confirmation.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>



<div class="college-section py-5">

  <div class="container">

    <h1 class="section-title">Select Your College</h1>

    <div class="row g-4 mt-4">

      <!-- Pharmacy -->
      <div class="col-lg-4 col-md-6">
        <div class="card-box">
          <div class="icon-circle">
            <i class="fa-solid fa-prescription-bottle-medical"></i>
          </div>

          <h5 class="card-title">Sagar Pharmacy College</h5>

          <p class="card-text">
            Apply for B.Pharm and D.Pharm programs with practical training in healthcare.
          </p>

          <a href="#" class="admission-btn">ADMISSION NOW</a>
        </div>
      </div>

      <!-- School -->
      <div class="col-lg-4 col-md-6">
        <div class="card-box">
          <div class="icon-circle">
            <i class="fa-solid fa-school"></i>
          </div>

          <h5 class="card-title">Sagar International School</h5>

          <p class="card-text">
            Apply for Primary & Secondary School Programs.
          </p>

          <a href="#" class="admission-btn">ADMISSION NOW</a>
        </div>
      </div>

      <!-- Degree -->
      <div class="col-lg-4 col-md-6">
        <div class="card-box">
          <div class="icon-circle">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>

          <h5 class="card-title">Sagar Engineering  College</h5>

          <p class="card-text">
            Apply for B.Tech and BCA & BBA/MBA degree programs.
          </p>

          <a href="#" class="admission-btn">ADMISSION NOW</a>
        </div>
      </div>

    </div>

  </div>

</div>



<section class="admission-form-section">
  <div class="container">

    <div class="admission-card">

      <!-- LOGO -->
      <div class="admission-logo">
        <img src="assets/images/logo.png" alt="Geeta Group of Colleges">
      </div>

      <!-- TITLE -->
      <div class="admission-head text-center">
        <h3>Sagar Institute of Technology & Management</h3>
        <p>Admission Registration Form 2026–27</p>
      </div>

      <!-- PROGRAM DETAILS -->
      <div class="form-block">
        <div class="form-block-title">Program Details</div>

        <div class="form-grid">
          <div class="form-field full">
            <label>Course Applied For</label>
            <select>
              <option>Select Course</option>
              <option>B.Pharm</option>
              <option>D.Pharm</option>
              <option>B.Tech</option>
              <option>BCA</option>
              <option>BBA</option>
              <option>MBA</option>
            </select>
          </div>
        </div>
      </div>

      <!-- PERSONAL -->
      <div class="form-block">
        <div class="form-block-title">Personal Information</div>

        <div class="form-grid">
          <div class="form-field">
            <label>Full Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Date of Birth</label>
            <input type="date">
          </div>

          <div class="form-field">
            <label>Father's Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Mother's Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Gender</label>
            <select>
              <option>Select</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>

          <div class="form-field">
            <label>Category</label>
            <select>
              <option>General</option>
              <option>OBC</option>
              <option>SC</option>
              <option>ST</option>
            </select>
          </div>
        </div>
      </div>

      <!-- CONTACT -->
      <div class="form-block">
        <div class="form-block-title">Contact Details</div>

        <div class="form-grid">
          <div class="form-field">
            <label>Mobile Number</label>
            <input type="tel">
          </div>

          <div class="form-field">
            <label>Email Address</label>
            <input type="email">
          </div>

          <div class="form-field full">
            <label>Permanent Address</label>
            <textarea rows="3"></textarea>
          </div>

          <div class="form-field">
            <label>City</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>State</label>
            <input type="text">
          </div>

         
        </div>

        <div class="form-block">
        <div class="form-block-title">Payment Details</div>


        <div class="form-grid">
          <div class="form-field full">
            <label>Payment Transaction ID (UTR) *</label>
            <input type="number" placeholder= "Enter 12 digit UTR number">
          </div>
        

        <div class="form-grid">
          <div class="form-field full">
            <label>Payment Date</label>
            <input type="date" placeholder= "">
          </div>

          </div>
        </div>
      </div>
         <div class="form-submit">
  <button type="submit" class="admission-submit-btn w-100">
    Submit Admission Form
  </button>
</div>
      </div>
      

    </div>
  </div>
</section>








<?php include 'Includes/footer.php'; ?>
    
</body>
</html>
