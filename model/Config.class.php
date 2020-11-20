<?php 
	Class Config{

		// INFORMAÇÕES BÁSICAS DO SITE
		const SITE_URL = "http://localhost";
		const SITE_PASTA = "loja";
		const SITE_NOME = "Loja do Freitas - PHP 7 e Mysqli";
		const SITE_EMAIL_ADM = "lojajefson@gmail.com";


		// INFORMAÇÕES DO BANCO DE DADOS
		const BD_HOST = "localhost",
			  BD_USER = "root",
			  BD_SENHA = "",
			  BD_BANCO = "lojafreitas",
			  BD_PREFIX = "";

		//INFORMAÇÕES PARA PHP MAILLER
		const EMAIL_HOST = "smpt.gmail.com";
		const EMAIL_USER = "lojajefson@gmail.com";
		const EMAIL_NOME = "Contato Loja Jefson";
		const EMAIL_SENHA = "jefson@123";
		const EMAIL_PORTA = 587;
		const EMAIL_SMTPAUTH = true;
		const EMAIL_SMTPSECURE = "tls";
		const EMAIL_COPIA = "lojajefson@gmail.com";

	}
?>
