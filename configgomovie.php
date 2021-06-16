<?php
$db=pg_connect('host=localhost port=1433 dbname=gomovie user=postgres password=autobot555');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
