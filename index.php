<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listázás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <?php
        require_once "Osztaly.php";
        $database = new Osztaly();
        $gepek = $database->getAll();

        ?>

        <?php
        include "nav.php";
        ?>


        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>gép</th>
                    <th>gyártó</th>
                    <th>sorozat</th>
                    <th>megjelenés dátuma</th>
                    <th>smart funkció</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gepek as $gep): ?>
                    <tr>
                        <td><?php echo $gep['id'] ?></td>
                        <td><?php echo $gep['gep'] ?></td>
                        <td><?php echo $gep['gyarto'] ?></td>
                        <td><?php echo $gep['sorozat'] ?></td>
                        <td><?php echo $gep['megjelenes'] ?></td>
                        <td><?php echo $gep['smart_funkcio'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>