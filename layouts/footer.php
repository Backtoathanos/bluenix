
  <footer class="footr_area">
    <div class="footer_widget_area">
      <div class="container">
        <div class="row footer_widget_inner">
          <div class="col-lg-4 col-sm-6">
            <aside class="f_widget f_about_widget">
              <img src="img/bluenix-logo.png" alt width="240px">
              <p>Welcome to <b>Bluenix</b>, <i>where innovation meets excellence</i> in Web Development, Search Engine Optimization, and Social Media Management. We create websites that are not just visually striking but also functional, turning your online presence into an engaging experience. Our team of skilled developers and designers harness the power of cutting-edge technology to bring your vision to life.</p>
            </aside>
          </div>
          <div class="col-lg-4 col-sm-6">
            <aside class="f_widget f_insta_widget">
              <div class="f_title">
                <h3>Feeds</h3>
              </div>
              <ul>
                <li><a href="#"><img src="img/instagram/ins-1.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-2.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-3.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-4.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-5.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-6.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-7.jpg" alt></a></li>
                <li><a href="#"><img src="img/instagram/ins-8.jpg" alt></a></li>
              </ul>
            </aside>
          </div>
          <div class="col-lg-4 col-sm-6">
            <aside class="f_widget f_subs_widget">
              <div class="f_title">
                <h3>Subscribe to newsletter</h3>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                <span class="input-group-btn">
                  <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                </span>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_copyright">
      <div class="container">
        <div class="float-sm-left">
          <h5 style="color:#ffffff;">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
          </h5>
        </div>
        <div class="float-sm-right">
          <ul>
            <li><a href="https://pin.it/2PIFNfXKn"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=61556072877262"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/only_bluenix"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/only_bluenix/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery-3.2.1.min.js"></script>

  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

  <script src="vendors/counterup/jquery.waypoints.min.js"></script>
  <script src="vendors/counterup/jquery.counterup.min.js"></script>
  <script src="vendors/counterup/apear.js"></script>
  <script src="vendors/counterup/countto.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/circle-bar/circle-progress.min.js"></script>
  <script src="vendors/circle-bar/plugins.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOw2gVnpBPC80FN3DG6Gpik--4IZ0YUvw"></script>
  <script src="js/gmaps.min.js"></script>

  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/circle-active.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/theme.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8X020QFZE6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8X020QFZE6');
  </script>

  <script>
      $(document).ready(function(){
          var url = document.location.href;
          var qs = url.substring(url.indexOf('?') + 1).split('&');
          for(var i = 0, result = {}; i < qs.length; i++){
              qs[i] = qs[i].split('=');
              result[qs[i][0]] = decodeURIComponent(qs[i][1]);
          }

          if(result.page==undefined){
              const pathname = window.location.pathname;
              if(pathname=="/bluenix/index.php" || pathname=="/index.php"){
                  window.location.href="index.php?page=home";
              }else if(pathname=="/bluenix/about-us.php" || pathname=="/about-us.php"){
                  window.location.href="about-us.php?page=aboutus";
              }else if(pathname=="/bluenix/service.php" || pathname=="/service.php"){
                  window.location.href="service.php?page=service";
              }else if(pathname=="/bluenix/service.php" || pathname=="/service.php"){
                  window.location.href="service.php?page=portfolio";
              }else if(pathname=="/bluenix/portfolio.php" || pathname=="/portfolio.php"){
                  window.location.href="portfolio.php?page=portfolio";
              }else if(pathname=="/bluenix/blog.php" || pathname=="/blog.php"){
                  window.location.href="blog.php?page=blog";
              }else if(pathname=="/bluenix/contact.php" || pathname=="/contact.php"){
                  window.location.href="contact.php?page=contact";
              }else{
                  $(".home").addClass("active");
              }
          }else{
              $("."+result.page).addClass("active");
              $("."+result.subpage).addClass("active");
              if(result.page==undefined){
                  $(".home").addClass("active");
              }
          }
      });
  </script>