<?php 
include 'publicheader.php';

if (isset($_POST['button']))
{
  extract($_POST);

$q="select * from tbl_login where username='$email' and password='$password'";
  $res=select($q);
  // print_r($res);
  if (sizeof($res)>0) 
  {
      return redirect("userhome.php");
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
                        
                        <!-- <div class="card" style="width: 500px;margin-top: 5em;opacity: .7;border-radius: 3%;"> -->
                          <center>
                      <form style="width: 620px; margin-top: 16%;" method="post" >
                        <h3 style="font-size: 17px;color: #fff;">Login</h3>
                        <br>
                          <div class="form-group col-md-6">
                            <!-- <label for="inputemail">Email</label> -->
                            <input type="email" name="email" placeholder="Enter your email" class="form-control" id="inputCity" Required style="opacity: .7;">
                          </div>
                          <div class="form-group col-md-6">
                            <!-- <label for="inputpass">Password</label> -->
                            <input type="password" name="password" placeholder="Enter your password" class="form-control" id="inputCity" required style="opacity: .7;" maxlength="20" >
                          </div>
                          <div class="form-group col-md-6">
                          <input type="submit" name="button" class="btn btn-danger" value="Login" style="opacity: .7; width: 90px;">
                        </div>
                      </form>
                      </center>
<!-- </div> -->
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
           
           
        </div>
    </div>
    <!-- hero slider end -->

