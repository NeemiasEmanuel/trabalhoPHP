<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php 
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
       //($_POST['numero2'] != 0  && $_POST['numero1'] != 0) && (empty($_POST['numero1']) or empty($_POST['numero2'])
    if($numero1 == "" || $numero2 == "" )
    {
        echo "preencha os campos adequadamente";
    }
    else{

        switch ($operacao) {
            case "Soma":
                echo  number_format(($numero1 + $numero2),2); 
                break;
            case "Subtração":
                echo number_format(($numero1 - $numero2),2);
                break;
            case "Multiplicacão":
                echo number_format(($numero1 * $numero2),2);
                break;
             case "Divisão":
                if ($numero1 == 0 || $numero2 == 0) {
                    echo "Erro: Não existe divisão por zero";
                }
                else{
                echo number_format(($numero1 / $numero2),2);
                }
                break;
            case "Exponenciacão":
                echo number_format(($numero1 ** $numero2),2);
                break;
            case "Raiz quadrada":
                echo number_format(sqrt($numero1 + $numero2),2);
                break;
            case "Fatorial":
                $fatorial = 1;
                for ($i=1; $i <= $numero1 + $numero2 ; $i++) { 
                    $fatorial *= $i;
                }
                echo number_format($fatorial,2);
                break;
            default:
                echo "\nnice";
                break;
            }
       
        }
    ?> 
    
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>

