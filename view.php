<?php
session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "shubham_fashion";
     
   
   $conn = new mysqli($servername,$username,$password,$dbname);
     

//this is for stop direct access from file path

    if(!isset($_SESSION['uname'])){
      header("location: login.php");
    }


   
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
  
    $sql = "select * from contact_us ORDER BY id DESC";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shubham Fashion | Inquiry</title>
  <!-- For SEO -->
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <style>
    .plate {
      width: 100%;
      height: 60px;
      position: relative;
      top: 60px;
      border-radius: 45px;
      box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    }
    .ptext{
      margin-left: 25px;
      position: relative;
      top: 17px;
      font-size: 20px !important;
      color:red;
    }
    /* complete status mate */
    .comtxt{
      margin-left: 25px;
      position: relative;
      top: 17px;
      font-size: 20px !important;
      color:green;
    }
    .txt{
      position: relative;
      top: -25px;
      overflow-wrap: break-word;  
    word-wrap: break-word; 
    }
    .view{
      margin-left: 70%;
    }
    .logout{
      margin-left: 70%;
      position: relative;
      top: 50px;
      font-size: 18px;
      width: 80px;
      height: 80px;
      color: black;
      padding: 14px;
      background-image: linear-gradient(to right, #EF5E5E , #E5E97F);
      border-radius: 10px 20px;
    }
    .logout:hover{
      color: black;
      background-image: linear-gradient(to right, #E5E97F , #EF5E5E);
      border-radius: 20px 40px;
    }
    #close{
      display:none;
    }
    #del{
      position: relative;
      left: 13%;
      top: -38px; 
    }
  </style>

  
</head>

<body class="index-page" id="index-page">

  <!-- Header  -->
  <header class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">


      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <!-- End Nav Menu -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Contact Section  -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Inquiry</h2> 
  
        <a href="logout.php" class="logout">Logout</a>
  
      </div><!-- End Section Title -->



      <div class="container" data-aos="fade-up" data-aos-delay="100">

<div class="row gy-4">

  <div class="col-lg-12">

    <div class="row gy-1">
    <?php
               if(!empty($row))
               //$i = 1;
               foreach($row as $rows)
              { 
            ?>
      <div class="col-md-6">
      <div class="plate">
                      <?php 
                      if($rows['status'] == "Completed"){
                      echo '<p class="comtxt">Completed</p>';
                      }
                      else{
                        echo '<p class="ptext">Pending</p>';
                      }
                      ?>
                  </div>
                  <div class="info-item">
        
                  <div class="txt">
                  <br><br><br><label style="color:green">Inquiry Date Time :</label> &nbsp;<?php echo $rows['date_time']; ?><br>
                  <label>Name : </label> <?php echo $rows['name']; ?><br>
                  <label>Email : </label> <?php echo $rows['email']; ?><br>
                  <label>Mobile no : </label> <?php echo $rows['mobile']; ?><br>
                  <label>Message :  </label> <?php echo $rows['message']; ?><br>
                  
                  <?php
                   if($rows['status'] == "Completed"){
                    echo '<label style="color:green">Closed Date Time : &nbsp;</label>';
                    echo $rows["Close_date"];
                  }
                  ?>
                  
                  </div>
                  
                  <?php
                    if($rows['status'] == "Pending"){
                     echo '<a class="btn btn-success view" class="submit" id="sub" style="display:none" href="update.php?id=<?php echo $rows["id"] ?></a>';
                      
                     ?>
                     <a class="btn btn-success view" class="submit" id="sub" style="border-radius:10px" href='update.php?id=<?php echo $rows['id'] ?>'>Done</a>
                     <!-- <a class="btn btn-success view" class="submit" id="del" style="border-radius:10px" href='delete.php?id=<?php echo $rows['id'] ?>'>Delete</a> -->
                     <?php
                    }

                  ?>
                  </div>
              </div>

            <?php } ?>

          </div>

        </div>     
      
        
    </section>
    
    

    
    
  </main>

 

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
  
  <script src="assets/js/main.js"></script>

  <script>
$(document).ready(function(){
  $(".submit").click(function(){
    $(".comtxt").hide();
  });
});
</script>
 


</body>
</html>

<?php   
    mysqli_close($conn);
?>