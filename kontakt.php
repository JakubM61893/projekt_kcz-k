<!DOCTYPE html>
<html>
<head>
    <title>Strona główna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div1 {
margin-top: 20px;
  margin-right: 100px;
  margin-left: 100px;
}
div2 {
  margin-left : 1750px;
}
.fa {
        padding: 20px;
        font-size: 30px;
        width: 80px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
    }

        .fa:hover {
            opacity: 0.7;
        }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-google {
        background: #dd4b39;
        color: white;
    }

    .fa-instagram {
        background: #125688;
        color: white;
    }

body{
  background-color: #F0F8FF;
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
                            <a class="nav-link text-dark" asp-area="" href="logowanie.php">Zaloguj się</a>
                        </li>
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
    <center><p style="font-size:25px;">Zapraszamy do kontaktu z nami! Jeśli masz jakieś pytanie lub widzisz, że w naszej ofercie brakuje tytułu, który Cię interesuje, poinformuj nas o tym!</p></center>
<br />

<form>
    <div1 class="row">
        <div1 class="col">
            <label for="formGroupExampleInput">E-mail</label>
            <input type="text" class="form-control" placeholder="e-mail">
        </div1>
        <div1 class="col">
            <label for="formGroupExampleInput">Pytanie</label>
            <input type="text" class="form-control" placeholder="Pytanie">
        </div1>
        </div1>
        <div2>
    <button onclick="myFunction()" type="button" class="btn btn-primary">Wyślij</button>
    </div2>
</form>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<script>
    function myFunction() {
        alert("Dziękujemy za zgłoszenie!");
    }
</script>
<p style="font-size:20px;">Obserwuj nas na naszych fanpageach i bądź zawsze na bieżąco z nowościami!</p>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>

<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 Komunikacja człowiek-komputer
        </div>
    </footer>

    </section>
</body>
</html>