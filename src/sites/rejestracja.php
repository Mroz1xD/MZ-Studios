<div class="container">
<p>Masz już konto? Możesz się zalogować-><a href="?a=logowanie">Zaloguj się</a></p>
<form class="row g-3 needs-validation" method="post">
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Login</label>
    <input type="text" class="form-control" id="validationCustomUsername" required name="login">
    <div class="valid-feedback">Okej</div>
    <div class="invalid-feedback">Proszę podać login</div>
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
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    <label class="form-check-label" for="invalidCheck">Akceptuję warunki umowy</label>
    <div class="invalid-feedback">Musisz się zgodzić na warunki, aby założyć konto</div>
</div>
</div>

<div class="col-12">
<button class="btn btn-primary" type="submit" name="zare">Zarejestruj się</button>
</div>
</form>
</div>
<?php

if( isset($_POST['zare']) && $_POST['login'] && $_POST['mail'] && $_POST['haslo'] ){
    $sql = "INSERT INTO uzytkownicy (login, mail, haslo) VALUES('{$_POST['login']}', '{$_POST['mail']}', '{$_POST['haslo']}');";
    $sts = $PDO->prepare($sql);
    $sts->execute();
};

?>