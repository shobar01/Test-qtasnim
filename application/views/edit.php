<div class="content-wrapper">
    <section class="content">
        <?php foreach($penjualan as $pjl) { ?>
        
        <form action="<?php echo base_url(). 'index.php/penjualan/update'; ?>" method="post">

            <div class="form group">
                <label>Nama Barang</label>
                <input type="hidden" name="id" class="form-control"
                value="<?php echo $pjl->id ?>">
                <input type="text" name="nama_barang" class="form-control"
                value="<?php echo $pjl->nama_barang ?>">
            </div>

            <div class="form group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control"
                value="<?php echo $pjl->stok ?>">
            </div>

            <div class="form group">
                <label>Jumlah Terjual</label>
                <input type="text" name="jumlah_terjual" class="form-control"
                value="<?php echo $pjl->jumlah_terjual ?>">
            </div>

            <div class="form group">
                <label>Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" class="form-control"
                value="<?php echo $pjl->tgl_transaksi ?>">
            </div>


            <div class="form group">
                <label>Jenis Barang</label>
                <input type="text" name="jenis_barang" class="form-control"
                value="<?php echo $pjl->jenis_barang ?>">
            </div>

            
            <a href="<?php echo base_url('index.php/penjualan/index'); ?>" class="btn btn-primary">Kembali</a>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php } ?>
    </section>
</div>