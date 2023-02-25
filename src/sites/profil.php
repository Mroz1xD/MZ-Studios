<div class="container">
<?php
echo "<h2>Witaj " . $_SESSION['zalogowany']['login'] . "! " . "Jak Ci mija dzień?</h2>";
echo "<h3>Oto twoje gry:</h3>";

$sql = "SELECT * FROM uzytkownicy u JOIN posiadane p ON u.id = p.id_uzytkownika JOIN gry g ON p.id_gry = g.id WHERE u.login = '{$_SESSION['zalogowany']['login']}';";
$sts = $PDO->prepare($sql);
$sts->execute();
$wynik = $sts->fetchAll(PDO::FETCH_ASSOC);
if( count($wynik) === 0 ){
    echo "<p>Nie posiadasz żadnych gier!</p>";
}elseif(count($wynik) === 1){
    foreach( $wynik as $k => $v ){
        $gry = $v['nazwa'];
    }
    echo $gry;
}elseif(count($wynik) > 1){
    echo "<p>Wystąpił błąd podczas pobierania danych z bazy danych. Prosimy o kontakt z administratorem</p>";
}

?>
</div>