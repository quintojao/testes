<?php include("C:/xampp2/htdocs/avancado/public/unidade_03/conectado.php"); ?>
<?php
        $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
        $produtos .= "FROM produtos ";
        $resultado = mysqli_query($conecta,$produtos);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso</title>
        
        <!-- estilo -->
        <link href="avancado/public/unidade_04/_css/estilo.css" rel="stylesheet">
        <link href="avancado/public/unidade_04/_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <?php include("C:/xampp2/htdocs/avancado/public/_incluir/topo.php"); ?>
        <?php include("C:/xampp2/htdocs/avancado/public/_incluir/funcoes.php"); ?>
        
        <main>  
            <div id="listagem_produtos">
            <?php
                while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <ul>
                    <li>class="imagem"><img src="<?php echo $linha["imagempequena"]?>"</li>
                    <li><h3><?php echo $linha["nomeproduto"]?></h3></li>
                    <li>Tempo entrega: <?php echo $linha["tempoentrega"]?></li>
                    <li>Preço unitário: <?php echo "R$ ". number_format($linha["precounitario"],2,",",".")?></li>
            </ul>
            <?php
                }
            ?>
            </div>    
        </main>

        <?php include("C:/xampp2/htdocs/avancado/public/_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
