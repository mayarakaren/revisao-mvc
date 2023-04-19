<?php 
    include("../models/conexao.php");
    include("./blades/header.php");
?>

    <?php
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = ".$_GET["ida"]);
    while($exibe = mysqli_fetch_array($query)){
    ?>
<div class="container bg-white mt-5 p-5 rounded">
    <form action="../controllers/atualizarAluno.php" method="post">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <label>Nome</label>
        <input type="text" name="alunoNome" value="<?php echo $exibe[1] ?>" class="form-control border-3 mb-5"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>" class="form-control border-3 mb-5"><br>
        <label for="alunoSexo">Informe o sexo:</label><br>
        <input type="radio" value="m" name="alunoSexo">M<br>
        <input type="radio" value="f" name="alunoSexo" class="mb-5">F<br>
        <input type="submit" value="Atualizar" class="btn btn-success" data-bs-toggle="modal" data-bs-target='#JanelaModal<?php echo $exibe[0] ?>'>
    </form>
</div>
    <?php
    } 
    ?>
<?php 
    include("./blades/footer.php");
?>