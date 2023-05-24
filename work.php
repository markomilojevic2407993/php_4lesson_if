<?php 
$ime='Marko';
$godiste=2006;
$tacnaGodina=date("Y");
$godine=$tacnaGodina-$godiste;


if($godiste==1999){
    echo 'imate 24 godine';

}elseif($godiste==2002){
    echo 'imate 21 godinu';
}else{
    echo "VI imate $godine";
}
