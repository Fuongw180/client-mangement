<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $img=$_POST['uimg'];
    $proofno=$_POST['proofno'];
    $caddress=$_POST['caddress'];
    $haddress=$_POST['haddress'];
    $rdate=$_POST['rdate'];
    $multiLine=$_POST['multiLine'];
    $depatment=$_POST['depatment'];

    mysqli_query($con,"update cdetails set fname='$fname',email='$email',phone='$phone',uimg='$img',proofno='$proofno',caddress='$caddress',haddress='$haddress',rdate='$rdate',multiLine='$multiLine',depatment='$depatment' where id='".$_GET['uid']."'");
	
$_SESSION['msg']="Cập nhật thành công";
header("Location: manage-users.php");
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

    <title>Admin | Sửa thông tin khách hàng</title>
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
      <?php $ret=mysqli_query($con,"select * from cdetails WHERE ID='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Sửa thông tin khách hàng <?php echo $row['fname'];?></h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
  
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Họ tên </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['fname'];?>"  name="fname" required >
                            </div>
                        </div>
 
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['email'];?>" name="email" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">SĐT </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['phone'];?>" name="phone" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">User Image </label>
                                <div class="col-sm-10">
                            <input type="file" class="form-control" accept="image/*" value="<?php echo $row['uimg'];?>" name="uimg" >
                            </div>
                        </div>
 
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Số CMT/CCCD </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['proofno'];?>" name="proofno" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Địa chỉ làm việc </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['caddress'];?>" name="caddress" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Địa chỉ </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['haddress'];?>" name="haddress" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Ngày sinh </label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" value="<?php echo $row['rdate'];?>" name="rdate" required >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Ghi chú </label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="multiLine" ></textarea>    
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Xếp loại </label>
                                <div class="col-sm-10">
                                <select class="form-control" name="depatment">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>   
                            </div>
                        </div>




                          <div style="margin-left:100px;">
                          <input type="submit" name="submit" value="Cập nhật" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
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
