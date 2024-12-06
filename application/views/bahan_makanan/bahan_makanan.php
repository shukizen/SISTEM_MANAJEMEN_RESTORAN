<div class="container mt-5">
    <h2>Daftar Bahan Makanan</h2>
    <a href="<?= base_url('bahanmakanan/tambah'); ?>" class="btn btn-primary mb-3">Tambah Bahan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bahan</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bahan_makanan as $bahan): ?>
                <tr>
                    <td><?= $bahan['id_bahan']; ?></td>
                    <td><?= $bahan['nama_bahan']; ?></td>
                    <td><?= $bahan['stok']; ?></td>
                    <td><?= $bahan['satuan']; ?></td>
                    <td><?= $bahan['harga_per_satuan']; ?></td>
                    <td>
                        <a href="<?= base_url('bahanmakanan/edit/' . $bahan['id_bahan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('bahanmakanan/hapus/' . $bahan['id_bahan']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>