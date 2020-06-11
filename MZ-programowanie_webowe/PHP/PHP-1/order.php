<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Podsumowanie zamówienia</title>
</head>
<body>

<?php
    $paczkow=$_POST['paczkow'];
    $grzebieni=$_POST['grzebieni'];
    $suma=0.99*$paczkow + 1.29*$grzebieni;
echo<<<END
    <h2>Podsumowanie zamówienia</h2>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Rodzaj towaru</td> <td>Cena za szt.</td> <td>Ilość</td>
    </tr>
    <tr>
        <td>Pączek</td>  <td>0,99zł</td> <td>$paczkow</td>
    </tr>
    <tr>
        <td>Grzebień</td>  <td>1,29zł</td> <td>$grzebieni</td>
    </tr>
    <tr>
        <td>Suma</td>  <td colspan="2" align="center">$suma zł</td> 
    </tr>
    </table>
    <br/><a href="index.php">Powrót do strony głównej</a>
END;
?>
    
</body>
</html>