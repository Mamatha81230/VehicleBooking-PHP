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
