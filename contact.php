<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Head of the web page -->
<head>
   <title>Cichon Kendall's Portfolio - Contact Me</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--Bootstrap 4 (CSS) so all browsers, including IE 11, will be included -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- My CSS stylesheet -->
   <link rel="stylesheet" href="css/portfolio.css">
   <!-- Font Awesome stylesheet -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <br>
   <!-- Navigation Bar -->
   <nav class="container bg-info navbar navbar-expand-sm justify-content-center">
      <!-- <div class="container-fluid"> -->
         <!-- Website's brand -->
         <a class="navbar-brand" href="#">Cichon Kendall</a>


         <!-- Nav tabs -->
         <ul class="navbar-nav mx-auto" role="tablist">
            <!-- Home navigation tabs -->
            <li class="nav-item">
               <a class="nav-link active" href="index.html">Home</a>
            </li>
            <!-- About navigation pill -->
            <li class="nav-item">
               <a  class="nav-link" href="https://ckendall68.github.io/Portfolio/about.html">About</a>
            </li>
            <!-- Projects navigation pill -->
            <li class="nav-item">
               <a class="nav-link" href="https://ckendall68.github.io/Portfolio/projects.html">Projects</a>
            </li>
            <!-- Contact me navigation pill -->
            <li class="nav-item">
               <a class="nav-link" href="https://ckendall68.github.io/Portfolio/contact.html">Contact me</a>
            </li>
         </ul>

         <!-- Logo for the website -->
         <img src="images/logo.jpg" class="logo rounded-circle float-right" alt="Logo Macbook pro laptop">
   </nav>

    <!-- Contact Page content -->
   <div id="page-container">
      <div id="content-wrap">
         <h3 class="text-center">Contact Me</h3>
         <?=$thankYou ?>

         <form method="post" action="contact.php">
             <label>Name:</label>
             <input name="sender">

             <label>Email address:</label>
             <input name="senderEmail">

             <label>Message:</label>
             <textarea rows="5" cols="20" name="message"></textarea>

             <input type="submit" name="submit">
         </form>


      </div> <!-- End of context-wrap -->

     <!-- Footer that includes social media links -->
     <footer class="footer bg-info mx-auto text-center">
        <a href="https://www.facebook.com/profile.php?id=100088289565619&mibextid=LQQJ4d" class="fa fa-facebook"></a>
        <a href="https://twitter.com/CichonKendall" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/in/cichon-kendall-65516546/" class="fa fa-linkedin"></a>
        <a href="https://www.instagram.com/cichonkendall/" class="fa fa-instagram"></a>
     </footer>
  </div> <!-- End of page-container -->

   <!-- My JavaScript files -->
   <script src="js/portfolio.js"></script>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>
