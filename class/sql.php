<?php

class Sql extends PDO {
	
	private $conn;
	// conexão com o banco de dados usando PDO que pode ser conectado
	//em qualquer banco
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");
	}

	
	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
				
				$this->setParam($statement,$key, $value);

		}
	}


	private function setParam($statement, $key, $value){
		
		$statement-> bindParam($key, $value);
	}

	//Prepare prepara uma instrução e retornar um resource
	//chamado de prepared statement
	//OU seja , um objeto d instrução SQL pré compilado
	// que aguarda apenas ser executado
	public function execQuery($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
	
		$this->setParams($stmt, $params);

		 $stmt->execute();
		 return $stmt;
	}

	public function  select($rawQuery, $params = array()):array 
	{
		$stmt = $this->execQuery($rawQuery, $params);

		 return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}



?>