<!DOCTYPE html>
<html lang="en">

<?php 
include('admin/vendor/inc/config.php');
include("vendor/inc/head.php");
if(isset($_POST['submit']))
{

        $name=$_POST['name'];
       
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        
        
        $query = "INSERT INTO tms_contact (name, email, phone, address) VALUES (?, ?, ?, ?)";

        $stmt = $mysqli->prepare($query);
        $rc=$stmt->bind_param('ssss', $name,  $email, $phone, $address);
        $stmt->execute();
            if($stmt)
            {
                $succ = "Account Created Proceed To Log In";
            }
            else 
            {
                $err = "Please Try Again Later";
            }
        }
?>

<body>


  <!-- Navigation -->
 <?php include("vendor/inc/nav.php");?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact Us
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        

        <form method="post">
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-4">
        <div class="form-label-group">
          <input type="text" required class="form-control" id="firstName" name="name">
          <label for="firstName">First name</label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-label-group">
          <input type="text" class="form-control" id="phoneNumber" name="phone" pattern="[0-9]{10}">
          <label for="phoneNumber">Phone number (10 digits)</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-label-group">
      <input type="email" class="form-control" id="inputEmail" name="email" required>
      <label for="inputEmail">Email address</label>
    </div>
  </div>
  <div class="form-group">
    <div class="form-label-group">
      <textarea rows="10" cols="100" class="form-control" id="inputAddress" name="address" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
      <label for="inputAddress">Address</label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-success">Create Account</button>
</form>


      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
            90125 
          <br>Bagulur
          <br>Yelhanka
          <br>Bangalore
        </p>
        <p>
          <abbr title="Phone">Contact Number</abbr>       <a href="tel:8123036689">: 8123036689</a>
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="Mailto:13mammu@gmail.com">   :13mammu@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Hours</abbr>       : Monday - Sunday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
