﻿<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
header('Location: logowanie.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Strona główna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
body{
  background-color: #F0F8FF;
}

p {
text-align: center;
font-size: 30px;
}

p1 {
text-align: center;
}
</style>
</head>
<body>
   <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-primary border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" href="index_zalogowany.php">GAMERS_STORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="oferta_zalogowany.php">Oferta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="onas_zalogowany.php">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="kontakt_zalogowany.php">Kontakt</a>
                        </li>

                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="logout.php">Wyloguj się</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
echo "Witaj ".$_SESSION['login']."!";

?>
    </header>
<center><h1 class="display-4">WITAMY W GAMERS_STORE</h1></center>
<p class="aligncenter">
    <img src="grafiki/witcher_mainpage.jpg" width="1000" height="600" style="display: block; margin: auto" />
</p>
<p><i>Sklep dla prawdziwych graczy. Zapraszamy do zapoznania się z ofertą.</i></p>
<br></br>
<br></br>
<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 Komunikacja człowiek-komputer
        </div>
    </footer>

    </section>
</body>
</html>