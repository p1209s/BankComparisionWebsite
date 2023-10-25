<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Credit Card</title>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!---Navigation bar---->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="img/AWT.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="DE.php">HOME</a>
      </li>
      <li class="nav-item">
          <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    LOAN
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Education.php">Education</a>
    <a class="dropdown-item" href="Home.php">Home</a>
    <a class="dropdown-item" href="Vehicle.php">Vehicle</a>
    <a class="dropdown-item" href="Business.php">Business</a>
    <a class="dropdown-item" href="Personal.php">Personal</a>  
    <a class="dropdown-item" href="Agriculture.php">Agriculture</a>
    <a class="dropdown-item" href="Property.php">Property</a>  
  </div>
</div>
      </li>
      <li class="nav-item">
    <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cards Offers
  </button>  
        <div class="dropdown-menu">
        <a class="dropdown-item" href="CreditCard.php">Credit Cards</a>
        <a class="dropdown-item" href="DebitCard.php">Debit Cards</a>
        </div>
          </div>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="Insurance.php">INSURANCE</a>
      </li>
        <li class="nav-item">
         <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    DEPOSIT
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="FD.php">FIXED</a>
    <a class="dropdown-item" href="RD.php">RECURRING</a>
            </div>
        </div>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"> LOGOUT </a>
        </li>
    </ul>
  </div>
</nav>
</section> 

<h1>Terms and Conditions</h1>
<ul>
<h2>1. Terms</h2>

<p>By accessing this Website, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

<h2>2. Use License</h2>

<p>Permission is granted to temporarily download one copy of the materials on Quick compare's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

<ul>
    <li>modify or copy the materials;</li>
    <li>use the materials for any commercial purpose or for any public display;</li>
    <li>attempt to reverse engineer any software contained on Quick compare's Website;</li>
    <li>remove any copyright or other proprietary notations from the materials; or</li>
    <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
</ul>

<p>This will let Quick compare to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format.</p>

<h2>3. Disclaimer</h2>

<p>All the materials on Quick compare’s Website are provided "as is". Quick compare makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, Quick compare does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

<h2>4. Limitations</h2>

<p>Quick compare or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on Quick compare’s Website, even if Quick compare or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

<h2>5. Revisions and Errata</h2>

<p>The materials appearing on Quick compare’s Website may include technical, typographical, or photographic errors. Quick compare will not promise that any of the materials in this Website are accurate, complete, or current. Quick compare may change the materials contained on its Website at any time without notice. Quick compare does not make any commitment to update the materials.</p>

<h2>6. Links</h2>

<p>Quick compare has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by Quick compare of the site. The use of any linked website is at the user’s own risk.</p>

<h2>7. Site Terms of Use Modifications</h2>

<p>Quick compare may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

<h2>8. Your Privacy</h2>

<p>Please read <a href="privacy%20policy.php">our Privacy Policy</a>.</p>

<h2>9. Governing Law</h2>

<p>Any claim related to Quick compare's Website shall be governed by the laws of in without regards to its conflict of law provisions.</p>
    </ul>
   <!------- Footer ------->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Quick Compare</h3>
            <p>
                Address
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About</h4>
            <ul>
              <li><a href="About.php">About us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="terms%20of%20service.php">Terms of service</a></li>
              <li><a href="privacy%20policy.php">Privacy policy</a></li>
            </ul>
          </div>
             <div class="col-lg-2 col-md-6 footer-links">
            <h4>Calculator</h4>
            <ul>
              <li><a href="EMICalculator.php">EMI Calculator</a></li>
              <li><a href="FDCalculator.php">FD Calculator</a></li>
              <li><a href="RDCalculator.php">RD Calculator</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Quick Compare</span></strong>. All Rights Reserved
        </div>
        </div>
      </div>
      
  </footer><!-- End Footer -->
    
    
</body>
</html>