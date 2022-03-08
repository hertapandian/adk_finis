<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            FORMULIR PENDAFTARAN LEMBAGA
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lembaga</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sk" class="col-sm-2 col-form-label">Nomor SK</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="sk" name="sk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="hp" name="hp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="anggota" class="col-sm-2 col-form-label">Jumlah Anggota</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="anggota" name="anggota">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengurus" class="col-sm-2 col-form-label">Pengurus</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="diskripsi" name="diskripsi" rows="3" placeholder="Nama ketua, Sekretaris, Bendahara"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pu" id="pusat" name="status">
                            <label class="form-check-label" for="pusat">
                                Pusat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pr" id="provensi" name="status">
                            <label class="form-check-label" for="provensi">
                                Provensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kb" id="kabupaten" name="status">
                            <label class="form-check-label" for="kabupaten">
                                Kabupaten
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diskripsi" class="col-sm-2 col-form-label">Diskripsi Lembaga</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="diskripsi" name="diskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-5">

                        <input class="form-control" type="file" id="lampiran" name="lampiran">


                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer text-muted">
            <button type="sabmit" class="btn btn-primary">Simpan</button>
            <button type="sabmit" class="btn btn-warning float-right">Batal</button>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->