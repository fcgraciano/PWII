<?php include "cabecalho.php"; ?>
<?php 
if(  isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['descricao']) && !empty($_POST['descricao']) &&
    isset($_POST['valor']) && !empty($_POST['valor']) &&
    isset($_POST['codigo_barras']) && !empty($_POST['codigo_barras'])
)
{
    include "conexao.php";
    $sql = "UPDATE PRODUTOS SET Descricao = '$_POST[descricao]',
                                Valor =  $_POST[valor],
                                Codigo_Barras = '$_POST[codigo_barras]',
                                Categoria_Id = $_POST[categoria_id]
            WHERE Id = $_POST[id]";
     
     echo $sql;
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        //logica para mensagem de sucesso
    }
    else
    {
        //caso o update de false
    }
}



if ( isset($_GET["Id"]) && !empty( $_GET['Id'] )   )  
{
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_Barras, Categoria_Id from produtos where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["Id"];
                $descricao = $row["Descricao"];
                $valor = $row["Valor"];
                $codigo_barras = $row["Codigo_Barras"];
                $categoria_id = $row["Categoria_Id"];
            }
        }
        else
        {
            header("location: produtos.php?erro=Nenhum registro encontrado");
        }
    }
    else
    {
        header("location: produtos.php?erro=Erro do if do resultado");
    }
}
else
{
    header("location: produtos.php?erro=Nenhum id informado");
}



?>

<form action="editar_produto.php?Id=<?php echo $id; ?>" method="post">
    <input name="id" value="<?php echo $id ?>" />
    <input name="descricao" value="<?php echo $descricao ?>" />
    <input name="valor" value="<?php echo $valor ?>" />
    <input name="codigo_barras" value="<?php echo $codigo_barras ?>" />
    <br>
    <select name="categoria_id">
        <?php 
            $sql_categorias = "Select Id, Nome from Categorias";
            $resultado_categoria = $conexao->query($sql_categorias);
            if ($resultado_categoria->num_rows > 0) 
            {
                while($row = $resultado_categoria->fetch_assoc()) 
                {
                    if($categoria_id == $row["Id"])
                    {
                        echo "<option selected value='$row[Id]'> $row[Nome] </option>";
                    }else{
                        echo "<option value='$row[Id]'> $row[Nome] </option>";
                    }
                }
            }
            else
            {
                echo "<option value='0'> Não tem categoria cadastrada </option>";
            }

        ?>
       
       

    </select>
    <br>
    <button type="submit" >
        Salvar Alterações
    </button>

</form>



<?php include "rodape.php"; ?>