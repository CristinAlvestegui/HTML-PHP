<?php
    namespace HTMLPHP\PHP\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'Books');
                if($conn){
                    echo "<br>Entramos na Livraria!";
                    return $conn;
                }else{
                    echo "<br>Algo deu errado!";
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do método para conxão com SQL

    }//Fim da classe conexão


?>