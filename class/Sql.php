<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");
		$this->conn->exec('SET CHARACTER SET utf8');
	}


		//$this->conn = new PDO("mysql:host=localhost;msql_dbname=bdphp7", "root", "");

	//}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);

		}
	}

	 //prepara varios parametros e chama o setParam

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	 //prepara a query utiliza os metodos acima

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	// Função para fazer select no bd

	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}


}


 ?>