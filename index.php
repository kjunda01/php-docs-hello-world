<!DOCTYPE html>
<html>
<head>
    <title>Teste de Rede</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    echo "<p>Olá, $nome! Este é o teste para o trabalho extra de 5 pontos da disciplina de redes.</p>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nome">Informe seu nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
