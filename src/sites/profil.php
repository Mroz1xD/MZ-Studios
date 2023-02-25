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
        $id_gry = $v['id_gry'];
        $gry = $v['nazwa'];
        global $id_gry;
    }
    echo "<p>1." . $gry . "</p>";
    $_SESSION['zalogowany']['idgry'] = $id_gry;
    $_SESSION['zalogowany']['gry'] = $gry;
}elseif(count($wynik) > 1){
    echo "<p>Wystąpił błąd podczas pobierania danych z bazy danych. Prosimy o kontakt z administratorem</p>";
}

if( isset($_SESSION['zalogowany']['gry']) ){
    echo "<form method='post'> <input type='submit' value='Usuń' name='usun'> </form>";
}

if( isset($_POST['usun']) && isset($_SESSION['zalogowany']['idgry']) && isset($_SESSION['zalogowany']['gry']) ){
    $sql = "DELETE FROM posiadane WHERE id_uzytkownika = {$_SESSION['zalogowany']['id']} AND id_gry = {$id_gry}";
    $sts = $PDO->prepare($sql);
    $sts->execute();
    unset($_SESSION['zalogowany']['idgry']);
    unset($_SESSION['zalogowany']['gry']);
    header("Location: ./");
    exit();
}

?>
</div>