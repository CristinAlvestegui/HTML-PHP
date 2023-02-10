<?php
    namespace HTMLPHP\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use HTMLPHP\PHP\Modelo\DAO\Conexao;

    class ConsuLivro{

        public function consulIndi(Conexao $connect, string $Livros, int $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros where ISBN = '$ISBN'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["ISBN"] == $ISBN){
                        echo "<br><br>ISBN ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."<br>Lançamento: ".$dados["lanza"]."<br><br>";
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "ISBN não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim da função para consultar livros individuais

        public function consulTudo(Conexao $connect, string $Livros){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ISBN ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."<br>Lançamento: ".$dados["lanza"]."<br><br>";
                }//Fim do while
                mysqli_close($conn);
            }
            catch(Except $erro){
                echo $erro;
            }//Fim do Try Catch
        }//Fim do método para Consultar todos os livros
    }//Fim da classe para consultar individualmente

?>