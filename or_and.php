<?php

$godine = 26;
$kazne = true;
$ime="Marko";

if ($ime=="Marko" || $ime="Petar") {
    
}

if ($godine >= 18 && $kazne == false) {
    echo 'NEXT možete polagati';

} 

elseif ($godine < 18 ) {
    echo 'STOP Imate manje od 18 godina';
}

elseif($kazne == true){
    echo 'STOP Imate kazne';
}

else {
    echo 'ERROR';
}

?>