<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikazi</title>
</head>
<body>
    <h3>Prikazivanje cookies-a</h3>
    <?php
        if(isset($_COOKIE['ime']) and isset($_COOKIE['prezime'])) {
            $ime=$_COOKIE['ime'];
            $prezime=$_COOKIE['prezime'];
            echo "<div style='background-color: blue;'>$ime</div>";
            echo "<div style='background-color: green;'>$prezime</div>";
        } else {
            echo "<div style='color: red;'>Kolacici ne postoje.</div>";
        }
    ?>
</body>
</html>