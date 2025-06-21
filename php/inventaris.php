<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris | Sistem Management Lab</title>
    <link rel="stylesheet" href="../css/inventaris.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Daftar Inventaris Laboratorium</h1>
        </header>

        <div class="inventaris-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PC Desktop</td>
                        <td>Perangkat Keras</td>
                        <td>15</td>
                        <td>Baik</td>
                        <td>Lab A</td>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="delete">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
