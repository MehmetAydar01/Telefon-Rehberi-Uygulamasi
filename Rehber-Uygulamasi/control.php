<?php

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];


    // Güvenlik işlemini gerçekleştirdiğimiz fonksiyonu include edelim.
    include 'myFunc.php';


    if (empty($ad) || empty($soyad) || empty($email) ||empty($telefon) ) {
        
        echo "
            <script>
                alert('Kullanıcı Girişi Hatalı');
                window.top.location = 'myForm.php';
            </script>
        ";
        exit();

    }

    // rehberim isminde .txt uzantılı dosya oluşturma işlemini gerçekleştirelim.
    touch("rehberim.txt");

    // Formdan aldığımız verileri güvenlik işlemini yaptığımız fonksiyondan geçirelim.
    $ad = myData($ad);
    $soyad = myData($soyad);
    $email = myData($email);
    $telefon = myData($telefon);

    // ve formdan aldığımız verileri bu dosyayı açıp, içerisine yazalım.
    $myFileWrite = fopen("rehberim.txt", "abt");
    $veriler = fwrite($myFileWrite, "$ad ~ $soyad ~ $email ~ $telefon\n");
    fclose($myFileWrite);

    if ($veriler) {
        echo "
            <script>
                alert('$ad $soyad, Kayıt Edildi!');
                window.top.location = 'myForm.php';
            </script>
        ";

        setcookie("name", $ad, time() + 3600);
        setcookie("lastName", $soyad, time() + 3600);
        setcookie("email", $email, time() + 3600);
        setcookie("phoneNumber", $telefon, time() + 3600);

    } else {
        echo "
            <script>
                alert('Hata: $ad $soyad, Kayıt Edilemedi!');
                window.top.location = 'myForm.php';
            </script>
        ";
    }

?>