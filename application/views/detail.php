<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
            <h1 class="mb-3">Detail Data Klub</h1>
        </div>
        <section class="content">
              <table class="table">

                  <tr>
                      <th>Nama Klub</th>
                      <td><?php echo $detail->nama_klub ?></td>
                  </tr>

                  <tr>
                      <th>Kota</th>
                      <td><?php echo $detail->kota ?></td>
                  </tr>

                  
                 

            </table>

            <a href="<?php echo base_url('index.php/klub/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
    </div>
</div>