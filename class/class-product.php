<?php

class Product
{

    private $pdo;

    // Construtor de conexão;
    public function __construct($dbname, $host, $user, $pass)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $pass);
        } catch (PDOException $e) {
            echo "Erro com a conexão com banco de dados: " . $e->getMessage();
            exit();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function selectData()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM produtos ORDER BY id_produto DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        
        return $res;
    }

   
    public function registerProduct($nome, $categoria, $quantidade, $data_compra, $preco_custo, $margem_lucro, $dir_image)
    {

        $cmd = $this->pdo->prepare("SELECT nome_produto from produtos where nome_produto = :n");
        $cmd->bindValue(":n", $nome);
        $cmd->execute();

        if ($cmd->rowCount() > 0) {
            return false;
        } else {
            $cmd = $this->pdo->prepare("INSERT INTO produtos (nome_produto,categoria,quantidade,data_compra,preco_custo,margem_lucro,dir_image) values (:n,:c,:q,:d,:pc,:ml,:di)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":c", $categoria);
            $cmd->bindValue(":q", $quantidade);
            $cmd->bindValue(":d", $data_compra);
            $cmd->bindValue(":pc", $preco_custo);
            $cmd->bindValue(":ml", $margem_lucro);
            $cmd->bindValue(":di", $dir_image);
            $cmd->execute();
            return true;
        }
    }

  
}
