<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
header('Location: panel.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
div1 {
  margin-left: 250px;
}
        body {
            background-color: #F0F8FF;
        }
    </style>

</head>
<body>
   <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-primary border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" href="index_admin.php">GAMERS_STORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="logout.php">Wyloguj się</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>    




<p class="display-4">Wybierz platformę:</p>

<div1 class="row">
  <div1 class="column">
    <a href="ps5_admin.php"><img src="grafiki/ps5.jpg" width="300" height="168" alt="PS5"></a>
    </div1>
  <div1 class="column">
    <a href="ps4_admin.php"><img src="grafiki/ps4.jpg" width="300" height="168" alt="PS4"></a>
  </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/ps3.jpg" width="300" height="168" alt="PS3"></a>
  </div1>
  </div1>
  <div1 class="row">
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/xboxseries.jpg" width="300" height="168" alt="XBOX SERIES S/X"></a>
    </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/xboxone.jpg" width="300" height="168" alt="XBOX ONE"></a>
  </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/xbox360.jpg" width="300" height="168" alt="XBOX 360"></a>
  </div1>
  </div1>
  <div1 class="row">
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/pc.jpg" width="300" height="168" alt="PC"></a>
    </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/nintendo.jpg" width="300" height="168" alt="NINTENDO SWITCH"></a>
  </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/retro.jpg" width="300" height="168" alt="RETRO"></a>
  </div1>
  </div1>



<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 Komunikacja człowiek-komputer
        </div>
    </footer>
