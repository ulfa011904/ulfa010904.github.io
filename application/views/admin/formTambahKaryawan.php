<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="card" style="width: 60%; margin: buttom 100px;">
        <div class="card-body">

            <form method="POST" action="<? base_url('admin/dataKaryawan/tambahDataAksi')  ?>" enctype="multiprt/form-data">

                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama_karyawan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">--pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">--pilih</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Pegawai Magang">Pegawai Magang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->