<?php
//error_reporting(0);
$result = "";
$error = "";

if (isset($_POST["submit"])) {
      
     if (empty($_POST['name'])) {
       $error="<br />Please enter your name";

     }

      
     if (empty($_POST['email'])) {
       $error.="<br />Please enter your email address";

     }
	
     
	 if (empty($_POST['phone'])) {
      $error.="<br /> Please enter your phone number";

     }


     if (empty($_POST['message'])) {
	  $error.="<br />Please enter a message";

     }
    

     if ($_POST['email']!="" AND !filter_var($_POST['email'],
	  FILTER_VALIDATE_EMAIL)) {
	  $error.="<br />Please enter a valid email address";

     }




		 
     if (!empty($error)) {

	     $result = '<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>' . $error . '</div>';

     }
     else {

	     $headers = "From: info@youragencydomain.com" . "\r\n";
	     $mailed  = mail( "info@youragencydomain.com", "Contact Message",

		     "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nPhone: " . $_POST['phone'] . "\nMessage: " . $_POST['message'], $headers );

	     if ( $mailed ) {

		     $result = '<div class="alert alert-success" align="center"> <strong> Thanks for contacting us</strong> - We\'ll get back to you shortly.</div>';
	     } else {
		     $error = '<div class="alert alert-danger" align="center">Sorry, there was
                an error sending your message. Please try again later.</div>';

	     }

     }
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Contact Dentist Marketing."/>
   
    <title>Contact Dentist Marketing</title>
    
       <!--CSS Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/contact-page-styling.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />


    <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
  

    <!--Favicon -->
  <link rel="icon" href="images/dentist-marketing-favicon.jpg">



  </head>
  

  <body>
  
   <div class="container-fluid" id="banner">

    <div class="top-banner">
         
     <br>
                 
                 <br>
                 
                 
                  <div class="center-block" align="center">
                         
          
                            <a href="https://youragencydomain.com"><p class="logo-image" align="center">&nbsp;</p></a>

                       
                  
                             
    
                  </div>


    </div><!--top-banner-->

  </div><!--end of banner-->
  
  <nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
  
           <div class="navbar-header">
      
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      
                      <span class="sr-only">Toggle navigation </span>
          
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
          
                 </button>
      
          </div>

    
          <div class="collapse navbar-collapse" align="center">
      
                   <ul class="nav navbar-nav">
          
                    <li> <a href="https://youragencydomain.com/marketing-solutions.php"><span class="center-underline">Marketing Solutions</span></a></li>
                     <li> <a href="https://youragencydomain.com/our-work.php"><span class="center-underline">Our Work</span></a></li>
                     <li> <a href="https://youragencydomain.com/blog.php"><span class="center-underline">Growth Tips</span></a></li>
                     <li> <a href="https://youragencydomain.com/about.php"><span class="center-underline">About Us</span></a></li>
                     <li> <a href="https://youragencydomain.com/contact.php"><span class="center-underline">Contact Us</span></a></li>
                     
              
              
                  </ul>
           </div>  

     
    </nav>
 

   <?php echo $result; ?>
   <?php echo $error; ?>





<br><br>

<p class="heading-question" align="center">Contact Us</p>



<br><br>




<div class="contactusform">



  <div class="row">



    <div class="col-md-1"></div>



      <div class="col-md-5 contact-details"><br />



      <div class="contact-info">

          <p class="info">If you have any questions, email the relevant department below or complete the form and we will get back to you.</p><br /><br />

          

            <p class="info">

            <strong><u>SALES</u>:</strong>
			<br>
            sales [at] youragencydomain.com<br /><br />

            <strong><u>BILLING</u>:</strong>
            <br>
            accounts [at] youragencydomain.com<br /><br />
            
            <strong><u>GENERAL</u>:</strong>
            <br>
            info [at] youragencydomain.com<br /><br />
            
            <br /><hr>


		  	</p>
     
      </div>

  </div>





<div class="col-md-6 emailForm" align="center">



<form method="post" class="form-group">
<br />

            <div align="center" class="form-group center-block">

                   <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />

           </div>

            <div align="center" class="form-group center-block">
               
                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" />
                      
                
            </div>

            <div align="center" class="form-group center-block">
                
                    <input type="tel" name="phone" class="form-control" placeholder="Contact Number" value="<?php echo $_POST['phone']; ?>" />
                    
                
            </div>



             <div align="center" class="form-group center-block message-input">
                
                    <input type="text" name="message" class="form-control message-input" placeholder="Message" value="<?php echo $_POST['message']; ?>" />
                    
                
            </div><!--end message-->

                    <p align="center"><input type="submit" name="submit" class="btn btn-success btn-lg submit websitesubmit" value="Submit Form" /> </p><br /><br /><br />

        </form>

</div>





</div>



</div>


  
  <footer>
  
  <div class="footer-links" align="center">
<a href="https://youragencydomain.com/marketing-solutions.php">Dentist Marketing Solutions</a>
<a href="https://youragencydomain.com/our-work.php">Our Work</a>
<a href="https://youragencydomain.com/blog.php">Growth Tips</a>
<a href="https://youragencydomain.com/pricing.php">Pricing</a>
<a href="https://youragencydomain.com/about.php">About Us</a>
<a href="https://youragencydomain.com/contact.php">Contact Us</a>



</div>



<div class="social-links" align="center">



<a href="https://linkedin.com" target="_blank"><svg  width="30" height="30" viewBox="0 0 24 24"><path fill="#BDBDBD" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>


<a href="https://www.facebook.com/youragencydomain/" target="_blank"><svg style="width:30px; height:30px" viewBox="0 0 24 24"><path fill="#BDBDBD"  d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
</svg></a>

</div> <!--end social-link-->


<div class="policy-links" align="center">

    <a href="https://youragencydomain.com/privacy-policy.php" rel="nofollow">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
    <a href="https://youragencydomain.com/terms.php" rel="nofollow">Terms &amp; Conditions</a> &nbsp;&nbsp;&nbsp; 


</div>

<br>


<p align="center" id="copyright">&copy; youragencydomain.com</p> 


</footer>



   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

     <script> $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
}); </script>

 
 



  </body>

</html>