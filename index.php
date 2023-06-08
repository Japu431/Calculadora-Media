<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="formulario">
            <h1>Calculadora Mágica</h1>
            <form class="formulario_internal" action="./php/calculadora.php" method="POST" >
                    <label for=''> Número 1: </label>
                    <input type='number' name='nmbNumber1' id=''>
                    <br>
                    <label for=''> Número 2: </label>
                    <input type='number' name='nmbNumber2' id=''>
                <br>
                <p>Escolha a operação desejada!</p>
                <br>

            <select name="method">
                <option>Soma</option>
                <option>Sub</option>
                <option>Divisao</option>
                <option>Raiz</option>
                <option>Exponencial</option>
            </select>
            <button id="button_calc" type="submit">Calcular</button> 
            </form>
        </div>
    </div>
</body>
</html>