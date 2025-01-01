<?php 
session_start();
if(isset($_SESSION['bankuser']))
{
	?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Bank User</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
	  
	  <style>
.dropbtn {
  background-color: #fcce2d;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  width:430px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width:430px;
}

.dropdown-content a {
  color: black;
  padding: 8px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: black;}
</style>
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.pho"><img src="images/logob.png" style="height:100px;"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#search1">Search</a>
                     </li>
					 <li class="nav-item">
                        <a class="nav-link" href="#search">Histroy</a>
                     </li>
					 <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                     </li>
                  </ul>
                  <div class="call_section">
                     <ul>
                        <div class="donate_bt"><a href="logout.php"><img src="images/logout.png"></a></div>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">IFSC Code Finder</h1>
                              <p class="banner_text">Eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                              <div class="btn_main">
                                 <div class="quote_bt"><a href="#">Search</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/vec.png" style="height:450px;width:400px;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">USER NEEDS</h1>
                              <p class="banner_text">Eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                              <div class="btn_main">
                                 <div class="quote_bt"><a href="#">Search</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/vec2.png" style="height:450px;width:500px;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">VARIOUS BANK</h1>
                              <p class="banner_text">Eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                              <div class="btn_main">
                                 <div class="quote_bt"><a href="#">Search</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
   </div>
   <!--header section end -->
   
   <!-- about section start -->
   <div class="news_section layout_padding" id="search1">
      <div class="container">
         <h1 class="news_taital">Search By Bank</h1>
         
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="news_taital_box">
                     <h4 class="make_text">IFSC Code Finder :</h4>
                     <form action="#" method="post">
					  <div>
						<div class="dropdown">
						  <button class="dropbtn">Select Bank</button>
						  <div class="dropdown-content">
						  <?php
						include 'config.php';
						$sql1 = "select * from bank";
						$result1 = mysqli_query($con,$sql1);
						$num1=mysqlI_num_rows($result1);
						$sl=0;
						if($num1 > 0)
						{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
						$sl+=1;
						$id=$row1[0];
						$bankname=$row1['bankname'];
						?>
							<a href="search.php?sea=<?php echo $id; ?>"><?php echo $bankname;?></a>
							<?php
						}
						}
						?>
						  </div>
						</div>
					  </div><br>
					  
                 
					</form>
                  
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/bank2.jpg" class="image_6" style="width:100%">
                  <h6 class="plus_text">+</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   
   
    <!-- about section start -->
   <div class="news_section layout_padding" id="search">
      <div class="container">
         <h1 class="news_taital">Search Histroy</h1>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-12">
                  <div class="news_taital_box">
                     <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Bank Name</th>
                            <th>IFSC Code</th>
                            <th>City</th>
                            <th>MICR Number</th>
                            <th>Creation Date</th>
                            <th>Search Date</th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
								include 'config.php';
								$sql1 = "SELECT bank.bankname, branch.ifsc,branch.city,branch.micr,branch.cdate, search.bankuser, search.locationid, search.sdate FROM branch INNER JOIN bank ON bank.id=branch.bankname INNER JOIN search on branch.id=search.locationid where search.bankuser='".$_SESSION['bankuser']."' ";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$bankname=$row1['bankname'];
								$ifsc=$row1['ifsc'];
								$city=$row1['city'];
								$micr=$row1['micr'];
								$cdate=$row1['cdate'];
								$sdate=$row1['sdate'];
								}
								}
								?>
                          <tr>
                            <td><?php echo $bankname; ?></td>
                            <td><?php echo $ifsc; ?></td>
                            <td><?php echo $city; ?></td>
                            <td><?php echo $micr; ?></td>
                            <td><?php echo $cdate; ?></td>
                            <td><?php echo $sdate; ?></td>
                          </tr>
                          
                        </tbody>
                      </table>
                  
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   

   <!-- about section start -->
   <div class="news_section layout_padding" id="about">
      <div class="container">
         <h1 class="news_taital">About Us</h1>
         
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="news_taital_box">
                     <h4 class="make_text">Make it Simple</h4>
                     <p class="lorem_text">The Indian Financial System Code (IFSC), is a unique 11-digit alphanumeric code that is used for online fund transfer transactions done via NEFT, RTGS and IMPS.</p>
                  
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/bank.jpg" class="image_6" style="width:100%">
                  <h6 class="plus_text">+</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   

   <!-- footer section start -->
   <div class="footer_section layout_padding" id="contact">
      <div class="container">
        
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 margin_top">
                  <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call
                           Now +01 9876543210</span></a></div>
                  <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span
                           class="padding_left_15">demo@gmail.com</span></a></div>
               </div>
               <div class="col-lg-3">
                  <div class="information_main">
                     <h4 class="information_text">Information</h4>
                     <p class="many_text">The Indian Financial System Code (IFSC), is a unique 11-digit alphanumeric code that is used for online fund transfer transactions done via NEFT, RTGS and IMPS.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="information_main">
                     <h4 class="information_text">Helpful Links</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="information_main">
                     <div class="footer_logo"><a href="index.html"><img src="images/logob.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">© 2020 All Rights Reserved. <a href="https://html.design">Free html Templates</a>
            Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
<?php
}
else
{
	echo "<script> location.href='../index.php'; </script>";
}	
?>