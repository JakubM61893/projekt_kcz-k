<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
header('Location: logowanie.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
        body {
            background-color: #F0F8FF;
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
    </header>

    <section>
      <h2 class="display-4">Uncharted 4</h2>
<img src="grafiki/uncharted.jpg" class="rounded float-left"width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę grę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">Finałowa część przełomowej, jednej z najlepszych gier poprzedniej generacji</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>


    <section>
      <h2 class="display-4">FIFA 22</h2>
<img src="grafiki/fifa.jpg" class="rounded float-left" width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę grę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">Najnowsza odsłona najpopularniejszego symulatora piłki nożnej i jednej z najpopularniejszych serii gier w historii.</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>

    <section>
      <h2 class="display-4">Cyberpunk 2077</h2>
<img src="grafiki/cyberpunk.jpg" class="rounded float-left" width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę grę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">Najbardziej wyczekiwana gra ostatnich lat od twórców "Wiedźmina 3".</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>

<script>
function myFunction() {
  alert("Zamówienie zostało przyjęte!");
}
</script>

<script>
function myFunction1() {
  alert("Dziękujemy za opinię!");
}
</script>