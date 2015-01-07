<?php
if(isset($_POST['name'])){
	
	$message = $_POST['message'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	
	if(strlen($name)<=3) {
		$response = array('status'=>'error', 'message'=> 'Message Could not be sent, name should be more than 3 characters');
		echo json_encode($response);
		return 1;
	}
	if(strlen($message)<=10) {
		$response = array('status'=>'error', 'message'=> 'Message too short to be sent!');
		echo json_encode($response);
		return 1;
	}
	if(strlen($email)<=6) {
		$response = array('status'=>'error', 'message'=> 'Invalid Email');
		echo json_encode($response);
		return 1;
	}



	
	$to = "somebody@example.com";
	$subject = "<Zense><Website Message>";
	$txt = '<html>You received a message from '.$name.'<br>Email ID: '.$email.'.<br>He wrote: '.$message.'</html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	mail('vikasyadavgood@gmail.com',$subject,$txt, $headers);
	
	$response = array('status'=>'success', 'message'=> 'Message sent successfully');
	echo json_encode($response);
}



?>
