<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$description = sanitize($_POST['description']);
		$email = sanitize($_POST['email']);
		$phone = sanitize($_POST['phone']);
		$fax = sanitize($_POST['fax']);
		$address = sanitize($_POST['address']);
		$pobox = sanitize($_POST['pobox']);
		$link = $_POST['link'];
		

		
		$sql = "INSERT INTO contact SET description = '$description', email = '$email', phone='$phone', fax = '$fax', address = '$address', pobox = '$pobox', link = '$link' ";
		// debugger($sql, true);
		// exit;
		$query = mysqli_query($conn, $sql);
		
		if($query){
			$_SESSION['success'] = "Contact Info has been added successfully.";
			echo "here";
			@header('location: ../contact');
			exit;
		}else{
			$_SESSION['warning'] = "Contact Info couldn't be added at this moment.";
			@header('location: ../contact');
			exit;
		}		
	}
?>