<?php
error_reporting(0);
$result = "";
$error = "";

if (isset($_POST["submit"])) {


  if (!$_POST['name']) {

    $error = "<br />Please enter your name";
  }

  if (!$_POST['email']) {

    $error .= "<br />Please enter your email address";
  }


  if ($_POST['email'] != "" and !filter_var(
    $_POST['email'],
    FILTER_VALIDATE_EMAIL
  )) {

    $error .= "<br />Please enter a valid email address";
  }



  if (!empty($error)) {

    $result = '<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>' . $error . '</div>';
  } else {

    $headers = "From: info@youragencydomain.com" . "\r\n";
    $mailed = mail(
      "info@youragencydomain.com",
      "Contact Message for Marketing",

      "Name: " . $_POST['name'] . "
        Email: " . $_POST['email'] . "
        Phone: " . $_POST['phone'] . " 
        Website: " . $_POST['websiteurl'] . " 
        Your City: " . $_POST['city'],
      $headers
    );


    if ($mailed) {

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

  <meta name="description" content="Online marketing solutions for dentist practices." />

  <title>Online Marketing Solutions for Dentist Practices</title>


  <!--CSS Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" align="center">Free Website Analysis (worth $399)</h4>
            </div>
            <div class="modal-body">


              <p>We will go through your website and provide you with actionable advice to get more patients.</p>


              <form class="modal-form" method="post">
                <label>Website URL</label><input type="text" name="websiteurl" class="form-control" placeholder="eg. www.example.com" value="" />

                <br>

                <label>Email</label><input type="email" name="email" class="form-control" placeholder="We will send the report to this email address" value="" />

                <br>

                <label>Name</label><input type="text" name="name" class="form-control" placeholder="Your Name" value="" />

                <br>

                <label>Contact</label><input type="number" name="phone" class="form-control" placeholder="Contact Number" value="" />

                <br>

                <button type="submit" name="submit" class="btn btn-success modal-button">Continue</button>

                <br><br>


              </form>

            </div>

          </div>

        </div>
      </div>
      <!-- End of Modal -->



      <div class="row">

        <div class="col-xs-6">


          <p class="top-cta"><a href="https://youragencydomain.com/contact.php">Request An Appointment</a> </p>

        </div>

        <div class="col-xs-6">
          <!-- Trigger/Open The Modal -->
          <p class="top-cta" data-toggle="modal" data-target="#myModal" align="right"><a href="#">Free Website Analysis</a></p>
        </div>
      </div>
      <br>
      <div class="center-block" align="center">
        <a href="https://youragencydomain.com">
          <p class="logo-image" align="center">&nbsp;</p>
        </a>
        <p class="tagline" align="center">Marketing for Dentist Practices</p>
      </div>
    </div>
    <!--top-banner-->
  </div>
  <!--end of banner-->

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

  <br><br><br>
  <p class="heading-question" align="center">Online Marketing Solutions for Dentists</p>
  <br><br><br>
  <div class="container-fluid" align="center">
    <div style="max-width: 800px">
      <p>Finding the right marketing company is not easy... there are so many choices out there.</p>
      <br>
      <p>This is why we ONLY work with Dentist Practices. We get more patients through effective online marketing and development.</p>
    </div>
  </div>
  <br><br>
  <p align="center">We provide the following services:</p>
  <br><br>
  <div class="container-fluid" align="center">
    <div style="max-width: 1000px">
      <div class="row">
        <div align="center" class="col-sm-4 center-block">
          <div style="max-width: 260px">
            <img class="img-responsive" src="images/website.png" alt="websites" />
            <p><strong><span style="color: black; font-size: 18px">Websites That Work</span></strong></p>
            <p class="services">We don't just create websites (like everyone else does). We create websites that <i>work</i></p>
            <p class="learn-more"><a href="https://youragencydomain.com/Dentist-web-design.php">Learn more about web design</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>
          </div>
        </div>
        <div align="center" class="col-sm-4 center-block">
          <div style="max-width: 260px">
            <img class="img-responsive" src="images/ppc.png" alt="ppc" />
            <p><strong><span style="color: black; font-size: 18px">AdWords (PPC)</span></strong></p>
            <p class="services">We've managed over $1,300,000 in AdWords campaigns to get the best results</p>
            <p class="learn-more"><a href="https://youragencydomain.com/ppc-for-Dentists.php">Learn more about AdWords</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>
          </div>
        </div>

        <div align="center" class="col-sm-4 center-block">

          <div style="max-width: 260px">

            <img class="img-responsive" src="images/seo.png" alt="seo" />

            <p><strong><span style="color: black; font-size: 18px">SEO</span></strong></p>
            <p class="services">Effective on-page and off-page SEO to get you ranking in top positions on Google</p>

            <p class="learn-more"><a href="https://youragencydomain.com/seo-for-Dentists.php">Learn more about SEO</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>

          </div>
        </div>
      </div>
      <br><br>
      <div class="row">


        <div align="center" class="col-sm-4 center-block service">

          <img class="img-responsive" src="images/content.png" alt="writing" />

          <div style="max-width: 260px">

            <p><strong><span style="color: black; font-size: 18px">Content Writing</span></strong></p>
            <p class="services">Our writers are highly-skilled communicators and persuaders</p>

            <p class="learn-more"><a href="https://youragencydomain.com/content-marketing.php">Learn more about content writing</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>

          </div>
        </div>

        <div align="center" class="col-sm-4 center-block service">

          <img class="img-responsive" src="images/target.png" alt="online" />

          <div style="max-width: 260px">

            <p><strong><span style="color: black; font-size: 18px">Online Advertisements</span></strong></p>
            <p class="services">Target the right person with the right message at the right time</p>

            <p class="learn-more"><a href="https://youragencydomain.com/online-advertising.php">Learn more about online ads</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>

          </div>
        </div>

        <div align="center" class="col-sm-4 center-block service">

          <div style="max-width: 260px">

            <img class="img-responsive" src="images/social.png" alt="social" />

            <p><strong><span style="color: black; font-size: 18px">Social Media</span></strong></p>
            <p class="services">Social media growth to improve credibility and gain new patients</p>

            <p class="learn-more"><a href="https://youragencydomain.com/social-media.php">Learn more about social media</a>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>

          </div>
        </div>
      </div>
      <br>


    </div>

  </div>

  <br>
  <br>
  <br>

  <div class="container-fluid" align="center">

    <div style="max-width: 600px">

      <p><strong>Scenario #1: &nbsp;&nbsp;You Already Have A Website</strong></p>

      <br>

      <p>If you already have a website, was is just created by an individual/company who creates websites that they thought may look good or does it actually <em>work</em>?</p>

      <br>

      <p>Does it send the right message across to a potential patients about what they are looking for? Does it fulfill your business objective of getting more patients?</p>

      <br><br><br>

      <p><strong>Scenario #2: &nbsp;&nbsp;You Don't Have A Website Yet</strong></p>

      <br>

      <p>If you don't currently have a website, it's extremely important to have one in this competitive market. All credible Dentist and websites have effective websites that showcase their expertise and experience and it results in more patients and higher profits.</p>

      <br>

    </div>
  </div>

  <br><br><br>

  <div class="analysis-cta" align="center">


    <p class="analysis-heading" align="center">Get A Free Marketing Analysis Of Your Website</p>

    <p class="analysis-subheading" align="center">Our team will go through your website and give you actionable advice to get more patients</p>

    <!-- Trigger/Open The Modal -->
    <p class="feedback-cta" data-toggle="modal" data-target="#myModal"><a href="#">Give Me Feedback</a></p>

  </div>

  <br><br><br><br>




  <p align="center"><strong><span style="font-size: 20px">We focus on getting you more patients, while you focus on running your practice</span></strong></p>

  <br>
  <br>
  <br>
  <br>


  <br><br><br><br>






  <div class="footer-cta" align="center">


    <div class="col-sm-6">

      <!-- Trigger/Open The Modal -->
      <p class="footer-buttons" data-toggle="modal" data-target="#myModal"><a href="#">Get A Free Website Analysis</a></p>

    </div>

    <div class="col-sm-6" align="center">

      <p class="footer-buttons"><a href="https://youragencydomain.com/contact.php">Request An Appointment</a></p>

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



      <a href="https://linkedin.com" target="_blank"><svg width="30" height="30" viewBox="0 0 24 24">
          <path fill="#BDBDBD" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" /></svg></a>


      <a href="https://www.facebook.com/youragencydomain/" target="_blank"><svg style="width:30px; height:30px" viewBox="0 0 24 24">
          <path fill="#BDBDBD" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
        </svg></a>

    </div>
    <!--end social-link-->


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


  <!--FIXED NAVBAR SCRIPT-->
  <script>
    $('#topnavbar').affix({
      offset: {
        top: $('#banner').height()
      }
    });
  </script>
</body>

</html>