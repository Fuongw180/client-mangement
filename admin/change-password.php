<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();
if(isset($_POST['Submit']))
{
$oldpassword=md5($_POST['oldpass']);
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpassword'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$adminid=$_SESSION['id'];
$newpass=md5($_POST['newpass']);
 $ret=mysqli_query($con,"update admin set password='$newpass' where id='$adminid'");
$_SESSION['msg']="Thành công !!";
//header('location:user.php');
}
else
{
$_SESSION['msg']="Mật khẩu cũ không đúng !!";
}
}
?>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.form1.oldpass.value=="")
{
alert(" Mật khẩu cũ trống !!");
document.form1.oldpass.focus();
return false;
}
else if(document.form1.newpass.value=="")
{
alert(" Mật khẩu mới trống !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value=="")
{
alert(" Nhập lại mật khẩu mới trống !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value.length<6)
{
alert(" Mật khẩu phải chứa ít nhất 6 kí tự !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value.length<6)
{
alert(" Nhập lại mật khẩu phải chứa ít nhất 6 kí tự !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value!= document.form1.confirmpassword.value)
{
alert("Mật khẩu mới và nhập lại mật khẩu mới không khớp  !!");
document.form1.newpass.focus();
return false;
}
return true;
}
</script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Đổi mật khẩu</title>
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
          	<h3><i class="fa fa-angle-right"></i> Đổi mật khẩu </h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Mật khẩu cũ</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="oldpass" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Mật khẩu mới</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="newpass" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Nhập lại mật khẩu mới</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="confirmpassword" value="" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Xác nhận" class="btn btn-theme"></div>
                          </form>
                      </div>
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
