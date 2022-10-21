<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
            <h1 class="mb-3">Data Klub</h1>
        </div>
          <section class="content">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
             
              <!-- <a class="btn btn-danger" href="<?php echo base_url('index.php/customer/print'); ?>"> <i class="fa fa-print"></i>Print</a>
              <a class="btn btn-warning" href="<?php echo base_url('index.php/customer/pdf'); ?>"> <i class="fa fa-file"></i>Export PDF</a> -->
              
              
              <table class="table">
                  <tr>
                      <th>No</th>
                      <th>Nama Klub</th>
                      <th>Kota</th>
                      <th>Main</th>
                      <th>Menang</th>
                      <th>Seri</th>
                      <th>Kalah</th>
                      <th>Poin</th>
                      <th colspan="2">AKSI</th>
                      
                  </tr>

                  <?php

                   $no = 1; 
                   foreach ($klub as $pjl) : ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $pjl->nama_klub ?></td>
                      <td><?php echo $pjl->kota ?></td>
                      <td><?php echo $pjl->main ?></td>
                      <td><?php echo $pjl->menang ?></td>
                      <td><?php echo $pjl->seri ?></td>
                      <td><?php echo $pjl->kalah ?></td>
                      <td><?php echo $pjl->poin ?></td>
                      <!-- <td><?php echo anchor('klub/detail/'.$pjl->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td> -->
                      <td onclick="javascript: return confirm('Anda yakin hapus?') "><?php echo anchor('klub/hapus/'.$pjl->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('klub/edit/'.$pjl->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                  </tr>

                  <?php endforeach; ?>
              </table>
         </section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Klub</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php echo form_open_multipart('klub/tambah_aksi'); ?>
          

            <div class="form-group">
                <label>Nama Klub</label>
                <input type="text" name="nama_klub" class="form-control">
            </div>   
            
            <div class="form-group">
                <label>Kota</label>
                <input type="text" name="kota" class="form-control">
            </div>   
            <div class="form-group">
                <label>Main</label>
                <input type="number" name="main" class="form-control">
            </div>  
            <div class="form-group">
                <label>Menang</label>
                <input type="text" name="menang" class="form-control">
            </div>  
            <div class="form-group">
                <label>Seri</label>
                <input type="text" name="seri" class="form-control">
            </div>  
            <div class="form-group">
                <label>Kalah</label>
                <input type="text" name="kalah" class="form-control">
            </div>  
            <div class="form-group">
                <label>Poin</label>
                <input type="text" name="poin" class="form-control">
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