<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="zebra">
        <form action="dados.php" method="post">
     Nome do Cliente<input type="text" name="nome">
     </br>
    Valor a ser convertido<input type="text" name="valor">
        </br>
    
        <select name="caso">
            <option value="1">Reais para Dólar</option>
            <option value="2">Dólar para Reais</option>
            <option value="3">Dólar para Euro</option>
            <option value="4">Euro para Dólar</option>
            <option value="5">Euro para Reais</option>
            <option value="6">Reais para Euro</option>
        </select>
        <input type="submit" name="convert" value= "Converter">
        </form>
    </div>
</body>
</html>