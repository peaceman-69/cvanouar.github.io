<?php

if (isset($_POST['submit'])) {
	$name = $_POST['namef'];
	$email =$_POST['emailf'];
	$subject = $_POST['subjectf'];
    $message = $_POST["messagef"];
	$txt = 'message: '.$_POST['messagef']." \n\n";
	$mailTo = "abdessking01@gmail.com";
	$headers = "From: ".$email;
	$txt = "Vous avez reçus un mail de la part la société:".' '.$name.".\n\n".$email.".\n\n".$subject.".\n\n".$message ;

}
mail($mailTo,'a Job offer',$name .' '. $email .' '. $txt, $headers);
header("Location: AnouarBenAbdesselem.html?mailsent");
?>