<?php

// Array untuk menyimpan data bareang
$barang = [
    ["id" => "1", 
    "namabarang" => "buku",
    "kategori" => "alat tulis",
    "Harga" => "2000"],
    ["id" => "2", 
    "namabarang" => "pulpen",
    "kategori" => "alat tulis",
    "Harga" => "5000"]
];

// create
if(isset($_POST['submit'])){
    $id = count($barang) +1;
    $namabarang = $_POST['namabarang'];
    $kategori = $_POST['kategori'];
    $Harga = $_POST['Harga'];
    $barang[] = ["id" => $id, "namabarang" => $namabarang, "kategori" => $kategori, "Harga" => $Harga];
}

// delete
if(isset($_POST['delete'])){
    $isi = $_POST['delete'];
    unset($barang[$isi]); //menghapus elemen berdasarkan index
    $barang = array_values($barang); //mengatur ulang index array
}

//edit
if(isset($_POST['edit'])){

}

?>

<!-- form untuk menambahkan barang -->
 <form action ="" method = "POST">
    <label for="namabarang">Nama Barang:</label><br>
    <input type="text" 
    id="namabarang" 
    name="namabarang" 
    required><br>

    <label for="kategori">Kategori Barang:</label><br>
    <input type="text" 
    id="kategori"
    name="kategori"
    required><br>

    <label for="Harga">Harga Barang:</label><br>
    <input type="String"
    id="Harga" 
    name="Harga" 
    required><br>
    
    <input type="submit" 
    name="submit" 
    id="submit" 
    value="Tambah Barang"
    required>

<?php

echo"<h2>Daftar Barang</h2>";
echo"<table border='1' cellspacing='1'>";
    echo "<tr>
    <th>Id</th>
    <th>namabarang</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Aksi</th></tr>";
    foreach($barang as $isi ){
        echo"<tr>";
            echo"<td>{$isi['id']}</td>";
            echo"<td>{$isi['namabarang']}</td>";
            echo"<td>{$isi['kategori']}</td>";
            echo"<td>{$isi['Harga']}</td>";
            echo"<td>
            <form action ='' method='POST' style='display:inline-block;'>
                <input type='hidden' name='delete' value='{$isi['id']}'>
                <input type='submit' value='Hapus'>
            </form>
            </td>";
            echo"</tr>";
    }

    ?>

