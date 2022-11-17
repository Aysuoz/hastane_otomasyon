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
    <title>Hastane otomasyon</title>
</head>
<body>
    <div class="hesap">
        <div class="label">
            <label>AD SOYAD</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
        </div><br>
        <div class="label">
            <label>TC NO</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc']; ?>">
        </div><br>
      
    </div>
    
</body>
</html>