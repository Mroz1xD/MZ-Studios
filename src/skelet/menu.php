<div class="container-fluid justify-content-sm-center">
	<a class="navbar-brand" href="./">Strona Główna</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?a=onas">O Nas</a>
    </li>

	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produkty</a>

	<ul class="dropdown-menu">
        <li><a class="dropdown-item" href="?a=gscu">Grand Strife Całe Uniwersum</a></li>
        <li><a class="dropdown-item" href="">Grand Asalut</a></li>
        <li><a class="dropdown-item" href="?a=produkty">Wszystkie</a></li>
    </ul>
	</li>
    
	</ul>
<?php

if( !isset($_SESSION['zalogowany']) ){
    echo "<li class='nav-item'>
            <a class='nav-link active' aria-current='page' href='?a=logowanie'>Logowanie</a>
        </li>";
}

?>
</div>
<?php
if( isset($_SESSION['zalogowany']) ){ 
	echo "<p>" . "Zostałeś zalogowany jako: <a href='?a=profil'><b>" .$_SESSION['zalogowany']['login'] . "</b></a> " . "<a href='?a=logowanie&logout=1' >Wylogowanie</a>" . "</p>";
}
?>
</div>

</div>