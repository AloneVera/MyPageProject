<!DOCTYPE html>
<html>
    <head>
        <link href="Main.css" type="text/css" rel="stylesheet"/>
        <title>form cevapları</title>
        <meta charset="UTF-8">
    </head>

<!--echo "<pre>";   ile  gelen her veriyi ekrana yazdırırız.  -->
<!--Bir değişken tanımlarken php de $ işareti kullanılır.  -->
<!--
    $arrSpor = array("Futbol", "Basketbol", "Tenis");
    print_r($arrSpor);          bütün arrayı yazar.
    echo $arrSpor[1];           1. indeksteki "Basketbol" u yazar. -->

    <body background="cimen2.png">
        <h1>======= Form Cevapları =======</h1>

        <table border="3" width=60% height=60% class="center" >
            <tr>
                <td><b>Adınız : <b></td>
                <td> <?php echo $_POST["ad"]; ?> </td>
            </tr>
            <tr>
                <td><b>Soyadınız : <b></td>
                <td><?php echo $_POST["soyad"]; ?></td>
            </tr>
            <tr>
                <td><b>Mailiniz : <b></td>
                <td><?php echo $_POST["mail"]; ?></td>
            </tr>
            <tr>
                <td><b>Cinsiyetiniz : <b></td>
                <td>
                    <?php 
                    if($_POST["cinsiyet"]==1){
                        echo "Erkek";
                    }
                    else{
                        echo "Kadın";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Seçilen Şehir : <b></td>
                <td><?php echo $_POST["Sehirler"]; ?></td>
            </tr>
            <tr>
                <td><b>Programlama Seçeneği : <b></td>
                <td>
                <?php foreach($_POST["progDil"] as $dil) {
                    echo $dil.' ';
                }
                ?>
                </td>
            </tr>
            <tr>
                <td height="75"><b>Adresiniz : <b></td>
                <td><?php echo $_POST["adres"]; ?></td>
            </tr>
            <tr>
                <td><b>Şifreniz : <b></td>
                <td> <?php echo $_POST["sifre"]; ?> </td>
            </tr>
        </table>
    </body>
</html>