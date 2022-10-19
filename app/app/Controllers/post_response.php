<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
</head>
<body>

<p>Nama : <?=$nama?></p>
<p>Umur : <?$umur?></p>

<?php
if ($umur < "5") {
  echo "Balita";
} elseif ($umur < "12") {
  echo "Anak";
} elseif ($umur < "25") {
  echo "Remaja";
} elseif ($umur < "50") {
  echo "Dewasa";
} else {
  echo "Lansia";
}
?>

</body>
</html>