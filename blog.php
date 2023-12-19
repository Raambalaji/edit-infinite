<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Infinite Blog | Insights on Photo Editing and Visual Enhancement</title>
  
  <link rel="icon" href="assets/img/favicon_io/favicon.ico" type="image/x-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


  <!-- Plugins CSS Files -->
  <link href="assets/plugins/aos/aos.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <meta name="google-site-verification" content="JkWHN2e_Tr54sWoxEVSLro_Su8GlKFmn1qDkiQcYVdo"/>

<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X9909RVD5D"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-X9909RVD5D'); 
</script>



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


  

  <script>

    function openPopup() {
      document.getElementById("popup").style.display = "block";
    }
    
    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }
    
    function validateForm(event) {
      event.preventDefault();
    
      var nameField = document.getElementById("name");
      var nameError = document.getElementById("nameError");
      var emailField = document.getElementById("email");
      var emailError = document.getElementById("emailError");
      var phoneField = document.getElementById("phone");
      var phoneError = document.getElementById("phoneError");
    
      if (nameField.value.trim() === "") {
        nameField.classList.add("is-invalid");
        nameError.textContent = "Name is required.";
        return false;
      } else {
        nameField.classList.remove("is-invalid");
        nameError.textContent = "";
      }
    
      if (emailField.value.trim() === "") {
        emailField.classList.add("is-invalid");
        emailError.textContent = "Email is required.";
        return false;
      } else {
        emailField.classList.remove("is-invalid");
        emailError.textContent = "";
      }
    
      if (phoneField.value.trim() === "") {
        phoneField.classList.add("is-invalid");
        phoneError.textContent = "Phone number is required.";
        return false;
      } else {
        phoneField.classList.remove("is-invalid");
        phoneError.textContent = "";
      }
    
      // Phone number validation
        var phoneRegex = /^\d{10}$/;
    
    if (!phoneRegex.test(phoneField.value)) {
      phoneField.classList.add("is-invalid");
      phoneError.textContent = "Please enter a valid 10-digit phone number.";
    } else {
      phoneField.classList.remove("is-invalid");
      phoneError.textContent = "";
      // Redirect to another page
  
      window.location.href = "https://forms.monday.com/forms/embed/388de163f128e8ce27e70197187f9664?r=use1";
  
    //   if (isValid) {
    //   var url = "https://forms.monday.com/forms/embed/388de163f128e8ce27e70197187f9664?r=use1"; // Replace with your desired URL
    //   window.open(url, "_blank");
    //   closePopup();
    // }
  
    }
    }  
    
       </script>

<style>
  .img-fluid{
    width:100%;
  }
</style>
</head>

<body>
  <!-- Header -->
  <?php include 'header.php'; ?>

  <main id="main" class="scrolled-offset">

    

     <!-- ======= Breadcrumbs ======= -->
   <!-- <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blogheader.jpg');">
    <div class="container-fluid position-relative d-flex flex-column align-items-left">

      
    </div>
  </div> -->
  



  <section id="founderblog" class="about">

    <div class="container-fluid">
        
      <div class="row">  

          <div class="col-lg-6 order-1 order-lg-1 content my-auto text-center" data-aos="fade-right">
              <img src="assets/img/blog/kartikjobanputra.png" class="img-fluid d-block img-fluid2 center" style="margin-bottom:20px;" alt="kartikjobanputra">
              
              <h3>Kartik Jobanputra</h3>
              <h4 class="founderceo">Founder & CEO  - smartt.studio</h4>

            <div class="text-left cta">        
              <a class="cta-btn" onclick="openPopup()">Email Me</a>
<br><br><br>
            </div>
              
              <div class="social social-links2">
                <a href="https://twitter.com/Smartt_Studio" target="_blank"><i class="bi1 bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100081019796305" target="_blank"><i class="bi1 bi-facebook"></i></a>
                <a href="https://www.instagram.com/smartt.ai/" target="_blank"><i class="bi1 bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/smarttstudio/" target="_blank"><i class="bi1 bi-linkedin"></i></a>
              </div>


          </div>     

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content my-auto text-left" data-aos="fade-left">              

              <h3>ENTREPRENEUR LEADERSHIP NETWORK CONTRIBUTOR</h3>

              <p class="text-justify">
            
            <span>              
              Benevolent by nature, Kartik is a diverse man of diverse and unpredictable choices, a serial entrepreneur. One may find him not just reading books or seizing the present like jumping off a plane. He is pro skydiver/licensed scuba. He doesn’t speak in hypotheticals and lives life by doing.
            </span>

              <span> 
                  <a href="https://greatplacetowork.me/3-strategies-to-motivate-staff/" target="_blank"  id="knowmore" style="color:#9C07DC"> Read More...</a>
              </span> 

              <div class="text-left cta">
              <span> 
              <a class="cta-btn" href="blognewsline.php" target="_blank" id="calltoaction">IN THE NEWS</a>
            </span> 
                <span>              
                  <a class="cta-btn" href="https://www.entrepreneur.com/author/kartik-jobanputra" target="_blank" id="calltoaction"> Entrepreneur Folio</a>
              </span> 
    
              </div>          
               
              <div class="grid">       
        
         
            
                <div class="card1 card__two">
                    <figure class="card__img">
                              
                        <a href="https://www.entrepreneur.com/author/kartik-jobanputra" target="_blank">
                          <img src="logos\entrepreneur1.png" width="" height=""  alt="entrepreneur1" />
                         </a>          
                    </figure>    
            
        
                </div>
        
                <div class="card1 card__two">
                    <figure class="card__img">                    
                        <a href="https://www.forbes.com/sites/forbesbusinesscouncil/people/kartikjobanputra/?sh=25b54f474fd2" target="_blank">
                        <img src="logos\forbes1.png" width="" height="" alt="forbes1" />
                         </a>

                    </figure>      
        
                </div>

                <div class="card1 card__two">
                  <figure class="card__img">
                      
                      <a href="https://www.vogue.in/content/paul-shark-docks-india" target="_blank">
                      <img src="logos\Vogue.png" width="" height="" alt="Vogue"/>   

                         </a>
                  
                  </figure>           
      
              </div>
    
            </div>            
          
        
          </div>           

      </div>   

 
  
    </div>
    
  </section>



  <!-- <section>       -->

    <!-- ======= popup Section ======= -->


    <div id="popup" class="popup-container">
      <div class="popup-content">
        <label  for="show" class="close-btn" onclick="closePopup()" title="close">×</label>
        <h2 class="popupheading">EMAIL ME</h2>

        <!-- <form  onsubmit="return validateForm(event)"> -->

        <form action="https://formspree.io/f/mjvdddra"  method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>


          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

                    
          </div>

     

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
          </div>

          <button type="submit" class=" cta-btnpopup btn btn-primary">Submit</button>  
        
    
        </form>


      </div>
    </div>


  <!-- </section> -->



    
  <!-- ======= Team Section ======= -->
  <section id="team1" class="team1">
    <div class="container-fluid">    

      <div class="row">
        <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in">
          <div class="member">
            <img src="assets/img/blog/005.jpg" alt="005" class="img-fluid2 d-block w-100">
            <h4 class="founderceo">Five Tips For Building A Profitable Network As An <br> Entrepreneur</h4>
              <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/05/30/five-tips-for-building-a-profitable-network-as-an-entrepreneur/?sh=11a1abaf20b2" id="calltoaction" style="color:#9C07DC"><span> Read More...</span></a>
         
          </div>
        </div>

        <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in">
          <div class="member">
            <img src="assets/img/blog/006.jpg" alt="006" class="img-fluid2 d-block w-100">
            <h4 class="founderceo">The Evolution Of E-Commerce And What It Means For Content Creation  </h4>           

            <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/05/01/the-evolution-of-e-commerce-and-what-it-means-for-content-creation/?sh=688825e04561" id="calltoaction" style="color:#9C07DC"><span>Read More...</span></a>
         
          </div>
        </div>

        <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in">
          <div class="member">
            <img src="assets/img/blog/007.jpg" alt="007" class="img-fluid2 d-block w-100">         

            <h4 class="founderceo">Visual Storytelling: How To Use Photography To Build  A Strong Brand Identity </h4>
            
            <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/02/22/visual-storytelling-how-to-use-photography-to-build-a-strong-brand-identity/?sh=5d58da7d2d4a" id="calltoaction" style="color:#9C07DC"><span>Read More...</span></a>
            
          </div>
        </div>


      </div>

    </div>
  </section>

  <!-- End Team Section -->



    <section id="futureblog" class="about">

      <div class="container-fluid">
          
        <div class="row">  
  
          <div class="col-lg-6 order-1 order-lg-1 my-auto text-left" data-aos="fade-right">
              <img src="assets/img/blog/004.jpg" class="img-fluid d-block img-fluid2 w-100" alt="004">
            </div>     
  
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content my-auto text-left" data-aos="fade-left">               
  
            <h3>Entrepreneur Leadership...</h3>
  
            <p class="">
            <span>Benevolent by nature, Kartik is a diverse man of diverse and unpredictable choices, a serial entrepreneur. One may find him not just reading stoics or seizing the present like jumping off a plane. He is pro skydiver/licensed scuba. He doesn’t speak in hypotheticals and lives life by doing.</span>
              <span> 
                  <a href="https://www.entrepreneur.com/author/kartik-jobanputra" id="calltoaction" style="color:#9C07DC">Read More...</a>
              </span> 
              </p>     
          </div>           
  
          </div>       
  
        </div>
       
  
      </div>
  
      
    </section>  


  <section id="futureblog" class="about">

    <div class="container-fluid">
        
      <div class="row">  

        <div class="col-lg-6 order-1 order-lg-2 my-auto text-left" data-aos="fade-right">
            <img src="assets/img/blog/skydiving-kartik.jpg" class="img-fluid d-block img-fluid2" alt="skydiving-kartik">
          </div>     

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content my-auto text-justify" data-aos="fade-left">               

          <h3>I Almost Died While Skydiving. Here's What it Taught Me About Resilience, Fear and Life</h3>
          <p class="text-justify">
            <span>Amazing happens when you step out of your comfort zone. It all works out — it always has.<span> 

          <p class="text-justify">

          <span>
          Imagine standing at the edge of an open plane door, the wind rushing past you, and the thrill of the unknown beckoning you to take the leap. Skydiving is the epitome of adventure, where we confront our fears and test the limits of our courage.
      </span>
            <span> 
                <a href="https://www.entrepreneur.com/leadership/what-my-near-death-experience-revealed-about-resilience/454156" id="calltoaction" style="color:#9C07DC">Read More... </a>
            </span>      
        </div>

        </div>       

      </div>     

    </div>
    
  </section>


  

  <section id="futureblog" class="about">

    <div class="container-fluid">
        
      <div class="row">  

        <div class="col-lg-6 order-1 order-lg-1 my-auto text-left" data-aos="fade-right">
            <img src="assets/img/blog/003.jpg" class="img-fluid d-block img-fluid2" alt="003">
          </div>     

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content my-auto text-justify" data-aos="fade-left">               

          <h3>The Future of Remote Work</h3>

          <p class="text-justify">
			<span>The dawn of the 21st century has brought about remote work, enabled by advanced technology and increased connectivity. Companies now operate from different locations globally, with remote work gaining popularity as a viable business option in recent years.</span>
            <span> 
                <a href="https://greatplacetowork.me/the-future-of-remote-work/" id="calltoaction" style="color:#9C07DC">Read More... </a>
            </span>      
        </div>

        </div>       

      </div>
     

    </div>

    
  </section>



  <section id="smartblog" class="about">

    <div class="container-fluid">
        
      <div class="row">  

        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right">
            <img src="assets/img/blog/001.jpg" class="img-fluid d-block img-fluid2" alt="001">
          </div>     

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content my-auto text-left" data-aos="fade-left">  

          <h3>Company overview</h3>

          <p class="">
		<span>“Edit-Infinite is a fully vertically integrated eCommerce content studio in UAE, curated specifically for brands looking to expand their online reach in the market. We take pride in blending the traditional templates and contemporary ethos of everything that is e-commerce content-driven.</span>
    <span> 
      <a href="https://greatplacetowork.me/certified-organization/smartt-studio/" id="calltoaction" style="color:#9C07DC">Read More... </a>
  </span> 
          </p>  
          <div class="d-flex justify-content-between text-left cta">
        
            <a class="cta-btn z-1" href="contact.php">Connect With Us</a>
          </div>       
          
        </div>       

      </div>    

    </div>
    
  </section>
      
    
      <!-- End Team Section -->



  </main>
  
  <!-- End #main -->

  <!-- Footer -->
  <?php include 'footer.php'; ?>


</body>

</html>