<?php
echo '<pre>' . print_r($_POST, true) . '</pre>';
//adicionando o 'true' ele vai retornar um array restituindo o valor (melhor inserir)
//adicionando o 'false' ele vai retornar um array somente estampando o valor


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios usando PHP + html</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Exercicios usando PHP + html</h1>
        <hr>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                    <br>
                    <hr>
                    <br>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@email.com">
                    <br>
                    <hr>
                    <br>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="A secure password...">
                    <br>
                    <hr>
                    <br>

                    <button type="submit" class="btn btn-outline-warning">Envia</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>