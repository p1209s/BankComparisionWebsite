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

<h1>Privacy Policy</h1>
<ul>
<p>
	Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
</p>
	<li>
		Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
	</li>
	<li>
		We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.		
	</li>
	<li>
		We will only retain personal information as long as necessary for the fulfillment of those purposes. 
	</li>
	<li>
		We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. 
	</li>
	<li>
		Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. 
	</li>
	<li>
		We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
	</li>
	<li>
		We will make readily available to customers information about our policies and practices relating to the management of personal information. 
	</li>
</ul>
    <ul style="none">
<p>
	We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. 
</p>
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