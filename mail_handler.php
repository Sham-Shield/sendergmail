<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$subjectt=$_POST['subjectt'];
		$email=$_POST['email'];
		$toemail=$_POST['toemail'];
		$msg=$_POST['msg'];

		$to=$toemail; // Receiver Email ID, Replace with your email ID
		$subject=$subjectt;
		$message=$name."\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>