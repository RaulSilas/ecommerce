<?php

use \Hcode\Page;

// Rota para ao entrar no site jogar para o index
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

?>