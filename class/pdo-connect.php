<!--?php

$dbname = "estoquecrud";
$host = "localhost";
$user = "root";
$pass = "";

    try{
        $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
    }catch(PDOException $e)
    {
        echo "Erro com a conexão com banco de dados: ".$e->getMessage();
    }catch(Exception $e){
        echo "Erro genérico: ".$e->getMessage();
    }


?>
-->