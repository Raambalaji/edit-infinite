<?php ?>
<footer id="footer">
    <div class="footer-top footer-top1">
        <div class="container-fluid">
          <div class="row footerborder">
            <div class="col-lg-5 col-md-6">
              <div class="">
                <img src="../assets/img/logo.png" alt="edit infinite" class="logo-image">
                <div class="">
                  <p class="bodyfonts">بصفتنا الرائد بالسوق، نحن نحدد المعيار لحلول الأعمال الابتكارية في صناعات المواهب والأزياء والإعلان ووسائل الإعلام عبر العالم</p>    
                </div>       
                
                <div class="social-links social-links1 mt-3">
                  <a href="https://twitter.com/Smartt_Studio" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100081019796305" class="facebook" target="_blank" ><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/smartt.ai/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                  <a href="https://www.linkedin.com/company/smarttstudio/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                </div>   

                <div class="footermargin">
                  <a href="editinfiniteprivacypolicy.php"> سياسة الخصوصية لـ Edit-Infinite  |</a> 
                  <a href="dataprotectionprivacypolicy.php"> سياسة حماية البيانات  |</a>
                  <a href="cookiesprivacypolicy.php"> سياسة الكوكيز</a> <br> 
                  حقوق النشر © 2023 Edit Infinite . جميع الحقوق محفوظة.
                </div>               
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Edit Infinite</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="about.php">عنا</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="solutions.php">حلولنا</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="pricing.php">التسعير</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="contact.php">اتصل بنا</a></li>
              </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>خدماتنا</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="solutions.php#editing">تحرير الصور</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="solutions.php#Clipping">قص الصور</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="solutions.php#Retouching">تنقيح الصور</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="solutions.php#Manipulation">التلاعب بالصور</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>اتصل بنا</h4>
              <p class="bodyfonts"> 
                <strong>اتصل بنا:</strong><a href="tel:971563699788" class="text-black"> +971 56 369 9788</a><br><br>
                <strong>ارسل لنا بريدًا:</strong> <a href="mailto:info@editinfinite.com" class="text-black">info@editinfinite.com</a><br><br>
              </p>
            </div>
          </div>
        </div>
    </div>
</footer>
 
<a href="https://api.whatsapp.com/send?phone=971585297317" target="_blank" class="whatsapp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-100 h-100" alt="whatsapp">
</a>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'></script>  

<!-- pluingins JS Files -->
<script src="../assets/plugins/aos/aos.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/glightbox/js/glightbox.min.js"></script>
<script src="../assets/plugins/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/plugins/swiper/swiper-bundle.min.js"></script>
<script src="../assets/plugins/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.0/lottie.min.js"></script> 

<script>
  $(document).ready(function() {
    // $.getJSON("your_file.json", function(data) {
    //   var jsonData = JSON.stringify(data, null, 2);
    //   $("#jsonData").text(animContainer);
    // });


    var currentPath = window.location.pathname;
    $('.navbar-nav a').each(function() {
        var linkPath = $(this).attr('href');
        if (currentPath.includes(linkPath)) {
            $(this).addClass('active');
        }
    });

});
</script>