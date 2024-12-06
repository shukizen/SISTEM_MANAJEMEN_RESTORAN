<div class="container mt-5">
    <h2>Tambah Bahan Makanan</h2>
    <form action="<?= base_url('bahanmakanan/tambah'); ?>" method="post">
        <div class="mb-3">
            <label for="nama_bahan" class="form-label">Nama Bahan</label>
            <input type="text" name="nama_bahan" id="nama_bahan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" name="satuan" id="satuan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga_per_satuan" class="form-label">Harga</label>
            <input type="number" name="harga_per_satuan" id="harga_per_satuan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
