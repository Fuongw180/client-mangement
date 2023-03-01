<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();

if(isset($_POST['csubmit']))
{
    $fname=$_POST['fname']; //doc dl tu form
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $uimg=$_FILES['uimg']['name']; //storing file name code
    $tempuimg = $_FILES['uimg'] ['tmp_name']; //tempname set

    $proofno=$_POST['proofno'];

    $caddress=$_POST['caddress'];
    $haddress=$_POST['haddress'];
    $rdate=$_POST['rdate'];
    $multiLine=$_POST['multiLine'];
    $depatment=$_POST['depatment'];

    move_uploaded_file($tempuimg,"img/$uimg");  //image upload direction and store path
    move_uploaded_file($tempproof1,"imgproof1/$proof1");  //image upload direction and store path
    move_uploaded_file($tempproof2,"imgproof2/$proof2");  //image upload direction and store path

    $msg=mysqli_query($con,"INSERT INTO `cdetails`(`fname`, `email`, `phone`, `uimg`, `proofno`, `caddress`, `haddress`, `rdate`, `multiLine`, `depatment`) values('$fname','$email','$phone','$uimg','$proofno','$caddress','$haddress','$rdate','$multiLine','$depatment')");
$_SESSION['msg']="Thêm thành công !!";
}
if(isset($_POST['csubmit']))
{
    echo "Thêm thành công";
    header("Location: welcome.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Client Details </title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
              <a href="#" class="logo"><b>Quản lí KH</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Đăng xuất</a></li>
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              <p class="centered"><a href="#"><img src="admin/assets/img/avatar.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">USER</h5>
                    
                  <li class="mt">
                      <a href="Welcome.php" >
                          <i class="fa fa-users"></i>
                          <span>Quản lí khách hàng</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="create.php" >
                          <i class="fa fa-users"></i>
                          <span>Thêm khách hàng</span>
                      </a>
                   
                  </li>

                  <!--<li class="sub-menu">
                      <a href="clientview.php" >
                          <i class="fa fa-users"></i>
                          <span>Client Details</span>
                      </a>
                   
                  </li>-->

                  <li class="sub-menu">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Đổi mật khẩu</span>
                      </a>
                  </li>
              
                 
              </ul>
          </div>
      </aside>
        

        <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Chi tiết khách hàng</h3>
                
                <div class="row">
                
                  
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg']=""; ?></p>
                           
                            <form class="form-horizontal style-form" name="registration" method="post" action="" enctype="multipart/form-data">


                        <!--Start First name -->
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Họ tên </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=""  name="fname" required >
                            </div>
                        </div>
                        <!--End First name -->  
                                   
                        <!--Start Email name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="email" required >
                            </div>
                        </div>
                        <!--End Email name -->

                        <!--Start Phone name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">SĐT </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="phone" required >
                            </div>
                        </div>
                        <!--End Phone name -->

                        <!--Start image name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">User Image </label>
                                <div class="col-sm-10">
                            <input type="file" class="form-control" accept="image/*" value="" name="uimg" required >
                            </div>
                        </div>
                        <!--End image name -->

                        <!--Start Proof No -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Số CMT/CCCD </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="proofno" required >
                            </div>
                        </div>
                        <!--End proof NO --> 

                        <!--Start Company Address -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Địa chỉ làm việc </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="caddress" required >
                            </div>
                        </div>
                        <!--End Company Address -->

                        <!--Start Home Address -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Địa chỉ </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="haddress" required >
                            </div>
                        </div>
                        <!--End Home Address -->

                        <!--Start Regester date -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Ngày sinh </label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" value="" name="rdate" required >
                            </div>
                        </div>
                        <!--End Regester date -->    


                        <!--Start Additionl information -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Ghi chú </label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="multiLine" required ></textarea>    
                            </div>
                        </div>
                        <!--End Additionl information -->
                                
                        <!--Start Departmeent -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Department name </label>
                                <div class="col-sm-10">
                                <select class="form-control" name="depatment">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>   
                            </div>
                        </div>
                        <!--End Department -->
                                 

                        
                        <!--Start Submit button-->   
                        <div class="sign-up" style="margin-left:100px;">
                                <input type="reset" class="btn btn-theme" value="Reset">
                                <input type="submit" class="btn btn-theme" name="csubmit"  value="Xác nhận" >
                                <div class="clear"> </div>
                        </div>
                            </form>
                        <!--End Submit button-->       
                      
                  </div>
              </div>
        </section>
      </section>
      


        </div>

        <br><br>


    
    <script src="admin/assets/js/jquery.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
</body>

</html>
