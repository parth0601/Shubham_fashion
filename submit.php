<?php 


$con=mysqli_connect('localhost','root','','shubham_fashion');

if($con === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$message = $_REQUEST['message'];

	
	if ($name != "" && $email != "" && $mobile != "" && $message != "") {
	
 	$sql = ("insert into contact_us(name,email,mobile,message) values('$name','$email','$mobile','$message')");
	
	if(mysqli_query($con, $sql)){
		
		// header("Location: index.php"); 

		echo 1;
	
            
        } 
		else{
          echo 0;
        }
	}
	


$curlx = curl_init();

curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curlx, CURLOPT_HEADER, 0);
curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curlx, CURLOPT_POST, 1);

$post_data = 
[
    'secret' => '6LeD7nUnAAAAABHTRcvL326TdKJvSSbJxzF-MXZY',
    'response' => $_POST['g-recaptcha-response']
];

curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);

$resp = json_decode(curl_exec($curlx));

curl_close($curlx);

if ($resp->success) 
{
    //success!
} else 
{
    // failed
    echo "error";
    exit;
}
?>