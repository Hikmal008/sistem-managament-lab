<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman | Sistem Manajemen Lab</title>
    <link rel="stylesheet" href="../css/peminjaman.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Data Peminjaman Barang</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data dummy, seharusnya berasal dari database
                $peminjaman = [
                    ["nama" => "Doni", "barang" => "Laptop", "jumlah" => 1, "pinjam" => "2025-06-20", "kembali" => "2025-06-22", "status" => "Dipinjam"],
                    ["nama" => "Rina", "barang" => "Proyektor", "jumlah" => 1, "pinjam" => "2025-06-19", "kembali" => "2025-06-20", "status" => "Dikembalikan"]
                ];
                $no = 1;
                foreach ($peminjaman as $data) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$data['nama']}</td>
                            <td>{$data['barang']}</td>
                            <td>{$data['jumlah']}</td>
                            <td>{$data['pinjam']}</td>
                            <td>{$data['kembali']}</td>
                            <td>{$data['status']}</td>
                            <td class='actions'>
                                <a href='edit_peminjaman.php?id={$no}'><button>Edit</button></a>
                                <a href='hapus_peminjaman.php?id={$no}' onclick='return confirm(\"Yakin ingin hapus?\")'><button>Hapus</button></a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
