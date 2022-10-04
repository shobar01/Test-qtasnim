<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
            <h1 class="mb-3">Data Penjualan</h1>
        </div>
          <section class="content">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
             
              <a class="btn btn-danger" href="<?php echo base_url('index.php/penjualan/print'); ?>"> <i class="fa fa-print"></i>Print</a>
              <a class="btn btn-warning" href="<?php echo base_url('index.php/penjualan/pdf'); ?>"> <i class="fa fa-file"></i>Export PDF</a>
              
              
              <table class="table">
                  <tr>
                      <th>NO</th>
                      <th>NAMA BARANG</th>
                      <th>STOK</th>
                      <th>JUMLAH TERJUAL</th>
                      <th>TANGGAL TRANSAKSI</th>
                      <th>JENIS BARANG</th>
                      <th colspan="2">AKSI</th>
                      
                  </tr>

                  <?php

                   $no = 1; 
                   foreach ($penjualan as $pjl) : ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $pjl->nama_barang ?></td>
                      <td><?php echo $pjl->stok ?></td>
                      <td><?php echo $pjl->jumlah_terjual ?></td>
                      <td><?php echo $pjl->tgl_transaksi ?></td>
                      <td><?php echo $pjl->jenis_barang ?></td>
                      <td><?php echo anchor('penjualan/detail/'.$pjl->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus?') "><?php echo anchor('penjualan/hapus/'.$pjl->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('penjualan/edit/'.$pjl->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                  </tr>

                  <?php endforeach; ?>
              </table>
         </section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Penjualan</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php echo form_open_multipart('penjualan/tambah_aksi'); ?>
        
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control">
            </div>     
            
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>   

            <div class="form-group">
                <label>Jumlah Terjual</label>
                <input type="number" name="jumlah_terjual" class="form-control">
            </div> 
            

            <div class="form-group">
                <label>Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" class="form-control">
            </div>  

            <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenis_barang" class="form-control">
            </div>  
 

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       
        <?php echo form_close(); ?>
      </div>
      
       
      </div>
    </div>
  </div>
</div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->