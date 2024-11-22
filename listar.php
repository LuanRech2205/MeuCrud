<h1>Listar Usuários</h1>
<?php 
    $sql = "SELECT * FROM  usuario";

    $res= $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table>";
        
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>$row->id</td>";
            print "<td>$row->nome</td>";
            print "<td>$row->email</td>";  
            print "<td>$row->fone</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-sucess'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
        }
        print "</table>";
    }
    else{
        print "Não foi possivel encontrar rasultado";
    }