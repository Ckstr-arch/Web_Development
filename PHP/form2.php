<?php
    $username = $_REQUEST["firstName"];
    $marks = $_REQUEST["marks"];

    echo "UserName: $username<br>";
    
    if($marks > 74 && $marks < 101){
        echo "Grade : A ";
    }
    elseif($marks > 64 && $marks < 75){
        echo "Grade : B ";
    }
    elseif($marks > 54 && $marks < 65){
        echo "Grade : C";
    }
    elseif($marks > 34 && $marks < 55){
        echo "Grade : S";
    }
    else{
        echo "Grade : F";
    }

?>