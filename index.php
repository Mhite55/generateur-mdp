<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 class="mt-5 text-center">Générateur de mots de passe mémorisable</h1>
    <h2 class='text-center'>
    <?php
        if(isset($_GET['message']))
        {
            echo $_GET['message'];
        }
    ?>
    </h2>
    <form action="validation.php" class="mt-5 mx-auto col-8" method="POST">
        <label for="l-mots">Longueur des mots (min : 6, max : 10)</label>
        <input class="form-control my-2" type="number" min="6" max="10" value="6" name="length">

        <label for="nbr-mots">Nombre de mots (min : 4, max : 10)</label>
        <input class="form-control my-2" type="number" min="4" max="10" value="4" name="number">

        <label for="complexity class="form-label"">Complexité</label>
        <select class="my-2 mx-auto form-select" name="complexity" id="comp">
            <option value selected="0">Niveau 1</option>
            <option value="1">Niveau 2</option>
            <option value="2">Niveau 3</option>
        </select>


        <input class="form-control mt-3 bg-primary bs-light-text" type="submit" value="Generer">

        <h2 class="mt-3 text-center">
            <?php
            if(isset($_GET['password']))
            {
                echo $_GET['password'];
            }
            ?>
        </h2>
    </form>
