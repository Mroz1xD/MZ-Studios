<div class="container">
<p>Nie masz konta? Możesz się zarejestrować-><a href="?a=rejestracja">Zarejestruj się</a></p>
<form class="row g-3 needs-validation" novalidate method="post">
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Login</label>
    <input type="text" class="form-control" id="validationCustomUsername" required name="login">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać nick</div>
</div>

<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Mail</label>
    <input type="text" class="form-control" id="validationCustom01" required name="mail">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać mail</div>
</div>

<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Hasło</label>
    <input type="password" class="form-control" id="validationCustom01" required name="haslo">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać hasło</div>
</div>

<div class="col-12">
<button class="btn btn-primary" type="submit" name="zal">Zaloguj się</button>
</div>
<?php

if( isset( $_GET['logout'] ) == 1 ){
    unset( $_SESSION['zalogowany'] );
    header("Location: ./");
    exit();
}

if( isset($_POST['zal']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['haslo']) ){
    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $haslo = $_POST['haslo'];
    $sql = "SELECT login, mail, haslo FROM uzytkownicy WHERE login = '{$login}'AND mail = '{$mail}' AND haslo = '{$haslo}'";
    $sts = $PDO->prepare($sql);
    $sts->execute();
    $wynik = $sts->fetchAll(PDO::FETCH_ASSOC);
    if( count($wynik) === 0 ){
        echo "<p>Wystąpił błąd podczas logowania, proszę jeszcze raz spróbować. Jeśli nie posiadasz konto no najpierw musisz je założyć.</p>";
    }else{
        foreach( $wynik as $k => $v ){
            $LOGIN = $v['login'];
            $MAIL = $v['mail'];
            $HASLO = $v['haslo'];
        }
        echo "<p>Pomyślnie zalogowano jako " . $LOGIN . "!</p>";
        $_SESSION['zalogowany']['login'] = $_POST['login'];
        header("Location: ./");
        exit();
    }
}

?>
</form> 
</div>