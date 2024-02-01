<?php
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');

if (!empty($Email)) {
    if (!empty($Password)) {
        $host = "localhost";
        $dbemail = "root";
        $dbpassword = "";
        $dbname = "ecommerce";

        //create connect

        $conn = new mysqli($host,$dbemail,$dbpassword,$dbname);
        if (mysqli_connect_error()){
            die ('Connect Error ('. mysqli_connect_errno().')'
            . mysqli_connect_error());
        }

        else{
            $sql = "INSERT INTO account (Email, Password)
            values ('$Email', '$Password')";
            if ($conn -> query($sql)){
                echo "string";
            }
        }
        // Kode untuk menghubungkan ke database dan operasi lainnya bisa ditambahkan di sini
    } else {
        echo "Password tidak boleh kosong";
        die();
    }
} else {
    echo "Email tidak boleh kosong";
    die();
}
?>