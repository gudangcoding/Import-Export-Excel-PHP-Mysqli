<?php
error_reporting(0);
include 'connect.php';
include 'excel_reader2.php';

if(isset($_POST['import'])) {

	$data = new Spreadsheet_Excel_Reader($_FILES['import']['tmp_name']);


	$baris = $data->rowcount($sheet_index=0);

	$drop = isset($_POST['drop'])?$_POST['drop'] : 0;
	if($drop == 1) {
		mysqli_query($connect, "TRUNCATE TABLE user");
	}

	for($i = 2;$i<=$baris; $i++) {
		$nama = $data->val($i, 1);
		$kota = $data->val($i, 2);
		$email = $data->val($i, 3);

		mysqli_query($connect, "INSERT INTO user SET user_nama = '$nama', user_kota = '$kota', user_email = '$email'");
	}

	echo "Success Import";
	unlink($_FILES['import']['tmp_name']);
	echo "<meta http-equiv='refresh' content='1; url=index.php'>";

}

?>