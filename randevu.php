<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyon</title>
</head>
<body>

<table>
    <tr>
        <th>Hastane</th>
        <th>Klinik</th>
        <th>Doktor</th>
        <th>İl</th>
        <th>Tarih</th>
    </tr>

    <?php
     
     $randevusor = $db->prepare("SELECT * FROM randevu
     INNER JOIN kullanici ON randevu.randevu_hasta_id = kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc");
     $randevusor->execute([
        'kullanici_tc' => $_SESSION['userkullanici_tc']
     ]);
     while ($randevucek = $randevusor->fetch(PDO::FETCH_ASSOC)) { ?> 

    <tr>
        <th><?php echo $randevucek['randevu_hastane']; ?></th>
        <th><?php echo $randevucek['randevu_klinik']; ?></th>
        <th><?php echo $randevucek['randevu_doktor']; ?></th>
        <th><?php echo $randevucek['randevu_sehir']; ?></th>
        <th><?php echo $randevucek['randevu_tarih']; ?></th>
    </tr>
    <?php } ?>
</table>
    
</body>
</html>