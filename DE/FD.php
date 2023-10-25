<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Fixed Deposit</title>
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
<form action="FD.php" method="post">
    <div class="table">
    <h1>Fixed Deposit</h1>
<table border="2">
    <thead class="table-primary">
<tr>
<td>
Select Bank <select name="bank1">
<option>Surat National Co-op. Bank Ltd.</option>
<option>Induslnd</option>
<option>Bank of Baroda</option>
<option>IDBI</option>
<option>Bank of India</option>
<option>SBI</option>
<option>HDFC</option>
<option>ICICI</option>
<option>AXIS</option>
<option>Central Bank of India</option>
<option>CITI</option>
<option>Federal</option>
<option>Kotak Mahindra</option>
</select></td>

<td>
Select Bank <select name="bank2">
<option>Surat National Co-op. Bank Ltd.</option>
<option>Induslnd</option>
<option>Bank of Baroda</option>
<option>IDBI</option>
<option>Bank of India</option>
<option>SBI</option>
<option>HDFC</option>
<option>ICICI</option>
<option>AXIS</option>
<option>Central Bank of India</option>
<option>CITI</option>
<option>Federal</option>
<option>Kotak Mahindra</option>
</select></td>
        </tr></thead>

</table><br>
<p align="center"><input type="submit" name="submit"></p>
    </div>
</form>
<?php
if(isset($_POST['submit']))
{
$bank1=$_POST['bank1'];
$bank2=$_POST['bank2'];


$q1="select * from fd where Bank='$bank1'";
$run=mysqli_query($a,$q1);
$q2="select * from fd where Bank='$bank2'";
$run1=mysqli_query($a,$q2);
while($row=mysqli_fetch_array($run))
{
$Amount=$row['Amount'];
$Rate=$row['Rate'];
$Year=$row['TimePeriod'];

$row=mysqli_fetch_array($run1);
$Amount1=$row['Amount'];
$Rate1=$row['Rate'];
$Year1=$row['TimePeriod'];


?>
    <div class="table"> 
<table border="2">
    <thead class="table-danger">
<tr>
    <td ><?php echo "$bank1"; ?></td><td ><?php echo "$bank2"; ?></td></tr></thead>
<tbody><tr>
<td ><?php echo "Amount: $Amount"; ?></td><td ><?php echo "Amount: $Amount1"; ?></td></tr>
<tr><td ><?php echo "Rate: $Rate"; ?></td><td ><?php echo "Rate: $Rate1"; ?></td></tr>
<tr><td ><?php echo "TimePeriod: $Year"; ?></td><td ><?php echo "TimePeriod: $Year1"; ?>
    </tr></tbody><br>

        </table></div>
<?php
}}

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