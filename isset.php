<?php    


$ime='Marko';
$godine=" ";
//Varijabla prazna, iz inputa('name')se unosi u post i proverava metodom isset da li postoji 
//pa kad metoda isset ustanovi da psotoji ona se dodeljuje praznoj varijabli.
if(isset($_POST['godine'])){
    $godine=$_POST['godine'];
}
/*za ispisivanje stvari u html na osnovu zadatih vrednosti. varijabla menja svoje znacenje na osnovu
kada se varijabla stavlja u html tag tag sifra za php je <?= $varijabla ?> */
$poruka="";
if($godine < 10){

    $poruka= "DO CETVRTOG RAZREDA";

}elseif($godine >= 10 && $godine < 14){
    $poruka= "DO OSMOG RAZREDA";
}elseif($godine >= 14 && $godine < 18){
    $poruka= "SREDNJOSKOLAC";
}else{
    $poruka= "NEMA VISE PRAVA DA SE SKOLUJE";
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
            <h1><?= $godine.":".$poruka ?></h1>
        <form method="post">

                <input type="number" name="godine" value="<?= $godine ; ?>">
                <button type="submit">okidac</button>
            
        </form>

        
    
    </body>
</html>





