<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora inicio</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>
   <main>
   <section>
        <div>
            <form action="resultado.php" method="post" class="calculator">
                <label for="numero1">Numero1 </label>
                <input type="number" step="0.01" name="numero1" > 
                <label for="numero2">Numero2 </label>
                <input type="number" step="0.01" name="numero2" >
                        <input class="operation" type="submit" value="Soma" name="operacao" >
                        <input class="operation" type="submit" value="Subtração" name="operacao">
                        <input class="operation" type="submit" value="Multiplicacão" name="operacao">
                        <input class="operation" type="submit" value="Divisão" name="operacao">
                        <input class="operation" type="submit" value="Exponenciacão" name="operacao">
                        <input class="operation" type="submit" value="Raiz quadrada" name="operacao">
                        <input class="operation" type="submit" value="Fatorial" name="operacao">
            </form>
        </div>
    </section>
   </main>
   
    <footer>
        <div class="container">
            <p>© <?php echo date("Y"); ?> Calculadora. Todos os direitos reservados a mim.</p>
        </div>
    </footer>
</body>
</html>


