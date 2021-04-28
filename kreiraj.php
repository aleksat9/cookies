<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreiraj</title>
</head>
<body>
    <h3>Cookies</h3>
    <form action="kreiraj.php" method="GET" enctype="multipart/form-data">
        <input type="text" name="ime" id="ime" placeholder="Unesite ime"><br><br>
        <input type="text" name="prezime" id="prezime" placeholder="Unesite prezime"><br><br>
        <button type="submit" name="dugme">Kreiraj cookie</button><br><br>
    </form>

    <?php
        if(isset($_GET['dugme'])) {
            $ime=$_GET['ime'];
            $prezime=$_GET['prezime'];
            if($_GET['ime']!="" and $_GET['prezime']!="") {
                setcookie("ime", $ime, time()+86400, "/");
                setcookie("prezime", $prezime, time()+86400, "/");
                header("Location: prikazi.php");
            } else {
                setcookie("ime", "", time()-1, "/");
                setcookie("prezime", "", time()-1, "/");
            }
        } else {
            echo "Unesite podatke koji ce biti sacuvani u cookies.";
        }
    ?>
</body>
</html>