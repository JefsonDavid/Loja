<?php 

	Class Conexao extends Config{
		private $host,  $user, $senha, $banco;

		function __contruct(){
			$this->host = self::BD_HOST;
			$this->user = self::BD_USER;
			$this->senha = self::BD_SENHA;
			$this->banco = self::BD_BANCO;
			$this->prefix = self::BD_PREFIX;

			try {
				if ($this->conectar() == null) {
					$this->Conectar();
				}
				
			} catch (Exception $e) {
				
				exit($e->getMessage(). '<h2> Erro ao conectar com o banco de dados! </h2>');

			}
		}

		private function Conectar(){
			//Array para guardar duas informações
			$options = array(
				//A primeira linha é para guardar a codificação
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				//A segunda é para algum alerta ou msg de erro
				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
				);
			$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
				$this->user, $this->senha, $options);
			return $link;
		}

		function ExecuteSQL($query, array $params = NULL){
			$this->obj = $this->Conectar()->prepare($query);
			return $this->obj->execute();
		}
	}


 ?>