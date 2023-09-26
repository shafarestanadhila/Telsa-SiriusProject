<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone_number = $_POST["phone_number"];

    // Simpan atau proses data sesuai kebutuhan Anda di sini

    // Contoh: Menampilkan data yang dikirimkan
    echo "First Name: $first_name<br>";
    echo "Last Name: $last_name<br>";
    echo "Email: $email<br>";
    echo "Phone Number: $phone_number<br>";
}
?>
