<div class="container">

<h2>Grand Strife Podziemie</h2>
<img src="./src/graphic/grandstrifepodziemie.png" width="500px" class="rounded float-start img-fluidw">
<p>2D RPG/MOBa gra w uniwersum Grand Strife. Opiera się na wyborach gracza odnośnie jego historii oraz innych osób. Gra oferuje wiele systemów. Obecnie gra jest w trakcie budowy i można zarezerwować sobie dostęp do Alphy, do której będą potrzebni testerzy!</p>

<?php

if( !isset( $_SESSION['zalogowany']['idgry'] )){
    echo "<form method='post'><input type='submit' value='Kup' name='kup'></form>";
}

if( isset($_POST['kup']) && !isset($_SESSION['zalogowany']['gry']) ){
    $sql="INSERT INTO posiadane (id_uzytkownika, id_gry) VALUES({$_SESSION['zalogowany']['id']}, 1);";
    $sts = $PDO->prepare($sql);
    $sts->execute();
    header("Location: ./");
    exit();
}

?>

</div>