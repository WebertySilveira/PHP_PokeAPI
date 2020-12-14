<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />
    <title>Pokedex</title>
</head>
<body>


    <div class="container">
        <h1>Pokedex</h1>
        
        <ul class="pokedex">

            <?php require_once 'api.php';?>

        </ul>
    </div>
    
</body>
</html>