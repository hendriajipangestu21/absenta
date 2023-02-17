<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('absensi/absen') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Tambah Absen</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="date" name="tgl" id="tgl" class="form-control" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="keterangan">Laporan Kinerja : </label>
                                <textarea name="keterangan" id="keterangan" class="form-control" required="reuqired"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="img">Bukti : </label>
                                <input type="file" name="bukti" id="bukti" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>