<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'lucas123';
    $dbName = 'trilhatech';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*
     if($conexao->connect_errno)
    {
         echo "Erro";
    }
 else
     {
         echo "Conexão efetuada com sucesso";
     }
*/
class Usuario{

    private $pdo;
    public $msgErro = "";
 
    public function cadastrar($nome, $usuario, $email, $senha){

        global $pdo;

        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE usuario = :u");
        $sql->bindValue(":u",$usuario);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        }
        else{
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, usuario, email, senha) VALUES (:n, :u, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":u",$usuario);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",$senha);
            $sql->execute();
            return true;
        }
    }

    public function logar($usuario, $senha){

        global $pdo;

        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE usuario = :u AND senha = :s");
        $sql->bindValue(":u",$usuario);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }
        else{
            return false;
        }

    }

}
?>