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

	

function getContactInfo(){
		global $conn;
		$sql = "SELECT * from contact";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data= $rows;
			}return $data;
		}
	}
	
	

?>