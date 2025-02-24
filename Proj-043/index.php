<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>

    <h1> Matriz </h1>

    <?php 
    
    // definindo uma variavel para armazenar uma matriz.

    $matriz =[
        
        [10, 16, 1, 5],
        [2, 3, 4, 9],
        [11, 6, 7, 8],
        [12, 13, 14, 15]
    
        ];
        
        $soma = 1;
 
    foreach ($matriz as $linha){
        foreach ($linha as $elemento)
        $soma *= $elemento;
    }
 
    echo "A soma da Matriz total é: " . $soma;
 
    
        

    ?>

    
        

    
</body>
</html>