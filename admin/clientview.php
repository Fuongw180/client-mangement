<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();
if(isset($_GET['ID']))
{
$adminid=$_GET['ID'];
$msg=mysqli_query($con,"DELETE FROM `cdetails` WHERE ID='$adminid'");
if($msg)
{
echo "<script>alert('Đã xóa'); location.replace('clientview.php');</script>";
}
}

	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Client Details </title>
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
            <h3><i class="fa fa-angle-right"></i> Chi tiết khách hàng</h3>
                <div class="row">
                
                  
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i> Tất cả khách hàng </h4>
                              <hr>
                              <thead>
                              <tr>
                                  <th>STT</th>
                                  <th class="hidden-phone">Họ tên</th>
                                  <th>Địa chỉ</th>
                                  <th>Email</th>
                                  <th>SĐT</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"SELECT * FROM `cdetails`");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fname'];?></td>
                                  <td><?php echo $row['haddress'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['phone'];?></td>
                                  <td><img style="width:50px;height: 50px;object-fit: contain" src="../img/<?php echo $row['uimg']; ?>"></td>
                                  <td>
                                     
                                     <a href="update-clients.php?uid=<?php echo $row['ID'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <!-- <a href="clientview.php?ID=<?php echo $row['ID'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Bạn thực sự muốn xóa?');"><i class="fa fa-trash-o "></i></button></a>*/ -->
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
        </section>
      </section>
      </section>
      


        

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
