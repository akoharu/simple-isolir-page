<?php
try {
    $db = new mysqli("localhost", "haha", "password", "database");
} catch (Exception $exc) {
    echo $exc-> getTraceAsString();
}
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

     $is_insert = $db->query( "INSERT INTO `contact`( `name`, `phone`, `message`) 
     VALUES ( '$name','$phone','$message')");

     if($is_insert == TRUE) {
        echo "<script> location.href='thanks.php'; </script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Koneksi Internet Anda di ISOLIR | Rafatek</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script>
            var form = document.getElementById('clientForm');
            form.button.onclick = function () {
                for (var i = 0; i < form.elements.length; i++) {
                    if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                        alert('There are some required fields!');
                        return false;
                    }
                }
                form.submit();
            };
        </script>
        <div class="wrapper">
            <div class="container">
                <div>
                    <h1>MOHON MAAF, KONEKSI INTERNET ANDA DI ISOLIR</h1>
                    <p>
                        Pelanggan yang terhormat, Kami informasikan bahwa layanan internet anda saat ini
                        terisolir. Mohon maaf atas ketidak nyamanannya. Agar dapat digunakan kembali
                        Silahkan hubungi no
                        <a style="color:white" href="tel:02517589950">0251 7589 950</a>. Terimakasih
                        <br>
                        <br>
                        Atau isi form aduan dibawah ini :
                    </p>
                    <form id="clientForm" class="contact-form" action="index.php" method="post">
                        <input type="text" name="name" placeholder=" Nama" required="required">
                        <br>
                        <input type="text" name="phone" placeholder=" No. HP" required="required">
                        <br>
                        <textarea name="message" placeholder=" Pesan anda" required="required"></textarea>
                        <br>
                        <input id="button" type="submit" value="Submit">
                    </form>
                </div>
            </div>

        </body>

    </html>