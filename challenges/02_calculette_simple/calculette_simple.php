<?php

function calculette($value1, $operateur, $value2) {
    if ($value1 == ""){
        return "Pas de caractères spéciaux";
    }

    if ($value2 == ""){
        return "Pas de caractères spéciaux";
    }

    //ne marche pas en switch
    /*
    switch ($operateur) {
        case '+' :
            return "Addition \n";
            break;
        case '-' :
            return "Soustraction \n";
            break;
        case '*' :
            return "Multiplication \n";
            break;
        case '/' :
            return "Division \n";
            break;
        default :
            return "Pas d'opérateur saisi";
            break;
    }
    */

    if ($operateur == '+'){
        return "Addition";
    }
    else if ($operateur == '-'){
        return "Soustraction";
    }
    else if ($operateur == '*'){
        return "Multiplication";
    }
    else if ($operateur == '/'){
        return "Division";
    }

}
?>
