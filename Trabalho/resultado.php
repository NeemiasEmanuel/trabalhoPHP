<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora resultado</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>
    <main>
    <section>
        <form action="" method="post" class="calculator">
        <label for="numero1">Numero1 </label>
        <input type="number" step="0.01" name="numero1" value="<?php if(isset($_POST['numero1'])) echo $_POST['numero1']; ?>">
        <!-- Código em PHP para manter o número previamente inserido pelo usuário -->

        <label for="numero2">Numero2 </label>
        <input type="number" step="0.01" name="numero2" value="<?php if(isset($_POST['numero2'])) echo $_POST['numero2']; ?>">
        <!-- Código em PHP para manter o número previamente inserido pelo usuário -->

                <input class="operation" type="submit" value="Soma" name="operacao" >
                <input class="operation" type="submit" value="Subtração" name="operacao">
                <input class="operation" type="submit" value="Multiplicacão" name="operacao">
                <input class="operation" type="submit" value="Divisão" name="operacao">
                <input class="operation" type="submit" value="Exponenciacão" name="operacao">
                <input class="operation" type="submit" value="Raiz quadrada" name="operacao">
                <input class="operation" type="submit" value="Fatorial" name="operacao">

                <?php 
                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];
                    $operacao = $_POST['operacao'];
                    $resultado;
                //($_POST['numero2'] != 0  && $_POST['numero1'] != 0) && (empty($_POST['numero1']) or empty($_POST['numero2'])
                
                
                if($numero1 == "" || $numero2 == "" )
                {
                    echo "<span class='warning'>Preencha os campos</span>";
                }
                else{

                    switch ($operacao) {
                        case "Soma":
                            $resultado =  number_format(($numero1 + $numero2),2); 
                            break;
                        case "Subtração":
                            $resultado = number_format(($numero1 - $numero2),2);
                            break;
                        case "Multiplicacão":
                            $resultado = number_format(($numero1 * $numero2),2);
                            break;
                        case "Divisão":
                            if ($numero1 == 0 || $numero2 == 0) {
                                $resultado = "Erro: Não existe divisão por zero";
                            }
                            else{
                            $resultado = number_format(($numero1 / $numero2),2);
                            }
                            break;
                        case "Exponenciacão":
                            $resultado = number_format(($numero1 ** $numero2),2);
                            break;
                        case "Raiz quadrada":
                            $resultado = number_format(sqrt($numero1 + $numero2),2);
                            break;
                        case "Fatorial":
                            $fatorial = 1;
                            for ($i=1; $i <= $numero1 + $numero2 ; $i++) { 
                                $fatorial *= $i;
                            }
                            $resultado = number_format($fatorial,2);
                            break;
                        default:
                            echo "\n teste";
                            break;
                        }
                        echo "<p id='result'> $resultado</p>";
                    }
                ?> 
        </form>
    </section>
    </main>

    <footer>
    <div class="container">
        <p>© <?php echo date("Y"); ?> Calculadora. Todos os direitos reservados a mim.</p>
    </div>
</footer>
</body>
</html>