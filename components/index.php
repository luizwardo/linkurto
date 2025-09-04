<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkurto</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <div class="container">
        <h1>Linkurto - </h1>
        <form action="save.php" method="POST"> 
            <textarea name="content" placeholder="Cole seu texto aqui..." required></textarea>
            <br><br>
            <button type="submit">Salvar Paste</button>
        </form>
        <div class="link">
            <p>Para visualizar, use: <code>view.php?id=ID_DO_PASTE</code></p>
        </div>
    </div>
</body>
</html>