<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	// debugger($_POST); exit;
	if(isset($_POST) && !empty($_POST)){
		$data = array();
		$data['name']= sanitize($_POST['name']);
		$data['pos_title'] = sanitize($_POST['pos_title']);
		$data['pos_description'] = sanitize($_POST['pos_description']);
		$data['message'] = sanitize($_POST['message']);
		$data['type'] = sanitize($_POST['type']);
		$data['status'] = sanitize($_POST['status']);

		$member_id = addMember($data);
		if($member_id){
					$images =array();
					if(isset($_FILES) && !empty($_FILES['images']['tmp_name'])){
							// debugger($_FILES, true);
							$path = "upload";
							if(!is_dir($path)){
									mkdir($path);
							}
							$upload_path = $path."/news";
							if(!is_dir($upload_path)){
									mkdir($upload_path);
							}
							for($i=0; $i<count($_FILES['images']['tmp_name']); $i++){
									// debugger($_FILES, true);
									$ext = getFileExtension($_FILES['images']['name'][$i]);

									if(in_array($ext, $allowed_image_ext)){
											$file_name = "Profile-".rand(0,999999999).".".$ext;

											$success = move_uploaded_file($_FILES['images']['tmp_name'][$i], $upload_path."/".$file_name);

											if($success){
													$images[] = $file_name;
											}
									}
							}

					$uploads = addProfileImages($images, $member_id);

					}
					if($uploads){
							$_SESSION['success'] = "Profile has been added successfully";
							@header("location: ../position");
							exit;
							}
							else{
									$_SESSION['info'] = "Profile's data has been added but image couldn't be added at this moment.";
									@header("location: ../position");
									exit;
							}


					}else{
							$_SESSION['error'] = "Profile data hasn't been updated!";
							@header('location: ../position');
							exit;
			 }

	}else{
			$_SESSION['warning'] = "Invalid entry!!";
			@header('location: ../position');
			exit;
	}
?>
