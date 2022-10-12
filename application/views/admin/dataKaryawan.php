<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 100px;">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a class="mb-2 mt-2 btn-sm btn-primary" href="<?= base_url('admin/dataKaryawan/tambahData') ?> "><i class="fas fa-plus">Tambah Karyawan</i></a>

    <?= $this->session->flashdata('massage')  ?>
    <table class="table table-bordered table-striped">
        <tr>

            <th class="text-center">NIK</th>
            <th class="text-center">Nama Karyawan</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Status</th>
            <th class="text-center">photo</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>

        <?php
        foreach ($karyawan as $k) : ?>
            <tr>

                <td><?= $k->nik  ?></td>
                <td><?= $k->nama_karyawan  ?></td>
                <td><?= $k->jenis_kelamin  ?></td>
                <td><?= $k->tanggal_masuk  ?></td>
                <td><?= $k->status  ?></td>
                <td><img src="<?= base_url('assets/photo/' . $k->photo); ?>" width="100px"></td>
                <td><?= $k->hak_akses  ?></td>

                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataKaryawan/updateData/' . $k->id_karyawan) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('yakin hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataKaryawan/deleteData/' . $k->id_karyawan) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->s