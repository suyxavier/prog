<?php

require 'BDConetion.php';
require 'Categoria.php';

class CategoriaCrud
{
    public function __construct()
    {
        $this->conexao = BDConection::getConexao();
    }

    public function getCategorias(){

        $sql = "select * from categoria order by nome_categoria";
        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll(PDO::FETCH_CLASS,'Categoria', ['id_categoria' , ' nome_categoria', 'descricao_descricao']);

        return $listaCategorias;
    }

    public function getCategoria(int $id){

        $sql      = "SELECT * FROM categoria WHERE id_categoria = $id";
        $resultado = $this->conexao->query($sql);
        $categoria  = $resultado->fetch(PDO::FETCH_ASSOC);

        return new Categoria($categoria);
    }

    public function insertCategoria($categoria){

        $sql = "INSERT INTO 'categoria' ('nome_categoria', 'descricao_categoria') VALUES ( '".$categoria->setNome()."', '".$categoria->getDescricao()."');";


        $this->conexao->exec($sql);
    }
    public function updateCategoria($categoria){

        $consulta="UPDATE categoria 
                  SET nome_categoria = $categoria->getNome(),
                  descricao_categoria = $categoria->getDescricao()
                  WHERE id_categoria = $categoria->getId";
    }
}


//Insert, update e delete

/*$listaCategorias = [];
foreach ($categorias as $categoria){
    $cat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);
    $listaCategorias[] = $cat;
}*/
