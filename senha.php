<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cor</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    
</head>

<body>
<div class="container">
    <?php
        $digitado = $_GET['senha'];
        // strlen() retorna o tamanho da string.
        $tamanho = strlen($digitado);
    
        if( $digitado >= 8 ) {
            echo "Senha com quantidade correta!";
        } else {
            echo "Problema na senha $digitado";
        }
    ?>
</div>
</body>

</html>
