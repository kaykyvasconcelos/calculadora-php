<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    switch($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Erro: divisão por zero!";
            }
            break;
        default:
            $result = "Operador inválido!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Resultado:</h2>
    <?php
    if(isset($result)) {
        echo "<p>O resultado é: $result</p>";
    }
    ?>
</body>
</html>
