<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shubham Fashion | Manufacturer</title>

  <!-- For SEO -->
  <meta name="description" content="Fashion is the armor to survive the reality of everyday life. We foucus on the quality of the Clothes. It can possible that our price is not same as the market price but we promised you that We never Comproise with the quality of clothes.">
  <meta name="keywords" content="womens clothes,mens fashion,fashion designing,new fashion,fashion trends,fashion illustration,best Clothes in wholesale" >
  <meta name="author" content="Parth patel">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>
        .flash-window {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            z-index: 999;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .unable-flash-window {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            z-index: 999;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .alert-text {
          color:green;
        } 
        .faild-text {
          color:red;
        }
        .count {
          position: relative;
          /* top: -30px; */
          left: 85%;
        }
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
              
                event.preventDefault(); // Prevent form submission
                
                var formData = $(this).serialize(); // Get form data

                // Perform AJAX request
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                      // alert(response)
                      if(response == 1){
                        // Show flash window
                        $('.flash-window').fadeIn().delay(1000).fadeOut();
                      }
                      else{
                        $('.unable-flash-window').fadeIn().delay(1000).fadeOut();
                      }
                        
                    },
                    error: function(response) {
                      $('.unable-flash-window').fadeIn().delay(1000).fadeOut(); // for unable to insert data ...
                    }
                });
                formToReset.reset(); // to clear form data after submiting...
                grecaptcha.reset();
            });
        });

    </script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Captcha link -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  
</head>

<body class="index-page" id="index-page">

  <!-- Header  -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/logo.png" alt="">
        <!-- <h1>Shubham Fashion</h1> -->
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="index.php#product">Product</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#contact">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- top Section  -->
    <section id="hero" class="hero">

      <img src="assets/img/banner.png" alt="banner" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">We are Manufacturer...</h2>
            <p data-aos="fade-up" data-aos-delay="200">"Fashion is the armor to survive the reality of everyday life."</p>
          </div>
        </div>
      </div>

    </section>

  

    <!-- product Section  -->
    <section id="product" class="product">

      <!--  Section Title -->
      <div class="container section-title">
        <h2>Products</h2>
        <p>We provide T-shirt, paint, kurta, trackpants, cap ane many more items in bulk...</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/girl.png" class="img-fluid" alt="girl">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/tshirt.png" class="img-fluid" alt="tshirt">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/jeans.png" class="img-fluid" alt="jeans">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/cap.png" class="img-fluid" alt="cap">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/track.png" class="img-fluid" alt="track">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/suit.png" class="img-fluid" alt="suit">
            </div>


          </div><!-- End product Container -->

        </div>

      </div>

    </section><!-- End Product Section -->



     <!-- About Section  -->
     <section id="about" class="about">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row align-items-xl-center gy-5">
  
            <div class="col-xl-5 content">
              <h3>About Us</h3>
              <h2>Ilesh patel</h2>
              <p>I'm founder of <b><i>"Shubham Fashion".</i></b>We belive in good qulity of products..We will never 
            compromise in our primium qulity of our products.Our main goal is to provide good quality of
        products at good price.</p>
            </div>
  
            <div class="col-xl-7">
              <div class="row gy-4 icon-boxes">
  
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-bag"></i>
                    <h3>Product</h3>
                    <p>We provide you best products at best prices...</p>
                  </div>
                </div> 
  
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-check2-square"></i>
                    <h3>Quality</h3>
                    <p>We use premium quality for making clothes.</p>
                  </div>
                </div> 
  
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-command"></i>
                    <h3> Increases self-confidence</h3>
                    <p>Many people struggle with this, but the right piece of clothing in the right situation can boost a person’s mood and completely transform them</p>
                  </div>
                </div> 
  
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <i class="bi bi-graph-up-arrow"></i>
                    <h3>Makes a difference</h3>
                    <p>Designers create clothing for every type of personality. Every item has a purpose.</p>
                  </div>
                </div> 
  
              </div>
            </div>
  
          </div>
        </div>
  
      </section><!-- End About Section -->



    <!-- Contact Section  -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>If you have any query or want to know more about us Contact us or fill the form to Reach us.
          </p><p>Our team will contact you as soon as possible...</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>D-411, Sumel Business park 6,</p>
                  <p>Nr. Hanumanpura BRTS Stop</p>
                  <p>Dudheswar, Ahemadabad - 380004</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 99989 99252</p>
                  <p>+91 99989 92331</p><br>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>shubhamfashionindia@gmail.com</p><br>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>11:00AM - 06:00PM</p>
                </div>
              </div>

            </div>

          </div>
          
        <!-- Add any additional content you want to display -->
    

        <div class="col-lg-6">
            <form class="php-email-form" id="form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" id="personname" class="form-control inputbox" placeholder="Your Name" onchange="field()" onblur="field()">
                  <span id="namespan" style="color: red; font-size: 12px;"></span>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control inputbox" name="email" id="email" placeholder="Your Email" onchange="field1()" onblur="field1()">
                  <span id="emailspan" style="color: red; font-size: 12px;"></span>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control inputbox" name="mobile" id="mobile" pattern="[0-9]{10}" placeholder="Mobile No" onchange="field2()" onblur="field2()">
                  <span id="mobilespan" style="color: red; font-size: 12px;"></span>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control inputbox" name="message" id="msg" rows="6" placeholder="Write message upto 500 character only..." onchange="field3()" onblur="field3()" onkeyup="charCount(this);"></textarea>
                  <div class="count"><span id="textcount">0</span> / 500 <br></div>
                  <span id="msgspan" style="color: red; font-size: 12px;"></span>
                </div>

                <div class="g-recaptcha" data-sitekey="6LeD7nUnAAAAAPGgT2-6ysHaIl8eV8ljN6-G2UZ6"></div>

                <div class="col-md-12 text-center">
                
                  <button type="submit" value="Submit" id="Submit" disabled = "disabled" >Send Message</button>
                 </div>

              </div>
            </form> 
            
      </div>
         
      </div>
       
          
    <!-- Flash Window -->
    <div class="flash-window">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
</svg><br>
        <h3 class="alert-text">Success!</h3><br>
        <h4 class="alert-text">Data Saved Successfully!</h4>
    </div>

    <!-- When data is not inserted -->

    <div class="unable-flash-window">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
</svg><br>
        <h3 class="faild-text">Sorry!</h3><br>
        <h4 class="faild-text">Data is not saved. Please try again.</h4>
    </div>


          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- Footer -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <p style="font-size:18px"><b>Shubham Fashion</b></p>
          <span>We provide clothes in bulk. Aim is to provide the best quality </span><br>
          <span>of the cloth at best price.</span>  
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#product">Products</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Products</h4>
          <ul>
            <li>T-shirt</li>
            <li>Paint</li>
            <li>trouser</li>
            <li>Kurta</li>
            <li>Cap</li>
            <li>koti</li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>D-411, Sumel Business park 6,</p>
          <p>Nr. Hanumanpura BRTS Stop</p>
          <p>Dudheswar, Ahemadabad - 380004</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+91 99989 99252</span></p>
          <p><strong>Email:</strong> <span>shubhamfashionindia@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>  Copyright  Shubham Fashion 2023 . All Rights Reserved.</span></p><br>
      
      <p><span>Associate with</span> <strong class="px-1"><a href="https://www.amarucity.com/#/visitor/home" target="_blank">Amarucity</strong></a></p>
      
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
   function field(){

  var id = document.getElementById("personname").value;
  if(id === ""){
      document.getElementById("namespan").innerHTML = "This Field is Required *";
  }
  else{
      document.getElementById("namespan").innerHTML = "";
  }
}
  function field1() {
    var email = document.getElementById("email").value;
  if(email === ""){
      document.getElementById("emailspan").innerHTML = "This Field is Required *";
  }
  else{
      document.getElementById("emailspan").innerHTML = "";
  }
  }
  function field2() {
    var mobile = document.getElementById("mobile").value;
    
  if(mobile === ""){
      document.getElementById("mobilespan").innerHTML = "This Field is Required *";
  }
  else{
      document.getElementById("mobilespan").innerHTML = "";
  }
  }
  function field3() {
    var msg = document.getElementById("msg").value;

  if(msg === ""){
      document.getElementById("msgspan").innerHTML = "This Field is Required *";
  }
  else{
      document.getElementById("msgspan").innerHTML = "";
  }
  }
  </script>

  <script type ="text/javascript">

    function submit() {
      
      if(formvalues){
        var data = 
        {
          name: $('#personname').val(),
          email: $('#email').val(),
          mobile: $('#mobile').val(),
          message: $('#msg').val()
        };

        $.ajax({
          url: "index.php",
          type: "post",
          data: data,
          success:function(){
            Swal.fire({
              icon: "success",   //pop up no code
              title: "Data stored Successfully..."
            })
          }
        })
      }


    }

    const formToReset = document.getElementById('form');

    </script>
    

    <script>
      var checkInput = (e) => {
  const content = $("#personname").val().trim();
  $('#Submit').prop('disabled', content === '');
};


$(document).on('keyup', '#personname', checkInput);
    </script>

    <script>
      document.getElementById("form").addEventListener("submit",function(event)
  {
  
  var response = grecaptcha.getResponse();
  if(response.length == 0) 
  { 
    //reCaptcha not verified
    alert("please verify that you are human!"); 
    event.preventDefault();
    return false;
  }
  
  
});
    </script>

<script>
  // word counter
  function charCount(textarea){
    var length = textarea.value.length;
    // alert(length)
    $("#textcount").text(length)
  }
</script>

</body>
</html>