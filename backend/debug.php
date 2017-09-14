
<?php
class PDOdatabase{
      public $conn;
      public function __construct(){
      try{
      	$this->conn = new PDO('mysql:host=localhost;DBNAME=admin;', 'root', 'noroto');
      	$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      	echo "connection established";
  	}catch(PDOException $e){
  		echo "Error ". $e->getMessage();
  }
  }
  	public function divisionByZero(){
  		try{
  			$x=5;
  			$y =0;
  			$z = $x/$y;
  			throw new Exception('Divided by Zero.');
  		}catch(Exception $e){
  			echo $e->getMessage();
  		}
  	}

  	public function getUserbyId($id){
  		// $sql = "SELECT * FROM news_category ORDER BY title ASC";
  	try{	$stmt = $this->conn->prepare("SELECT * FROM news_category WHERE id = :id");
  		$stmt->bindParam(':id', $id);
  		$stmt->execute();
  		$data = array();
  		while($rows = $stmt->fetchObject()){
  			$data[] = $rows;
  		}
  		return $data;
  		}catch(PDOException $e){
  			echo $e->getMessage();
  		}
  	catch(Exception $e){
  			echo $e->getMessage();
  		}
  }
}
  $pdo_obj = new PDOdatabase();
  $pdo_obj->divisionByZero();
  $data = $pdo_obj->getUserbyId(1);
  print_r($data);
  ?>