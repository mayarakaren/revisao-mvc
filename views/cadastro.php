<?php
include("./blades/header.php");
?>
<div class="container bg-white mt-5 p-5 rounded">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <label>Nome</label>
        <input type="text" name="alunoNome" class="form-control border-3 mb-5"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade" class="form-control border-3 mb-5"><br>
        <label for="alunoSexo">Informe o sexo:</label><br>
        <input type="radio" value="m" name="alunoSexo">M<br>
        <input type="radio" value="f" name="alunoSexo" class="mb-5">F<br>
        <input type="submit" value="Cadastrar" class="btn btn-success">
    </form>
</div>
<?php
include("./blades/footer.php");
?>