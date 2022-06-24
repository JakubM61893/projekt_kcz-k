﻿<?php

session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
header('Location: index_zalogowany.php');
exit();
}

?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<html lang="pl">
<head>
<title>Logowanie</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<style>

body{
  background-color: #F0F8FF;
}
</style>
<body>

   <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-primary border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" href="index.php">GAMERS_STORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="oferta.php">Oferta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="onas.php">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="kontakt.php">Kontakt</a>
                        </li>

                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="rejestracja.php">Rejestracja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="panel.php">Panek administracyjny</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<form  action="login.php" method="post">
<center><h1 class="display-4">Zaloguj się!</h1></center>
<br/><br/><br/>
<center>Login: <br/> <input type="text" name="login"/></center> <br/>
<center>Hasło: <br/> <input type="password" name="haslo"/></center> <br/><br/>
<center><input type="submit" value="Zaloguj się"/></center>
<br/>
<center><a href="rejestracja.php">Nie masz konta? Zarejestruj się!</a></center>
</form>

<?php
if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>

</body>
</html>
