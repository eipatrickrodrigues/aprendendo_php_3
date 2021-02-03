<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP</title>
</head>
<body>
    
    <pre>
    <?php 
    require_once 'Lutador.php';

    $lutador1 = new Lutador("Patrick","Brasil",24,1.84,80,0,10,2);
    $lutador2 = new Lutador("Matheus", "Portugal",27,1.92,98,12,1,7);
    $lutador3 = new Lutador("Jefferson", "Brasil", 23,1.78,74,2,18,0);
    $lutador4 = new Lutador("Josh","Estados Unidos",30,1.88,92,22,0,0);
    $lutador5 = new Lutador("Mathew", "Canadá", 33,1.60,80,12,12,21);
    $lutador6 = new Lutador("Abuh", "Índia",32,1.73,76,2,2,1);
    
    $lutador1->status();




    ?>
    </pre>


</body>
</html>