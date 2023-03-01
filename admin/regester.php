<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=md5($password);
	$a=date('Y-m-d');
	$msg=mysqli_query($con,"insert into users(fname,email,password,contactno) values('$fname','$email','$enc_password','$contact')");
$_SESSION['msg']="Register successfully";
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

    <title>Admin | Đăng kí người dùng</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
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
              
              <p class="centered"><a href="#"><img src="assets/img/avatar.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">ADMIN</h5>
              	  	
                  <li class="mt">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Quản lý người dùng</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="regester.php" >
                          <i class="fa fa-users"></i>
                          <span>Tạo người dùng</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="clientview.php" >
                          <i class="fa fa-users"></i>
                          <span>Chi tiết khách hàng</span>
                      </a>
                   
                  </li>

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
          	<h3><i class="fa fa-angle-right"></i> Đăng kí người dùng</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg']=""; ?></p>
                           
							<form class="form-horizontal style-form" name="registration" method="post" action="" enctype="multipart/form-data">


                        <div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Họ tên </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value=""  name="fname" required >
							</div>
						</div>	

								
						<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" value="" name="email"  >
							</div>
						</div>	
								

						<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Mật khẩu </label>
								<div class="col-sm-10">
								<input type="password" class="form-control" value="" name="password" required>
							</div>
						</div>				

						<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">SĐT </label>
								<div class="col-sm-10">
								<input type="text" class="form-control" value="" name="contact"  required>
							</div>
						</div>
							
						<div class="sign-up" style="margin-left:100px;">
								<input type="reset" class="btn btn-theme" value="Đặt lại">
								<input type="submit" class="btn btn-theme" name="signup"  value="Đăng kí" >
								<div class="clear"> </div>
						</div>
							</form>
                      
                  </div>
              </div>
		</section>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
