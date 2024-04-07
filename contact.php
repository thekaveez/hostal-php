<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include('header.php'); ?>
<body>

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Contact</h2>
                    <p class="page-description">Contact with us</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Map Area====== --> 
    <div class="map-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                       <h5>Find Our location</h5>
                       <h2 class="title default-text-gradient">Map &amp; Directions</h2>
                       <p>Find out how to find us from your current location</p>
                    </div><!-- /.about-heading-content -->
                    <div class="map-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5857678349207!2d80.03772227499553!3d6.820128693177622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1712428161170!5m2!1sen!2slk"allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.map-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map-content-area -->

    <!-- ====== Contact Us Area ====== -->
	<div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Contact us<br/> live</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-us-content-left">
                        <div class="contact">
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p>NSBM<br> STUDENT PROJECT</p>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>Mall</h4>
                           <a href="mailto:shlelisa123@gmail.com"> <p>info@nsbm.ac.lk</a>
                           <a href="mailto:gutamanagesso@gmail.com">help@nsbm.ac.lk</p></a>
                        </div><!-- /.contact -->
                
                    
                        <div class="contact">
                            <h4><i class="fa fa-volume-control-phone"></i>Call</h4>
                            <p><a href="tel:+94115445000">+94 11 544 5000</a><br> <a href="tel:+94712445000">+94 71 244 5000</a></p>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-user"></i>Social account</h4>
                            <div class="social-icon">
                                <a href="https://www.nsbm.ac.lk/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.nsbm.ac.lk/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.nsbm.ac.lk/"><i class="fa fa-telegram"></i></a>
                               
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                
				
				
<?php   

include_once"connection.php";
$mess="";
if(isset($_POST['submit']))
{

$name=mysqli_real_escape_string($conn,$_POST["name"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$message=mysqli_real_escape_string($conn,$_POST["message"]);
$date=mysqli_real_escape_string($conn,$_POST["date"]);
	
    $updateq="INSERT INTO contact (name,email,message,date)VALUES('$name','$email','$message','$date')";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$mess="Please be patient Until admin see your contact";
	}
	else
	{
		$mess=" ".mysqli_error();
		
	}
	
}
?>

				
				
				
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        <form method="post" enctype="multipart/form-data">
                            <h3>Have a question</h3>
                            <img src="assets/images/envelope.jpg" alt="envelope" />
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" minlength="5" autocomplete="off" maxlength="40" required placeholder="Full Name" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" placeholder="Email*" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
									 <div class="col-sm-6">
                                        <input type="date" autocomplete="off"  required name="date" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <textarea rows="2"name="message"autocomplete="off" minlength="10" maxlength="2000" required cols="80" placeholder="write your message here" ></textarea>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" name="submit" class="submit default-template-gradient">
                                </div><!-- /.subimt -->
								<span style=" color:red"><?php echo $mess; ?></span>
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->
    
   <?php include('footer.php'); ?>
    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:51 GMT -->
</html>