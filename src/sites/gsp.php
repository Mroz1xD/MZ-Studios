<div class="container">

<form method="post">
<input type="submit" value="Kup" name="kup">
</form>

<?php

if( isset($_POST['kup']) ){
    print_r($_SESSION['zalogowany']['id']);
    /*$sql="INSERT INTO posiadane (id_uzytkownika, id_gry) VALUES({$_SESSION['zalogowany']['id']}, 1);";
    $sts = $PDO->prepare($sql);
    $sts->execute();*/
}

?>

</div>