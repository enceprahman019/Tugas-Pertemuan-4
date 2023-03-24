<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encep Rahman Armana|D112121053</title>
</head>
<body>
    <h1>Tugas Quiz 1</h1>
<?php
$rows = 9; // jumlah baris pada pola segitiga
for ($i = 1; $i <= $rows; $i++) { // loop untuk setiap baris
    if ($i % 3 == 1) { // jika baris habis dibagi 3 dengan sisa 1
        for ($j = 1; $j <= $i; $j++) {
            echo "+ "; // mencetak tanda plus (+)
        }
    } elseif ($i % 3 == 2) {
        for ($j = 1; $j <= $i; $j++) { 
            echo "- "; // mencetak tanda minus (-)
        }
    } else {
        for ($j = 1; $j <= $i; $j++) { 
            echo "* "; // mencetak tanda bintang (*)
        }
    }
    echo "<br>"; // pindah ke baris berikutnya
}
?>
</body>
</html>
