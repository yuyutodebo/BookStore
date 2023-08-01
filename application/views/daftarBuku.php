<div class="card mt-2">
    <div class="card-header text-center">
        <h1>
            Ini adalah halaman Daftar Buku
        </h1>
        <div class="card-boddy">
            <!-- menampilakan flashdata -->
            <?= $this->session->flashdata('pesan');?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Tambah Buku
            </button>
            <table class="table table-success table-striped-columns" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Kode Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
    $no = 1;
    foreach($data_buku as $row) {?>
                    <tr>
                        <th scope="row"><?= $no++;?></th>
                        <td><?=$row['kode_buku'];?></td>
                        <td><?=$row['judul_buku'];?></td>
                        <td><?=$row['tahun_terbit'];?></td>
                        <td><?=$row['nama_penerbit'];?></td>
                        <td> <a href="<?=base_url('Books/hapus_buku/').$row['kode_buku'];?>"
                                class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data Ini?')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <a href="<?=base_url('Books/show_edit_page/').$row['kode_buku'];?>"
                                class="btn btn-success btn-sm">
                                <i class="fa-sharp fa-light fa-pen-to-square">Edit</i>
                            </a>
                        </td>

                    </tr>

                    <?php }?>

                </tbody>
            </table>
        </div>
    </div>
</div>