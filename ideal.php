<?php
class ideal {
	function hitung ($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." || Under Weight / kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi." || Normal Weight / normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight / Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}

		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." || Under Weight / kurus";
			}elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." || Normal Weight / Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight / Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		}
	}
}
$haitsam = new ideal();
if (isset ($_POST['submit'])) {
	$Nama = $_POST ['nama'];
	$Berat_badan = $_POST ['bb'];
	$Tinggi_badan = $_POST ['tb'];
	$jenis_kelamin = $_POST ['jk'];
	$bmi = $Berat_badan/($tb*$tb/10000);
	$haitsam->hitung ($bmi, $jk);
}
?>