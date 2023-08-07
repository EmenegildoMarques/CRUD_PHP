<?php
require_once 'vendor/autoload.php';

$Produto = new \app\Model\Produto;
$Produto->setId(1);
$Produto->setNome('Notebook HP');
$Produto->setDescricao('i5, 16gb');

#var_dump($Produto);

$produtoDao = new \app\Model\ProdutoDao;
$produtoDao->create($Produto);
$produtoDao->read();
$produtoDao->update($Produto);
$produtoDao->delete(2);

foreach ($produtoDao->read() as $produto) {
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
}
