<?php 

try {

    $db=new PDO("mysql:host=localhost;dbname=hastane_otomasyon;charset=utf8",'root','root');
    // echo "veritabanı bağlantısı başarılı";
}

catch (Exception $e) {

    echo $e->getMessage();

}

?>