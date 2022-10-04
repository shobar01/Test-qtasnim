<!DOCTYPE html>
<html>
<head>
    <title>Print Penjualan</title>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>STOK</th>
            <th>JUMLAH TERJUAL</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>JENIS BARANG</th>
        </tr>   

        <?php 
        $no= 1;
        foreach ($penjualan as $pjl) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pjl->nama_barang ?></td>
            <td><?php echo $pjl->stok ?></td>
            <td><?php echo $pjl->jumlah_terjual ?></td>
            <td><?php echo $pjl->tgl_transaksi ?></td>
            <td><?php echo $pjl->jenis_barang ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>