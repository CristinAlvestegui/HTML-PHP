<?php

    namespace HTMLPHP\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use HTMLPHP\PHP\Modelo\DAO\Conexao;
    
    class Excluir{

        public function deleLi(Conexao $connect, string $Livros, int $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "delete from $Livros where codigo = 'codigo'";
                $result = mysqli_query($conn, $sql);
                while(){
                    
                }
            }catch(){

            }
        }
    }//Fim do método para excluir
?>