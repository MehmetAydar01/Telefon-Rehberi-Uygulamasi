<?php

    // Güvenlik Kontrolleri

    function myData($veri) {

        $veri = htmlspecialchars($veri);
        $veri = strip_tags($veri);
        return trim($veri);
        
    }



?>