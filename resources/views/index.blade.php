<?php
require 'crud.php';
$select_sql = "SELECT *FROM pelanggan";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$pelanggan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pelanggan[] = $row;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PostTest5 P Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background-color:#FFEBCD;">

	<!-- navbar -->
	<div class="medsos">
		<div class="contaikner">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="contaikner">
			<div class="sticky">
				<h1><a href="index.php"></a>INPUT DATA TOKO TOP UP</h1>
				<ul>
					<li class="active"><a href="index.php">HOME</a></li>
					<li><a href="sort.php">Sorting</a></li>
					<li><a href="search.php">Searching</a></li>
				</ul>
		</div>
	</header>

	<section class="content">
        <h2 class="title">DATA PELANGGAN</h2>
        <a href="create.php"><button class="create"><i class="fas fa-plus"></i> Tambah Data</button></a>
        <table>
            <tr>
                <th>Id</th>
                <th>NAMA</th>
                <th>BARANG</th>
                <th>HARGA</th>
                <th>KARYAWAN</th>
                <th>ACTION</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($elektronik as $el) : ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $el["Nam_Barang"] ?></td>
                    <td><?= $el["Harga"] ?></td>
                    <td><?= $el["Jenis"] ?></td>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </section>

	<!-- footer -->
	<footer>
		<div class="contaikner">
			<small> Copyright &copy; 2021 - Yanuar Satria Gotama, All Rights Reserved.</small>
		</div>
	</footer>
</body>
</html>