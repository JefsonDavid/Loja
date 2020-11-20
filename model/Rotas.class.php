<?php 
	
	class Rotas {

		public static $pag;
		private static $pasta_controller = 'controller';
		private static $pasta_view = 'view';


		static function get_SiteHOME(){
			return Config::SITE_URL .'/'. Config::SITE_PASTA;
		}

		static function get_SiteRAIZ(){
			return $_SERVER['DOCUMENT_ROOT'] .'/'. Config::SITE_PASTA;
		}

		static function get_SiteTEMA(){
			return self::get_SiteHOME() .'/'. self::$pasta_view;
		}

		static function pag_Carrinho(){
			return self::get_SiteHOME() .'/carrinho';
		}

		static function pag_Contato(){
			return self::get_SiteHOME() .'/contato';
		}

		static function pag_MinhaConta(){
			return self::get_SiteHOME() .'/minhaconta';
		}



		static function get_Pagina(){
			//Aqui ele vai verificar se a url existe
			if (isset($_GET['pag'])) {

				//Essa variavel $pagina vai receber oq ta vindo por parametro na url
				$pagina = $_GET['pag'];

				//Esta dizendo para utilizar uma variavel chamada $pag que esta nesta pagina pode ser fito tbm assim: $this->$pag
				self::$pag = explode('/', $pagina);//O explode('/', $pagina) vai entender q toda vez q tiver uma barra na url e um novo item nesse array por exemplo: http://localhost/Loja/carrinho/teste esse array tera duas posicoes, uma por carrinho e outra por teste
				
				//DEBUG
				// echo "<pre>";
				// var_dump(self::$pag);
				// echo "</pre>";


				$pagina = 'controller/' .self::$pag[0]. '.php';
				//$pagina = 'controller/' .$_GET['pag']. '.php';
				//Aqui ele vai verificar se o arquivo existe
				if (file_exists($pagina)) {
					include $pagina;
				}else{
					include 'erro.php';
				}
			}
		}
	}	

 ?>