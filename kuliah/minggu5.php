<?php
    
// Menyimpan data barang
$data = [
    ["Judul" => "Berserk",
    "Penulis" => "Miura Kentaro"],
    ["Judul" => "Oswald",
    "Penulis" => "Walt Disney"]
];

echo "Menampilkan data awal";
// menampilkan data
function menampilkandata($data){
    echo"<table border ='1'cellspacing='0'>";
    echo "<tr><th>Judul</th><th>Penulis</th></tr>";
    foreach($data as $isi ){
        echo"<tr>";
            echo"<td>{$isi['Judul']}</td>";
            echo"<td>{$isi['Penulis']}</td>";
            echo"</tr>";
    }
    echo "</table>";
}

echo menampilkandata($data);

echo "menambahkan buku baru";
echo "<br>";
// menambahkan buku baru
$data[] = ["Judul" => "one piece", "Penulis" => "Elichiro Oda"]; 
menampilkandata($data);

echo "memperbarui buku dengan ID ke-2";
echo"<br>";
// memperbarui buku dengan ID ke-2
$data[2] = ["Judul" => "Naruto", "Penulis" => "Masashi Kishimoto"];
menampilkandata($data);


echo "Menghapus Buku dengan ID ke-1";
echo"<br>";
// Menghapus Buku dengan ID ke-1
unset($data[1]);
$data = array_values($data); //untuk mengatur index dibawahnya agar naik ke index yang sudah terhapus
menampilkandata($data);


echo "Mencari buku dengan kata kunci 'Naruto'";
echo "<br>";
// Mencari buku dengan kata kunci 'Naruto'
// $caribuku = menampilkandata($data);
// if ($caribuku) {
//     echo $caribuku['']
// }

// function search($data, $Judul){
//     foreach ($data as $isi) {
//         if()
//     }
// }


