<?php


function register_user($nama, $pass){
    global $koneksi

    $query = "INSERT INTO admin (username, password) VALUES ('$nama', '$pass')";

    if(mysqli_query($koneksi, $query)){
        echo ' berhasil ';
    }else{
        echo ' gagal ';
    }
}

?>