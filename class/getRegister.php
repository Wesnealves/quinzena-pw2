<?php
require_once("class-product.php");
$p = new Product("estoquecrud", "localhost", "root", "");

// Verifica se foi enviado algo pelo botão submit;

if (isset($_POST['nome_produto'])) {
    $nome_produto = addslashes($_POST['nome_produto']);
    $categoria = addslashes($_POST['categoria']);
    $quantidade = addslashes($_POST['quantidade']);
    $data_compra = addslashes($_POST['data_compra']);
    $preco_custo = addslashes($_POST['preco_custo']);
    $margem_lucro = addslashes($_POST['margem_lucro']);
    $registerImg = true;

    if ($_FILES["imagem"]["type"] == "image/jpeg") {
        $nome_imagem = md5($_FILES['imagem']['name'] . rand(0, 99)) . ".jpg";
    } else if ($_FILES["imagem"]["type"] == "image/png") {
        $nome_imagem = md5($_FILES['imagem']['name'] . rand(0, 99)) . ".png";
    }


    if (!empty($nome_produto) && !empty($categoria) && !empty($quantidade) && !empty($data_compra) && !empty($preco_custo) && !empty($margem_lucro) && !empty($nome_imagem)) {

        if (!$p->registerProduct($nome_produto, $categoria, $quantidade, $data_compra, $preco_custo, $margem_lucro, $nome_imagem)) /*nome salvo no banco*/ {
            echo $nome_produto . " já está cadastrado!";
            $registerImg = false;
        }
        if (isset($_FILES["imagem"]) && $registerImg) {
            move_uploaded_file($_FILES["imagem"]["tmp_name"], "user_images\.$nome_imagem"); // diretorio que é salvo
        }

    } else {
        ?>
        <script type="text/javascript">
            alert('Por favor, refaça o cadastro, verificando se todos os campos foram preenchidos e o formato da imagem.')
        </script>
        <?php
    }
    
}
?>
<!-- Falta corrigir, após enviar um form com imagem, mesmo se o produto já estiver cadastrado, ele reenvia a imagem ao atualizar a pagina do navegador-->