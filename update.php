<?php
  session_start();
    
    $con=mysqli_connect("localhost","root","","shubham_fashion");
   
    if (isset($_GET['id'])){

        
      $date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
      $dateTime = $date->format('y/m/d H:i:s a');
  
        $current_id=$_GET['id'];
        $sql="UPDATE contact_us SET 
            status = 'Completed', Close_date = '$dateTime' WHERE id='$current_id'";


    
         header("location: view.php");

        mysqli_query($con,$sql);
}

?>
