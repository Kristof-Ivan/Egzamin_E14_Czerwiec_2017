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
        <?php
            require_once("functions.php");
                $conn = Connect();
                $id= $_POST['id'];
                $sql1="SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM pacjenci WHERE id=$id";
                $result2 = $conn->query($sql1);
                $row2 = $result2->fetch_assoc();
                //printf("%s %s %s %s\n", $row2['imie'], $row2['nazwisko'], $row2['choroby_przewlekle'], $row2['uczulenia']);
                echo "<br><br>Imie i Nazwisko: {$row2['imie']} {$row2['nazwisko']} <br><br>";
                echo "Choroby przewlekłe: {$row2['choroby_przewlekle']} <br><br>";
                echo "Uczulenia: {$row2['uczulenia']}";
                $conn->close();
        ?>
    </div>
    <div class="stopka">
        <p>utworzone przez: 565656456</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>
