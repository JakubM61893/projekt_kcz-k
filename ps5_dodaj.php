<?php

session_start();

if (isset($_POST['wydawca']))
{
$wszystko_OK=true;
$tytuł = $_POST['tytuł'];

if ((strlen($tytuł)<1) || (strlen($tytuł)>100))
{
$wszystko_OK=false;
$_SESSION['e_tytuł']="Pole nie może być puste!";
}


$wydawca = $_POST['wydawca'];


if ((strlen($wydawca)<1) || (strlen($wydawca)>100))
{
$wszystko_OK=false;
$_SESSION['e_wydawca']="Pole nie może być puste!";
}


$rok = $_POST['rok'];

if ((strlen($rok)<4) || (strlen($rok)>4))
{
$wszystko_OK=false;
$_SESSION['e_rok']="Pole nie może być puste!";
}







require_once "connect_gry.php";


$polaczenie = new mysqli($host2, $db_tytuł, $db_wydawca, $db_name);


$wynik = $polaczenie->query("SELECT * FROM ps5");




if ($wszystko_OK==true)
{
if ($polaczenie->query("INSERT INTO ps5 VALUES (NULL, '$tytuł', '$wydawca', '$rok')"))
{
$_SESSION['udanedodanie']=true;
header('Location: pododaniu.php');
}
else
{
throw new Exception($polaczenie->error);
}





$polaczenie->close();

}





}



?>

<!DOCTYPE HTML>
<html lang="pl">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<head>
<title>Dodaj płytę</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Rejestracja</title>
<style>
body{
  background-color: #F0F8FF;
}
.error
{
color:red;
margin-top: 10px;
margin-bottom: 10px;
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

<form method="post">

<center>Tytuł: <br /> <input type="text" name="tytuł"/></center><br/>

<?php

if (isset($_SESSION['e_tytuł']))
{
echo '<div class="error">'.$_SESSION['e_tytuł'].'</div>';
unset($_SESSION['e_tytuł']);
}

?>
<center>Wydawca: <br /> <input type="text" name="wydawca"/></center><br/>

<?php

if (isset($_SESSION['e_wydawca']))
{
echo '<div class="error">'.$_SESSION['e_wydawca'].'</div>';
unset($_SESSION['e_wydawca']);
}

?>

<center>Rok premiery: <br /> <input type="integer" name="rok"/></center><br/>
<?php

if (isset($_SESSION['e_rok']))
{
echo '<div class="error">'.$_SESSION['e_rok'].'</div>';
unset($_SESSION['e_rok']);
}

?>


<center><input type="submit" value="Dodaj"/></center>

</form>