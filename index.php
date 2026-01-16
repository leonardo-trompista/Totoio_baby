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
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>

    <header>
        <h1>Ateliê</h1>
    </header>
<nav>

    <a href="?page=home">Home</a>
    <a href="?page=ingredients">Ingredients</a>

</nav>
    <main>
        
        <p>Testando o poder do php, tentando mudar o texto<p>
        <p>Essa parte vem do github!</p>
        <p>agora eu teste sei mudar o arquivo no github e rodar a alteracao no servidor<p>
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
