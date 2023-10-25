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
        <h1>Contact Us</h1>
    <ol>
        <p align="center">If you have any Problem/Suggestion related to our website please inform!</p></ol>
        <div class="row mt-5 justify-content-center">
          <div class="col-lg-5">
            <form action="#contact" method="post">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" required="" placeholder="Your Name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" required="" placeholder="Your Email">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" required="" placeholder="Subject"]>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message/Suggestion" required=""></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div><br>
          <?php 
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
        
               $s="insert into contact(name, email, subject, message) values ('".$name."','".$email."','".$subject."','".$message."')";
              if (mysqli_query($a, $s))
              {
                  echo "Thanks for your message!";
              }
                else {
                        echo "Error: " . $s . ":-" . mysqli_error($a);
                    }
                mysqli_close($a);
        }
        ?>
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