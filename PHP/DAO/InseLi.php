<?php

    namespace HTMLPHP\PHP\DAO;

    require_once('Conexao.php');

    use HTMLPHP\PHP\DAO\Conexao;

    class InseLi{
        public function cadastrar(Conexao $conex, string $Livros, string $titulo, string $autor, string $lanza, string $editora, int $ISBN){//erro pela ordem de paramentros
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Livros (ISBN, titulo, autor, editora, lanza) values ('$ISBN','$titulo','$autor','$editora','$lanza')";//Comando script do MySQL para inserir na tabela é nessa ordem que vai ser preenchida nossa tabela!!!!
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco q salvamos em sql e conn

                if($result){
                    return "<br><br>Livro Inserido com sucesso!";
                }else{
                    return "<br><br>Algo deu Errado! :(";
                }
                mysqli_close($conn);//Fechado a conexão.
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do método inserir
    }//Fim da classe Inserir Livros

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../CSS/efeitos.css"></link>
</head>
<body>
    <form method="POST">
        <label>ISBN:</label>
        <input type="number" name="ISBN" placeholder="-   -   -"/><br><br>

        <label>Titulo:</label>
        <input type="text" name="Titulo"/>

        <label>Autor:</label>
        <input type="text" name="Autor"/><br><br>

        <label>Editora:</label>
        <input type="text" name="Editora"/><br><br>

        <label>Lançamento:</label>
        <input type="text" name="lanza" placeholder="--/--/--.23"/><br><br>
        
        <button>Foi 1 Livro</buttom>
        
        
        
        
        
        
        
        
        
        
        
        
        <!--tag nav define uma área de navegação
            começo tag php
            function __ToString (){
                for($i = 0 ; $i > 1 ; $i ++){

                }
            }
            echo $i+1 
            fim tag php
            Livro --></button><!--aqui podemos fazer um for Loop para mostrar o length do Array?-->


        <?php
       
            $conne = new Conexao();
            $in = new InseLi();
            echo $in-> cadastrar($conne , "Livros", $_POST['Titulo'], $_POST['Autor'], $_POST['lanza'], $_POST['Editora'], $_POST['ISBN']);
        
            

        ?>
    </form>

    <a href="Consultar.php"><button>Consultar</button></a>
    <a href="Atualizar.php"><button>Atualizar</button></a>
    <a href="Excluir.php"><button>Excluir</button></a>
</body>
</html>