<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehber Uygulaması</title>
</head>

<body>

    <br>

    <div style="text-align: center; background-color: lightblue; width:25%; padding: 20px; margin: 0 auto; display: flex; justify-content: center;">

        <!-- FORM -->
        <form action="control.php" method="post">

            <b>Kullanıcı Adı: </b><br>
            <input type="text" name="ad">
            <br><br>
            <b>Kullanıcı Soyadı: </b><br>
            <input type="text" name="soyad">
            <br><br>
            <b>E mail Adresi:</b><br>
            <input type="email" name="email">
            <br><br>
            <b>Telefon Numarası</b><br>
            <input type="tel" name="telefon">
            <br><br>
            <input style=" background-color: lightcyan; border:0; outline:0; color: darkblue; padding: 6px 16px; border-radius: 16px; cursor: pointer;" type="submit" name="dugme" value="Kaydet">

        </form>
    </div><br><br>

    <?php
    // mydata.php dosyamızı buraya include edelim.
    include 'mydata.php';
    ?>

</body>

</html>