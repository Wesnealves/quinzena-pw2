<?php
include("web\header.php");
include("class\getRegister.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Store - Aréa de Cadastro</title>
</head>

<body>

    <div class="container">
        <h2>Cadastramento de produtos</h2>
        <div class="row no-gutters">
            <div class="col-sm-6 col-md-8">
                <?php

                require_once("class\class-product.php");
                $p = new Product("estoquecrud", "localhost", "root", "");

                $data = $p->selectData();
                if (empty($data)) {
                    echo "Ainda não há registros";
                } else {
                    echo "<pre><p>";
                    foreach($data as &$value){
                            // Area dos cards.
                           
                           echo "<img src='user_images\.$value[dir_image]'>                 ";
                           echo "Nome: ".$value['nome_produto']."<br>";
                    }
                    echo "</pre></p>";
                }
                ?>

            </div>

            <div class="col-6 col-md-4">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome_do_produto">Nome do produto</label>
                        <input type="text" class="form-control" name="nome_produto" placeholder="Ex: Playstation 4 Slim 1TB" id="nome_do_produto">

                    </div>
                    <div class="form-group">
                        <label for="categoria__do__produto">Categoria</label>
                        <input type="text" class="form-control" name="categoria" placeholder="Ex: Consoles" id="categoria__do__produto">
                    </div>
                    <div class="form-group">
                        <label for="quantidade__estoque">Quantidade</label>
                        <input type="number" min="0" class="form-control" name="quantidade" placeholder="0" id="quantidade__estoque">
                    </div>
                    <div class="form-group">
                        <label for="data__compra">Data de compra</label>
                        <input type="date" class="form-control" id="data__compra" name="data_compra">
                    </div>
                    <div class="form-group">
                        <label for="preco_custo">Preço de custo</label>
                        <input type="number" class="form-control" name="preco_custo" placeholder="R$1.00" step="0.01" min="0" max="10000">
                    </div>
                    <div class="form-group">
                        <label for="preco_custo">Margem de lucro</label>
                        <input type="number" class="form-control" placeholder="5%" step="0.01" min="0" max="10000" name="margem_lucro">
                    </div>
                    <div class="form-group">
                        <label>Imagem</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Enviar</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputImage" name="imagem" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Foto,imagem,banner...</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Excluir</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <br>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm">
                <img src="images/logo.png" height="50" class="rounded">
            </div>
            <div class="col-sm">
                teste
            </div>
            <div class="col-sm">
                Teste
            </div>
        </div>

    </div>