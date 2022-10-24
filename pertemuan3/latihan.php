<?php 
// Pengulangan
// For
// while
// do while
// for each : pengulangan husus array


// for ($i=1; $i <5; $i++) { 
// 	echo "hello world <br>";
// }

// $i = 0;
// while ($i < 5) {
// 	echo "hello world <br>";
// $i++;
// }

// $i = 10;
// do {
// 	echo "hellow world <br>";
// $i++;
// } while ( $i < 5 );
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color: red;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ( $i = 1; $i < 5; $i++ ) { ?>
			<?php if ( $i % 2 == 1 ) : ?>
			<tr class="warna-baris">
	<?php else : ?>
	<tr>
	<?php endif; ?>
				<?php for ( $j = 1 ; $j <= 5; $j++ ) { ?>
					<td><?= "$i, $j"; ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>

</body>
</html>