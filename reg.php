<?php 
include 'publicheader.php';



if (isset($_POST['button'])) 
{
  extract($_POST);
  $q0="SELECT * FROM `tbl_customer` WHERE name='$email'";
  $q01=select($q0);
  if (sizeof($q01)>0) 
  {
    alert("The Username you entered already Exists. Please choose a different Username.");
    return redirect("reg.php");
  }
  else
  {
  $q="insert into tbl_login values(NULL,'$email','$password')";
  $res=insert($q);
  $q1="insert into tbl_customer values(NULL,'$res','$fname','$email','$phone')";
  insert($q1);
   return redirect ('reg.php');
}
}

?>

<style type="text/css">
  #ph{
    color: #fff;
  }
</style>


<!-- hero slider Start -->
<div class="banner-wrap">
  <div class="banner-slider">
    <!-- hero slide start -->
    <div class="banner-slide bg1">
      <div class="container">
        <div class="hero-content">
                        
          <!-- <div class="contanier" style="margin-top: 50;" align="center"> -->
            <center>
            <form style="width: 50%; margin-top: 7%" method="post">
            <h3 style="font-size: 17px; color: #fff;">Sign up</h3>
            <br>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputemail">Email</label>
              <input type="email" placeholder="Enter Email" name="email" class="form-control" id="inputCity" style="opacity: 0.7" required>
            </div>
            <div class="form-group col-md-6" >
              <label for="inputpass">Password</label>
              <input type="password" placeholder="Enter Password" name="password" class="form-control" id="inputCity" style="opacity: 0.7" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputfname"> Name</label>
              <input type="text" placeholder="Enter First Name" name="fname" class="form-control" id="inputEmail4" style="opacity: 0.7" required>
            </div>
           
            
            <div class="form-group col-md-6">
              <label for="inputphone">Phone</label>
              <input type="number" placeholder="Enter Phone No" min="0" minlength="10" maxlength="10" name="phone" class="form-control" id="inputAddress2" style="opacity: 0.7" required pattern=[0-9]{10}>
            </div>
            <div class="form-group col-md-6">
                          <input type="submit" name="button" class="btn btn-danger" value="Register" style="opacity: .7; width: 90px;">
                        </div>
            </div>
           
            </form>
          </center>

        </div>
      </div>
      <div class="hero-overlay">
      </div>
    </div>
            <!-- hero slide end -->

