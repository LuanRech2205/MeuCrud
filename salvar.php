<?php
    switch ($_REQUEST["acao"]){
        case 'cadastar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);   
            $fone = $_POST["fone"];

            $sql = "INSERT INTO usuario (nome,email,senha,fone) VALUES('{$nome}','{$email}','{$senha}','{$fone}')";

            $res = $conn->query($sql);

            if($res==true){
                print ("Cadastrado com Sucesso!!" );
            }
            else{
                print "Não foi possivel cadastra.";
            }
            break;
        
        case'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);   
            $fone = $_POST["fone"];

            $res = $conn->query($sql);

            $sql = "UPDATE usuario SET nome='{$nome}','{$email}','{$senha}', '{$fone}'
                    WHERE
                    id=".$_REQUEST["id"];

            if($res==true){
                print ("Editado com Sucesso!!" );
            }
            else{
                print "Não foi possivel Editar.";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM usuario WHERE  id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print ("Excluido com Sucesso!!" );
            }
            else{
                print "Não foi possivel exluir.";
            }
            break;

    }


?>
