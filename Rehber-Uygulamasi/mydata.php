<?php

    $people = [];
    
    // Yukarıda, Formdan alıp dosyanın içerisine yazdırdığımız bilgilerin, ekrana çıktısını vermeye çalışalım.

    $myFileRead = fopen("rehberim.txt", "rb");

    while (!feof($myFileRead)) {
        $people[] = fgets($myFileRead);
    }

    // echo "<pre>";
    // print_r($people);

    // print_r işlemiyle ekrana çıktımızı verince, son elemanın boş bir satır olduğunu gördük ve bunu düzeltelim.
    array_pop($people);

    // echo "<pre>";
    // print_r($people);
    // Böylece son satırımızı temizlemiş olduğumuzu gördük.


    if ( (!empty( $_COOKIE['name'])) && (!empty($_COOKIE['lastName'])) && (!empty($_COOKIE["email"])) && (!empty($_COOKIE["phoneNumber"])) ) {

        echo "<table border='1' width='75%' style='margin: 0 auto; background-color: lightgray; color: darkblue;'>
            <tr style='text-align:center;'>
                <td style='text-align:center;'>id</td>
                <td>name</td>
                <td>lastName</td>
                <td>e-mail</td>
                <td>Phone Number</td>
            </tr>
        ";

        foreach ($people as $indis => $person) {

            $person = explode(" ~ ", $person);
    
            echo "
                <tr>
                    <td  style='text-align:center;'>$indis</td>
                    <td>$person[0]</td>
                    <td>$person[1]</td>
                    <td>$person[2]</td>
                    <td>$person[3]</td>
                </tr>
            ";
    
        }
        
        echo "</table>";

        exit();

    }
   

    
?>
