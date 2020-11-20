<?php 
	require './lib/autoload.php';

	//require './controller/carrinho.php';

	$smarty = new Template();
	
	//Valores para o tamplate
	$smarty->assign('NOME', 'JEFSON DAVID BORGES');
	$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
	$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
	$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
	$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
	$smarty->assign('TITULO_SITE', Config::SITE_NOME);


	$dados = new Conexao(); 
	$sql = "SELECT * FROM categorias";
	$dados->ExecuteSQL($sql);

	var_dump($dados);

	$smarty->display('index.tpl');

 ?>

