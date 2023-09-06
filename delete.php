<?php
  session_start();
    
    $con=mysqli_connect("localhost","root","","shubham_fashion");
   
    if (isset($_GET['id'])){

        
  
        $current_id=$_GET['id'];
        $sql="DELETE FROM contact_us WHERE id='$current_id'";


    
         header("location: view.php");

        mysqli_query($con,$sql);
}

?>
