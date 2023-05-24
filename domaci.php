<?php 

$pozdrav="DOBAR DAN";
$minute=date('i');
$sat=date('H');
$vreme=$sat.":".$minute."   ".$pozdrav;
if($sat < 12){
    $pozdrav="DOBRO JUTRO";
}
elseif($sat >= 15){
    $pozdrav="DOBRO VECE";
}

var_dump($pozdrav);










$name="";
if (isset($_POST['name'])) {
    $name= strtoupper($_POST['name']) ;
}

$password="";
if(isset($_POST['password'])){
    $password= strtolower( $_POST['password']);
}

$poruka="";
if ($name=="ADMIN" && $password=="sifra") {
    $poruka="Dobrodosao admine";
}
elseif(!($name=="ADMIN")){
    $poruka="Nisi administrator";
}
elseif(!($password=="sifra")){
    $poruka="Sifra je neispravna";

}
else{
    $poruka="Greska u kodu";
}










?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><?= $vreme ?></h1><hr>


        
        <h2><?= $poruka ?></h2>

        <p>ime je <b>admin</b></p>
        <p>sifra je <b>sifra</b></p>

    <form method="post">

            <input type="text" name="name" value="<?= $name  ?>">
            <input type="text" name="password" value="<?= $password  ?>">
            <button type="submit">Proveri</button>
             
    </form>
    
    </body>
</html>