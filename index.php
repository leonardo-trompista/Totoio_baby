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
    
    <link rel="stylesheet" href="styles/simple.css">
    <link rel="stylesheet" href="styles/custom.css">

    
    
</head>
<body>

    <header>
        <h1>Ateliê Totoio Baby</h1>
    </header>
<nav>

    <a href="?page=home">Home</a>
    <a href="?page=ingredients">Ingredients</a>

</nav>
    <main>
        
    
<?php
#require 'pages/menu.php';

if (in_array($page, $allowedPages)) {
    require "pages/$page.php";
    } else {
        echo "<h1>Pagina nao encontrada</h1>";
        }
?>
    
    
    
    </main>

    <?php include 'includes/footer.inc.php'; ?>

</body>
</html>
