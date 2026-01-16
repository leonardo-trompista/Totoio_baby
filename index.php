<?php
$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home','ingredients'];
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ateliê index</title>

    <!-- Estilos -->
    
    <link rel="stylesheet" href="css/simple.css">
    <link rel="stylesheet" href="css/custom.css">

    
    
</head>
<body>

    <header>
        <h1>Ateliê Totoio Baby</h1>
    
        <nav>

            <a href="?page=home">Home</a>
            <a href="?page=ingredients">Ingredients</a>

        </nav>
    </header>
    <main>
        
    <?php
    if (in_array($page, $allowedPages, true)) {
        require __DIR__ . "/pages/$page.php";
    } else {
        echo "<h1>Página não encontrada</h1>";
    }
    ?>   
    
    
    </main>

    <?php include 'includes/footer.inc.php'; ?>

</body>
</html>
