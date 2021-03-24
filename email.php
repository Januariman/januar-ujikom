<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if(isset($_POST['kirim'])){
	if(empty($_POST['namaanda'])){
		$_POST['namaanda'];
	}
	if(empty($_POST['emailanda'])){
		$_POST['emailanda'];
	}
	if(empty($_POST['nama_penerima'])){
		$_POST['nama_penerima'];
	}
	if(empty($_POST['email_penerima'])){
		$_POST['email_penerima'];
	}

	$namaanda = $_POST['namaanda'];
	$emailanda = $_POST['emailanda'];
	$nama_penerima = $_POST['nama_penerima'];
	$email_penerima = $_POST['email_penerima'];
	$subjek = $_POST['subjek'];
	$body = $_POST['pesan'];
	
	//Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'da74a17f5f4fc8';                     //SMTP username
	    $mail->Password   = '6ecbb032045c59';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 2525;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom($emailanda, $namaanda);
	    $mail->addAddress($email_penerima, $nama_penerima);     //Add a recipient
	 
	  
	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $subjek;
	    $mail->Body   = $body ;
	    $mail->send();

	    echo "
	    <script>alert('Sukses menambahkan data');window.location='index.php'</script>";
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	// $nama = $_POST['namaanda'];
	// $Email = $_POST['emailanda'];
	// $Penerima = $_POST['nama_penerima'];
	// $email_penerima = $_POST['email_penerima'];
	// $Pesan = $_POST['Pesan']; 
	// $header =$_POST['emailanda'];
	// $subject = $_POST['subjek'];
	// if(mail($email_penerima, $subjek, $Pesan)){
	// 	echo "
	// 	<Script>
	// 	alert('pesan berhasil terkirim');
	// 	document.location.href ='index.php';
	// 	</Script>
	// 	";
	// }else{
	// 	echo "
	// 	<Script>
	// 	alert('email gagal dikirimkan, silahkan coba lagi');
	// 	document.location.href ='index.php';
	// 	</Script>
	// 	";
	// }
}