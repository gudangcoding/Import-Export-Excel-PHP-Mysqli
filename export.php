<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=daftar-user.xls");

include 'daftar-user.php';
?>