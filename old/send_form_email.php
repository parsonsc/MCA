
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@montserrat-ca.co.uk";
    $email_subject = "";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        // !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  // if(!preg_match($email_exp,$email_from)) {
  //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  // }
  //   $string_exp = "/^[A-Za-z .'-]+$/";
  // if(!preg_match($string_exp,$first_name)) {
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  // }
  // // if(!preg_match($string_exp,$last_name)) {
  // //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  // // }
  // if(strlen($comments) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
  // if(strlen($error_message) > 0) {
  //   died($error_message);
  // }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    // $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Montserrat Capital Advisors LTD</title>
      <link rel="stylesheet" href="css/full.css">
      <link rel="stylesheet" href="css/framework.css">
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,600,400,300' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>      
    </head>
<body>
  <header>
    <a href="index.html"><img src="images/logo.png" name="logo" width="280" height="118" id="logo" /></a>
    <nav>
      <ul>
        <a href="index.html"><li class="selected">About Us</li></a>
        <a href="services.html"><li >Services</li></a>
        <a href="track-record.html"><li>Track Record</li></a>
        <a href="residnetial-research.html"><li>Residential Research</li></a>
        <a href="current-availibility.html"><li>Current Availability</li></a>
        <a href="contact-us.htm"><li>Contact Us</li></a>
      </ul>
    </nav>
  </header>
  <div class="container">
    <div class="email email_thank_you" style="height:800px; padding-Top: 100px;">
      <h2>Thank You</h2>
      <p>Many thanks you for your enquiry.  A member of the Montserrat team will come back to you as soon as they are able.</p>
      
    </div>
     
  </div>
  <footer>
    <div class="footer_content">
      <div id="enquire">
        <p>Enquiries: 
        <a href="mailto:info@montserrat-ca.co.uk">info@montserrat-ca.co.uk</a></p>
      </div> 
      <div id="copy">
        <p>&copy Monserrat Capital Advisors Ltd 2013 
        <span style="padding-left:50px;">Company Reg: 08183678</span></p>
      </div>      
    </div>    
  </footer>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43814179-1', 'montserrat-ca.co.uk');
  ga('send', 'pageview');

</script>






 
<?php
}
?>