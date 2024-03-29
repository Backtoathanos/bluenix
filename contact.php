<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("layouts/header.php"); ?>
</head>

<body>
  <?php include_once("layouts/navigation.php"); ?>


  <section class="banner_area">
    <div class="container">
      <div class="banner_inner_text">
        <h2>Contact</h2>
        <p>Get in touch</p>
      </div>
    </div>
  </section>


  <section class="get_in_touch_area p_100">
    <div class="container">
      <div class="row get_touch_inner">
        <div class="col-lg-6">
          <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="form-group col-lg-6">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group col-lg-6">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-lg-12">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
            </div>
            <div class="form-group col-lg-12">
              <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="touch_details">
            <div class="l_title">
              <img src="img/icon/title-icon.png" alt>
              <h6>Say hello</h6>
              <h2>Reach out to us via phone or e-mail</h2>
            </div>
            <p>We would be happy to hear from you, whether you have inquiries about our services, a project in mind, or you simply want to say hi. Please get in contact with us so that we may begin a conversation that will lead to digital greatness.</p>
            <a href="tel:+917209581823">
              <h5>Call us now</h5>
            </a>
            <a href="tel:+917209581823">
              <h4>+91 720 958 1823</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact_map_area">
    <div id="mapBox1" class="mapBox1 row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="15" data-marker
      data-info data-mlat data-mlon>
    </div>
    <div class="map_location_box">
      <div class="container">
        <div class="map_l_box_inner">
          <div class="bd-callout">
            <h3>Bluenix Office</h3>
            <p>Jamshedpur, Jharkhand <br /> India</p>
            <h4><a href="mailto:info@bluenix.in?subject=[Help]%20For Business Consult&cc=nausher.khan12@gmail.com;">+91 720 958 1823</a> <a href="#"><span class="__cf_email__"
                  data-cfemail="04676b6a706567704470616974686570612a676b69">info@bluenix.in</span></a></h4>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include_once("layouts/footer.php"); ?>
</body>

</html>