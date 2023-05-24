<?php   
    
    $broj=15;
    
    $poruka="broj je neparan";
    if($broj%2==0){
         $poruka="broj je paran";
    }
    echo $poruka;
    
    echo '<hr>';
    $auto=["golf3","golf2", "golf4", "golf5"];

    if(in_array("golf2", $auto)){
        echo 'Golf 2 se moze kupiti u nasoj prodavnici ';
    }else{
        echo 'Golf 2 se ne moze kupiti kod nas';
    }
    echo"<hr>";

    $godine=18;
    if($godine>=18){
        echo 'Punoletni ste';
    }else{
        echo 'Maloletni ste';
    }
    