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

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gry";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ps5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<a name='submit' >". "Tytuł gry: " . $row["tytuł"]." || Wydawca:  " . $row["wydawca"]. " || Rok premiery:  ". $row["rok_premiery"]. "<br>";

  }

} else {
  echo "0 results";
}
$conn->close();
?>
 <a class="btn btn-outline-primary my-2 my-sm-0" href="ps5_dodaj.php">Dodaj grę do oferty!</a>
  </div>

</div>