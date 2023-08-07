<?php
namespace app\Model;

class ProdutoDao{

	public function create(Produto $p){

		$sql = "INSERT INTO produto(nome, descricao) VALUES(?,?)";
		$cadastrar = Conexao::getConn()->prepare($sql);

		$cadastrar->bindValue(1, $p->getNome());
		$cadastrar->bindValue(2, $p->getDescricao());

		$cadastrar->execute();

	}

	public function read(){

		$sql = "SELECT * FROM produto";
		$ler = Conexao::getConn()->prepare($sql);

		$ler->execute();

		if($ler->rowCount() > 0){
			$resultado = $ler->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		}else{
			return [];
		}

	}

	public function update(Produto $p){

		$sql = "UPDATE produto SET nome = ?, descricao = ? WHERE id = ?";
		$actualisar = Conexao::getConn()->prepare($sql);

		$actualisar->bindValue(1, $p->getNome());
		$actualisar->bindValue(2, $p->getDescricao());
		$actualisar->bindValue(3, $p->getId());

		$actualisar->execute();

	} 

	public function delete($id){

		$sql = "DELETE FROM produto WHERE id = ?";
		$apagar = Conexao::getConn()->prepare($sql);

		$apagar->bindValue(1, $id);

		$apagar->execute();
		
	}
}