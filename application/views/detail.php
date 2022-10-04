<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
            <h1 class="mb-3">Detail Data Penjualan</h1>
        </div>
        <section class="content">
              <table class="table">
                  <tr>
                      <th>Nama Barang</th>
                      <td><?php echo $detail->nama_barang ?></td>
                  </tr>

                  <tr>
                      <th>Stok</th>
                      <td><?php echo $detail->stok ?></td>
                  </tr>

                  <tr>
                      <th>Jumlah Terjual</th>
                      <td><?php echo $detail->jumlah_terjual ?></td>
                  </tr>

                  <tr>
                      <th>Tanggal Transaksi</th>
                      <td><?php echo $detail->tgl_transaksi ?></td>
                  </tr>

                  <tr>
                      <th>Jenis Barang</th>
                      <td><?php echo $detail->jenis_barang ?></td>
                  </tr>
                 

            </table>

            <a href="<?php echo base_url('index.php/penjualan/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
    </div>
</div>