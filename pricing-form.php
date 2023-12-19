<?php
 
if(isset($_POST['button']) && isset($_FILES['attachment']))
{
    $from_email         = 'sender@abc.com'; //from mail, sender email address
    $recipient_email = 'recipient@xyz.com'; //recipient email address
     
    //Load POST data from HTML form
    $sender_name = $_POST["sender_name"]; //sender name
    $reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
    $subject     = $_POST["subject"]; //subject for the email
    $message     = $_POST["message"]; //body of the email
 
    /*Always remember to validate the form fields like this
    if(strlen($sender_name)<1)
    {
        die('Name is too short or empty!');
    }
    */   
    //Get uploaded file data using $_FILES array
    $tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
    $name     = $_FILES['attachment']['name']; // get the name of the file
    $size     = $_FILES['attachment']['size']; // get size of the file for size validation
    $type     = $_FILES['attachment']['type']; // get type of the file
    $error     = $_FILES['attachment']['error']; // get the error (if any)
 
    //validate form field for attaching the file
    if($error > 0)
    {
        die('Upload error or No files uploaded');
    }
 
    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                 // close upon completion
 
    $encoded_content = chunk_split(base64_encode($content));
    $boundary = md5("random"); // define boundary with a md5 hashed value
 
    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:".$from_email."\r\n"; // Sender Email
    $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
         
    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));
         
    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $type; name=".$name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email
     
    $sentMailResult = mail($recipient_email, $subject, $body, $headers);
 
    if($sentMailResult ){
        echo "<h3>File Sent Successfully.<h3>";
        // unlink($name); // delete the file after attachment sent.
    }
    else{
        die("Sorry but the email could not be sent. Please go back and try again!");
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Search Engine Optimization -->

<title>Editinfinite - Form</title>

<meta name="google-site-verification" content="JkWHN2e_Tr54sWoxEVSLro_Su8GlKFmn1qDkiQcYVdo"/>

<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X9909RVD5D"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-X9909RVD5D'); 
</script>

<!-- /Rank Math WordPress SEO plugin -->
  
  <link rel="icon" href="assets/img/favicon_io/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->

  <!-- <link rel="preconnect" href="https://rsms.me/"> -->

  <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> -->

  <!-- pluginsCSS Files -->
  <link href="assets/plugins/aos/aos.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"> 
  <link href="assets/css/style_img.css" rel="stylesheet"> 


  <!-- xd -->

  <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="Edit_Infinite__landingpage___1.css"/>
  <script id="applicationScript" type="text/javascript" src="Edit_Infinite__landingpage___1.js"></script>

  <!--Start of Tawk.to Script
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/650d527d0f2b18434fd9f1c3/1hau0kf40';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>-->
  <!--End of Tawk.to Script-->
  
  
</head>


<body>
  <!-- Header -->
  <?php include 'header.php'; ?>

  <main id="main">
    <section id="pricing" class="pricing">
        <div class="container-fluid">
            <div class="section-title section-titleteam">
            <h3 class="pricing head mb-5"> Let’s get to know each other.</h3>
            <p class="text-center">It all begins with an idea. Let us help you bring yours to life.</p>
        </div>
        <div class="w-700 shadow">
            <form class="row" action="adddata.php" method="post" enctype="multipart/form-data">
               
                <div class="col-md-12 mb-3">
                    <label for="validationDefault01" class="form-label"> Name <span class="required"> (required) </span></label>
                    <input type="text" name="name" class="form-control contact-form rounded-0" id="validationName" value="" required title="Please enter your name" />
                  </div> 
                                 
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email <span class="required"> (required) </span> </label>
                  <input type="email" name="email" class="form-control contact-form rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" required title="Please enter your Email">
                 
                </div>
                <div class="col-12 mb-3">
                    <label for="validationDefault02" class="form-label">Phone Number<span class="required"> (required) </span></label>
                    <input type="number" class="form-control contact-form rounded-0" name="phone" id="validationDefault02" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;" value="" required title="Please enter your Mobile Number">
                  </div> 
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Want for Ecommerce Platform <span class="required">(required) </span> </label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="ecommerceplatform" value="i am a Manufacture" required>
                      <label class="form-check-label" for="radio1">i am a Manufacture</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="ecommerceplatform" value="i am a authorized distributor">
                      <label class="form-check-label" for="radio2">i am a authorized distributor</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="ecommerceplatform"  value="i am a seller">
                      <label class="form-check-label" for="radio2">i am a seller</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="ecommerceplatform"  value="other">
                      <label class="form-check-label" for="radio2">other</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">MarketPlaces <span class="required"> (required) </span> </label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="marketplaces" value="amal.com" required>
                      <label class="form-check-label" for="radio1">amal.com</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="marketplaces" value="amazone.ae">
                      <label class="form-check-label" for="radio2">amazone.ae</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="marketplaces"  value="jumia.com">
                      <label class="form-check-label" for="radio2">jumia.com</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="marketplaces"  value="Namshi.com">
                      <label class="form-check-label" for="radio2">Namshi.com</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="marketplaces"  value="Noon.com">
                      <label class="form-check-label" for="radio2">Noon.com</label>
                    </div>
                </div>
                 <div class="col-md-12 mb-3">
                    <label for="validationDefault2" class="form-label">Number Of Images <span class="required"> (required) </span></label>
                    <input type="number" name ="numberofimages" class="form-control contact-form rounded-0" id="no_of_image" onchange="totleFiles(this.value)" required title="Please enter your Number Of Images">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="validationDefault01" class="form-label">Total Amount</label>
                    <input type="text" name="total" class="form-control contact-form rounded-0" id="total" value="" readonly>
                  </div> 

                <div class="col-12 mb-5">
                    <label for="validationDefault03" class="form-label">Paste your Cloud/Drive link here...</label>
                    <input type="text" name="drivelink" class="form-control contact-form rounded-0" id="files" onchange="checkFiles(this.files)">
                  </div> 
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmai  l2" class="form-label">Calculation Of Money <span class="required">(required) </span> </label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="calculation_of_money" value="option_1" checked required>
                      <label class="form-check-label" for="radio1">Option 1</label>
                    </div>                   
                </div> -->
               
                <button type="submit" name="submit" value="submit" class="cta-btn ms-3 bg-white" style="z-index: 0; width: fit-content;">Send</button>
              </form>
             
        </div> 
  
        </div>
      </section>
  </main>
   <!-- End #main -->  
   

  <!-- Footer -->
  <?php include 'footer.php'; ?>
<script>
  function checkFiles(files) {       
    if(files.length>10) {
        alert("length exceeded; files have been truncated");

        let list = new DataTransfer;
        for(let i=0; i<10; i++)
           list.items.add(files[i]) 

        document.getElementById('files').files = list.files
    }       
}
function totleFiles(value) {
  if( 0 > value ) {
        alert("Please enter valid number.");
    }else{
      if(value<=10 ){
    $('#total').val(0);
  }
  else{
    var totle_image = parseInt(value); // Convert to integer if necessary
    var amount = 100;
    var result = totle_image * amount - 1000;
    $('#total').val(result);
  }
    } 
 
}


</script>
<!-- ..... image before and after end-->

 
</body>

</html>