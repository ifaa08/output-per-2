<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>output pertemuan ke-2</title>
	<style type="text/css">
		body{
			background-color: hotpink;
		}
		div{
			width: 200px;
			height: 200px;
			border-radius: 0 50% 0 50%;
			overflow: hidden;
			margin: 50px auto;
			box-shadow: 5px 5px 5px black ,-5px -5px 5px blue;
		}
		img{
			width: 200px;
		}
		h1{
			text-align: center;
		}
		p{
			text-align: center;
			font-size: 20px;
		}
	</style>
	<script>
		var Name = window.prompt("siapa nama kamu?","");
		window.alert("haloo" + " " + name + " " + "welcome")
	</script>
</head>
<body>
	<h1>Biodata Diri</h1>
	<div><img src="img/ipew.jpg" alt="foto ifa"></div>
	<?php
		$Name="Siti Ma'rifatul Khoiriyah";
		$Nim=210411100007;
		$Fakultas="Teknik";
		$Prodi="Teknik Informatika";
	?>
	<p>Nama: <?php echo ($Name); ?></p>
	<p>Nim: <?php echo ($Nim); ?></p>
	<p>Fakultas: <?php echo ($Fakultas); ?></p>
	<p>Prodi: <?php echo ($Prodi); ?></p>
	<br>
	<h6>
		<?php
			echo("tipe data dari"." ".$Name ." "."adalah"." ");
			var_dump($Name) ;
			echo("tipe data dari"." ".$Nim ." "."adalah"." ");
			var_dump($Nim) ;
		?>
	</h6>
</body>
</html>