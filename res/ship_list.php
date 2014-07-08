<?php
session_start();
include	'./../inc/cekSession.php';
include	'./../inc/conn_db.php';

$query = 'SELECT ship.id_ship AS id, ship.name AS name FROM ship;';
$isi_ada = mysql_query($query);
$data = '({"results":[';
while ($row = mysql_fetch_array($isi_ada)) {

    $data = $data . '{"id":"' . $row[0] . '", "name":"' . $row[1] . '"},';
}
substr($data, 0, -1);

$data = $data . ']})';

echo $data;
?>
