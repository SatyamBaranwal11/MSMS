<?php
include('includes/dbconnection.php');
// session_start();
// error_reporting(0);

// if(isset($_POST['sub']))
//   {
   
//     $email=$_POST['email'];
 
     
//     $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
//     if ($query) {
//    echo "<script>alert('Your subscribe successfully!.');</script>";
// echo "<script>window.location.href ='index.php'</script>";
//   }
//   else
//     {
//        echo '<script>alert("Something Went Wrong. Please try again")</script>';
//     }

  
// }
if(isset($_POST['esubmit'])){
$to = $_POST['email'];
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "piyushraval2474@gmail.com";
$headers = "From: $from";
mail($to, $subject, $message, $headers);
echo "Mail Sent.";
}
?>

<div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2 class="widget-title">Salon Address</h2>
                            <ul class="listnone contact">
                                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <li><i class="fa fa-map-marker"></i> <?php  echo $row['PageDescription'];?> </li>
                                <li><i class="fa fa-phone"></i> +<?php  echo $row['MobileNumber'];?></li>
                               
                                <li><i class="fa fa-envelope-o"></i>  <?php  echo $row['Email'];?></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h2 class="widget-title">Social Feed</h2>
                            <ul class="listnone">
                                <li>
                                    <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="https://www.linkedin.com/in/satyam-baranwal-b2353420b/"><i class="fa fa-linkedin"></i> Linked In</a></li>
                                <li>
                                    <a href="https://www.youtube.com/"> <i class="fa fa-youtube"></i>Youtube</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.social block -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h2 class="widget-title">Newsletters</h2>
                            <p>Enter your email address to receive new patient information and other useful information right to your inbox.</p>


                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address" name="email" required >
                                <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" value="submit" name="esubmit">Subscribe</button>
                            </span>
                            </div></form>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                <div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright-content">
                                <p> MADE BY AMIT VIKRAM AND SATYAM BARANWAL</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>



<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['esubmit'])){
    
    $userEmail = $_POST['email']; // Store the user's email address in a variable
    echo "<script>console.log('$userEmail');</script>";

    require 'PHPMailer.php';
    require 'Exception.php';
    require 'SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                  
        $mail->Host       = 'smtp.gmail.com';             
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = 'satyambaranwal11@gmail.com';                     
        $mail->Password   = 'vpajxpmprbpbloqf';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                   
        
        //Recipients
        $mail->setFrom('satyambaranwal11@gmail.com', 'Shubham mens parlour');
        $mail->addAddress($userEmail, ' '); // Add the user's email address here

        $mail->isHTML(true);                              
        $mail->Subject = 'Subscriber';

        $a = "🎉 Special Offer! Get 20% Off at Shubham Men's Parlor! 🎉";
        $b = "Terms and conditions apply. Offer valid for a limited time only. Discount applied at checkout. Cannot be combined with any other offers or promotions.";
        $c = "THANKS FOR SUBSCRIBING SHUBHAM MEN'S PARLOR. ";

        $mail->Body    = "$a $b $c";
        
        
        $mail->send();
        header("Location: user.php");
        echo "<script>alert('thanks for subscribing us..!');</script>";
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>