<div class="content-wrapper">
    <section class="content">
        <?php foreach($klub as $pjl) { ?>
        
        <form action="<?php echo base_url(). 'index.php/klub/update'; ?>" method="post">

          

            <div class="form group">
                <label>Nama Klub</label>
                <input type="text" name="nama_klub" class="form-control"
                value="<?php echo $pjl->nama_klub ?>">
            </div>

            <div class="form group">
                <label>Kota</label>
                <input type="text" name="kota" class="form-control"
                value="<?php echo $pjl->kota ?>">
            </div>

            <div class="form group">
                <label>Main</label>
                <input type="number" name="main" class="form-control"
                value="<?php echo $pjl->main ?>">
            </div>

            <div class="form group">
                <label>Menang</label>
                <input type="number" name="menang" class="form-control"
                value="<?php echo $pjl->menang ?>">
            </div>

            <div class="form group">
                <label>Seri</label>
                <input type="number" name="seri" class="form-control"
                value="<?php echo $pjl->seri ?>">
            </div>

            <div class="form group">
                <label>Kalah</label>
                <input type="number" name="kalah" class="form-control"
                value="<?php echo $pjl->kalah ?>">
            </div>

            <div class="form group">
                <label>Poin</label>
                <input type="number" name="poin" class="form-control"
                value="<?php echo $pjl->poin ?>">
            </div>

            
            <a href="<?php echo base_url('index.php/klub/index'); ?>" class="btn btn-primary">Kembali</a>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php } ?>
    </section>
</div>