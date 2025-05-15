<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME','codespace');
$koneksi = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
# Check koneksi, berhasil atau tidak
if ( $koneksi->connect_error) {
    die('Oops !! Koneksi Gagal : '.$koneksi->connect_error);
}
?>