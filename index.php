<!DOCTYPE html>
<html>
<head>
    <title>Calculadora em PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h2>Calculadora em PHP</h2>
    <form method="post" action="calculo.php">
        <input type="number" name="num1" placeholder="Digite o primeiro número" required>
        <select name="operator" required>
            <option value="">Selecione a operação</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Digite o segundo número" required>
        <input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>
