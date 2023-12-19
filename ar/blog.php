<?php
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Infinite Blog | Insights on Photo Editing and Visual Enhancement</title>
  
  <link rel="icon" href="../assets/img/favicon_io/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- plugins CSS Files -->
  <link href="../assets/plugins/aos/aos.css" rel="stylesheet">
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/arabic-styles.css" rel="stylesheet"> 

  <meta name="google-site-verification" content="JkWHN2e_Tr54sWoxEVSLro_Su8GlKFmn1qDkiQcYVdo"/>

  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-X9909RVD5D"></script> 
  <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-X9909RVD5D'); 
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
    .bodyfonts {
      text-align: unset;
    }
    @media (max-width: 960px) {
      .navbar-mobile .mobile-nav-toggle {
        left: 15px;right: unset;
      }
      .navbar a, .navbar a:focus {
        padding: 10px 15px 10px 5px;    justify-content: unset;
      }
    }
  </style>
</head>

<body>    
  
  <!-- Header -->
  <?php include 'header.php'; ?>

  <main id="main" class="scrolled-offset">
    <section id="founderblog" class="about">
      <div class="container-fluid">
        <div class="row">  
          <div class="col-lg-6 order-1 order-lg-2 content my-auto text-center" data-aos="fade-right">
            <img src="../assets/img/blog/kartikjobanputra.png" class="img-fluid d-block img-fluid2 center" style="margin-bottom:20px;" alt="kartikjobanputra">
            <h3>كارتيك جوبانبوترا</h3>
            <h4 class="founderceo">المؤسس والرئيس التنفيذي - edit-infinite</h4>

            <div class=" cta">        
              <a class="cta-btn" onclick="openPopup()">أرسل البريد الإلكتروني</a><br><br><br>
            </div>
              
            <div class="social social-links2 d-flex flex-row-reverse justify-content-center">
              <a href="https://twitter.com/Smartt_Studio" target="_blank"><i class="bi1 bi-twitter"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100081019796305" target="_blank"><i class="bi1 bi-facebook"></i></a>
              <a href="https://www.instagram.com/smartt.ai/" target="_blank"><i class="bi1 bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/smarttstudio/" target="_blank"><i class="bi1 bi-linkedin"></i></a>
            </div> 
          </div>     

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content my-auto" data-aos="fade-left">              
            <h3>رائد أعمال يساهم في صنع المستقبل</h3>
            <p class="text-justify">
              <span>كارتيك هو رجل يحب الحياة في كل لحظة. إنه لا يخاف من اتخاذ المخاطر، ويسعى دائمًا إلى تجربة أشياء جديدة. بالإضافة إلى نشاطاته التجارية، فهو أيضًا متحمس للمغامرة، ويتمتع بقفز المظلات والغوص. كارتيك هو رجل أعمال ناجح، لكنه أيضًا شخص يؤمن بالعيش في الوقت الحاضر والاستمتاع بكل ما تقدمه الحياة</span>

              <span> 
                  <a href="https://greatplacetowork.me/3-strategies-to-motivate-staff/" target="_blank"  id="knowmore" style="color:#9C07DC">اقرأ المزيد...
</a>
              </span> 
            </p>

            <div class="cta">
              <span> 
                <a class="cta-btn" href="blognewsline.php" target="_blank" id="calltoaction">في الأخبار</a>
              </span> 
              <span>              
                <a class="cta-btn" href="https://www.entrepreneur.com/author/kartik-jobanputra" target="_blank" id="calltoaction">ملف ريادة الأعمال</a>
              </span> 
            </div>          
              
            <div class="grid">   
              <div class="card1 card__two order-lg-3">
                <figure class="card__img">
                  <a href="https://www.entrepreneur.com/author/kartik-jobanputra" target="_blank">
                    <img src="../logos/entrepreneur1.png" width="" height=""  alt="entrepreneur1" />
                  </a>          
                </figure>    
              </div>
        
              <div class="card1 card__two order-lg-2">
                <figure class="card__img">                    
                  <a href="https://www.forbes.com/sites/forbesbusinesscouncil/people/kartikjobanputra/?sh=25b54f474fd2" target="_blank">
                    <img src="../logos/forbes1.png" width="" height="" alt="forbes1" />
                  </a>
                </figure>   
              </div>

              <div class="card1 card__two order-lg-1">
                <figure class="card__img">
                  <a href="https://www.vogue.in/content/paul-shark-docks-india" target="_blank">
                    <img src="../logos/Vogue.png" width="" height="" alt="Vogue"/>   
                  </a>
                </figure>           
              </div>
            </div>            
          </div>           
        </div>  
      </div>
    </section>
    <!-- <section> -->

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
    
    <!-- ======= Team Section ======= -->
    <section id="team1" class="team1">
      <div class="container-fluid">    
        <div class="row">
          <div class="col-lg-4 col-sm-12 order-lg-3 align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="../assets/img/blog/005.jpg" alt="005" class="img-fluid2 d-block w-100">
              <h4 class="founderceo">خمس نصائح لبناء شبكة مربحة كرائد أعمال</h4>
                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/05/30/five-tips-for-building-a-profitable-network-as-an-entrepreneur/?sh=11a1abaf20b2" id="calltoaction" style="color:#9C07DC"><span>اقرأ المزيد...</span></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 order-lg-2 align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="../assets/img/blog/006.jpg" alt="006" class="img-fluid2 d-block w-100">
              <h4 class="founderceo">تطور التجارة الإلكترونية وما يعينه لإنشاء المحتوى</h4>          
              <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/05/01/the-evolution-of-e-commerce-and-what-it-means-for-content-creation/?sh=688825e04561" id="calltoaction" style="color:#9C07DC"><span>اقرأ المزيد...</span></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 order-lg-1 align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="../assets/img/blog/007.jpg" alt="007" class="img-fluid2 d-block w-100">    
              <h4 class="founderceo">رواية القصص المرئية: كيف تستخدم التصوير لبناء هوية علامة تجارية قوية</h4>
              <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/02/22/visual-storytelling-how-to-use-photography-to-build-a-strong-brand-identity/?sh=5d58da7d2d4a" id="calltoaction" style="color:#9C07DC"><span>اقرأ المزيد...</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <section id="futureblog" class="about">
      <div class="container-fluid">
        <div class="row">  
          <div class="col-lg-6 order-1 order-lg-2 my-auto" data-aos="fade-right">
            <img src="../assets/img/blog/004.jpg" class="img-fluid d-block img-fluid2 w-100" alt="004">
          </div>     

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content my-auto" data-aos="fade-left">              
            <h3>القيادة الريادية</h3>
            <p class="">
              <span>كارتيك هو رجل يحب الحياة في كل لحظة. إنه لا يخاف من اتخاذ المخاطر، ويسعى دائمًا إلى تجربة أشياء جديدة. بالإضافة إلى نشاطاته التجارية، فهو أيضًا متحمس للمغامرة، ويتمتع بقفز المظلات والغوص. كارتيك هو رجل أعمال ناجح، لكنه أيضًا شخص يؤمن بالعيش في الوقت الحاضر والاستمتاع بكل ما تقدمه الحياة</span>
              <span> 
                  <a href="https://www.entrepreneur.com/author/kartik-jobanputra" id="calltoaction" style="color:#9C07DC">اقرأ المزيد...</a>
              </span> 
            </p>     
          </div>    
        </div>
      </div>
    </section>  

    <section id="futureblog" class="about">
      <div class="container-fluid">
        <div class="row">  
          <div class="col-lg-6 order-1 order-lg-1 my-auto" data-aos="fade-right">
            <img src="../assets/img/blog/skydiving-kartik.jpg" class="img-fluid d-block img-fluid2 w-100" alt="skydiving-kartik">
          </div>     
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content my-auto" data-aos="fade-left">               
            <h3>كادت أن أموت في أثناء قفزها بالمظلة , هذا ما علمني عن الصمود والخوف والحياة</h3>
            <p class="">
              <span>تحدث أشياء مذهلة عندما تخرج من منطقة الراحة الخاصة بك. كل شيء يعمل - دائمًا ما كان كذلك<span>
            </p>
            <p class="">
              <span>تخيل أنك تقف على حافة باب طائرة مفتوح، والرياح تهب عليك، والإثارة المجهولة تدعوك إلى القفز. القفز بالمظلات هو تجسيد للمغامرة، حيث نواجه مخاوفنا ونختبر حدود شجاعتنا</span>
            </p>
            <span> 
                <a href="https://www.entrepreneur.com/leadership/what-my-near-death-experience-revealed-about-resilience/454156" id="calltoaction" style="color:#9C07DC">اقرأ المزيد... </a>
            </span>      
          </div>
        </div>   
      </div>
    </section>

    <section id="futureblog" class="about">
      <div class="container-fluid">
        <div class="row">  
          <div class="col-lg-6 order-1 order-lg-2 my-auto" data-aos="fade-right">
            <img src="../assets/img/blog/003.jpg" class="img-fluid d-block img-fluid2 w-100" alt="003">
          </div>     

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content my-auto" data-aos="fade-left">               
            <h3>مستقبل العمل عن بعد</h3>
            <p><span>شهد مطلع القرن الحادي والعشرين ظهور العمل عن بعد، بدعم من التقنيات المتقدمة والاتصال المتزايد. تعمل الشركات الآن من مواقع مختلفة حول العالم، حيث اكتسب العمل عن بعد شعبية كخيار تجاري قابل للاستمرار في السنوات الأخيرة<span> 
                <a href="https://greatplacetowork.me/the-future-of-remote-work/" id="calltoaction" style="color:#9C07DC">Read More... </a>
            </span>      
          </div>      
        </div>
      </div>
    </section>

    <section id="smartblog" class="about">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-right">
            <img src="../assets/img/blog/001.jpg" class="img-fluid d-block img-fluid2 w-100" alt="001">
          </div>     

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content my-auto" data-aos="fade-left"> 
            <h3>نبذة عن الشركة</h3>
            <p class="">
              <span>Edit-Infinite هو استوديو محتوى للتجارة الإلكترونية في الإمارات العربية المتحدة، مصمم خصيصًا للعلامات التجارية التي تتطلع إلى توسيع نطاق وصولها عبر الإنترنت في السوق. نحن نفخر بدمج القوالب التقليدية والأخلاق المعاصرة لكل شيء متعلق بمحتوى التجارة الإلكترونية.</span>
              <span> 
                <a href="https://greatplacetowork.me/certified-organization/smartt-studio/" id="calltoaction" style="color:#9C07DC">اقرأ المزيد...</a>
              </span> 
            </p>  
            <div class="d-flex justify-content-between cta">
              <a class="cta-btn z-1" href="contact.php">تواصل معنا
</a>
            </div>       
          </div>       
        </div>    
      </div>
    </section>
      <!-- End Team Section -->
  </main>
  <!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>


</body>

</html>