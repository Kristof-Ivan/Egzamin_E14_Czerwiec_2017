<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <div class="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div class="lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php
                require "functions.php";
                $dane = GetPacjenci();
                echo PacjenciToList($dane);
            ?>
        <br>
        <form  action="pacjent.php" method="post">
        Podaj id:<br>
        <input type="number" name="id">
        <input type="submit" value="Wybierz">
        </form><br>
        <h3>LEKARZE</h3>
        
        <ul>
            <li>pn - śr</li>
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowalewski</li>
                </ol>
            <li>czw - pt</li>
                <ol>
                    <li>Krzysztof Nowak</li>
                </ol>
        </ul>
    </div>
    <div class="prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
    </div>
    <div class="stopka">
        <p>utworzone przez: 4564565656</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>
