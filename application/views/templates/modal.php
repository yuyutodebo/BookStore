
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('Books/simpan_buku');?>" method="POST">
            <div class="modal-body">
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Judul Buku" name="judulBuku">
                        <label for="floatingInput" >Judul Buku</label>
                    </div>
                    <div class="form-floating mb-3">
                    <select class="form-control" id="floatingYear" name="tahunTerbit">
                    <?php for($a=2021;$a<=2023;$a++) {?>
                        <option value="<?=$a;?>"><?=$a;?></option>
                        <?php }?> 
                        </select>
                        <label for="floatingYear" >Tahun Terbit</label>
                        </div>
                        <div class="form-floating">
                    <select class="form-control" id="floatingPenerbit" name="Penerbit">
                        <?php foreach($data_penerbit as $row) {?>
                        <option value="<?=$row['kode_penerbit'];?>"><?=$row['nama_penerbit'];?></option>
                        <?php }?> 
                        </select>
                        <label for="floatingPenerbit" >Penerbit</label>
                        </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>  
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>