<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felvetel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
       <?php
        include_once "nav.php";

        
        if (isset($_SESSION['state'])) {
            echo "<p>".$_SESSION['message']."</p>";
            switch ($_SESSION['state']) {
                case 'success':
                    break;
                case 'error':
                    foreach ((array) $_SESSION['errors'] as $error) {
                        echo "<p>$error</p>";
                    }
                    break;
            }
            unset($_SESSION['state']);
            unset($_SESSION['message']);
            unset($_SESSION['errors']);
        }
    
       ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="gep">Gép</label>
                <input type="text" id="gep" name="gep" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gyarto" class="form-label">Gyártó</label>
                <input type="text" id="gyarto" name="gyarto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="sorozat" class="form-label">Sorozat</label>
                <input type="text" id="sorozat" name="sorozat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="megjelenes" class="form-label">Megjelenés dátuma</label>
                <input type="date" id="megjelenes" name="megjelenes" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="smart_funkcio" class="form-label">Smart funkció (van:1, nincs:0)</label>
                <input type="number" id="smart_funkcio" name="smart_funkcio" min="0" max="1" class="form-control" required>
            </div>
            <button type="submit"class="btn btn-outline-success">Elküld</button>
    

        </form>

    </main>

    <?php
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        http_response_code(405);
        die();
    }
    ?>
    <?php
    $errors = [];
    if(!isset($_POST["gep"])||empty($_POST["gep"])){
        $errors = "Gép megadása kötelező!";
    }
    if(!isset($_POST["gyarto"])||empty($_POST["gyarto"])){
        $errors = "Gyártó megadása kötelező!";
    }
    if(!isset($_POST["sorozat"])||empty($_POST["sorozat"])){
        $errors = "Sorozat megadása kötelező!";
    }
    if(!isset($_POST["megjelenes"])||empty($_POST["megjelenes"])){
        $errors = "Megjelenés dátuma megadása kötelező!";
    }
    if(!isset($_POST["megjelenes"])||empty($_POST["megjelenes"])){
        $errors = "Smart funkció megadása kötelező! (van: 1, nincs: 0)";
    }

    if(empty($errors)){
        require_once "Osztaly.php";
        $database = new Osztaly();
        $database->create($_POST);
    }

    if (empty($errors)) {
        $_SESSION['state'] = "success";
        $_SESSION['message'] = "Sikeres bejegyzés";
    } else {
        $_SESSION['state'] = "error";
        $_SESSION['message'] = "Hiba történt a bejegyzés során";
        $_SESSION['errors'] = $errors;
    }
    header("Location: felvetel.php");

    ?>

</body>
</html>