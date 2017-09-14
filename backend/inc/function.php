<?php

	function debugger($array, $is_die = false){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($is_die){
			echo "There is some problem";
			exit;
		}
	}

	function sanitize($string){
		if(get_magic_quotes_gpc()){
			$string = trim(stripslashes($string));
		}
			$string = strip_tags($string);
			$string = trim($string);
		return $string;
	}

	function getUser($username){
		global $conn;
		$sql = "SELECT * from users where username = '$username'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data[]= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}return $data;
		}
	}

	function getAllUserlist(){
		global $conn;
		$sql = "SELECT * from user_signup";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getAllEnquiry(){
		global $conn;
		$sql = "SELECT * from enquiry order by id desc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function addMember($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "INSERT INTO positions (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";

    $query = mysqli_query($conn, $sql);
		if($query){
   		return $conn->insert_id;
    }else{
     return false;
    }
	}

	function getFileExtension($fileName){

		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		return $ext;
	}

	function addProfileImages($images, $member_id){
	global $conn;
	$values = array();
	foreach(images as $image){
		$values[] = " (".$member_id.", '".$image."') ";
	}
	$sql = "INSERT INTO member_image (member_id, image_title) VALUES ".implode(',', $values);

	$query = mysqli_query($conn, $sql);
	if($query){
		return true;
	}else{
		return false;
	}
}

	function getPositionofOrg(){
		global $conn;
		$sql = "SELECT * FROM positions ORDER BY pos_title asc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
?>
