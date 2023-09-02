<div class="container">

    <div class="card">
        <div class="card-header">
            Biodata
        </div>
        <div class="card-body">

            <div class="row mt-3">
                <div class="col-md-6">

                    <form action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" id="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sudahpsikolog">Apakah sudah pernah ke Psikolog sebelumnya?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="sudah" name="sudah" class="custom-control-input">
                                    <label class="custom-control-label" for="sudah">Sudah</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="belum" name="belum" class="custom-control-input">
                                    <label class="custom-control-label" for="belum">Belum</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="keluhan">Keluhan</label>
                                <input type="text" name="keluhan" class="form-control" id="keluhan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="notlpn">No Tlpn</label>
                                <input type="text" name="notlpn" class="form-control" id="notlpn">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jeniskelamin">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="laki-laki" name="laki-laki" class="custom-control-input">
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="perempuan" name="perempuan" class="custom-control-input">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="prodi">Prodi</label>
                                <select class="custom-select" name="prodi" id="prodi" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Menejemen">Menejemen</option>
                                    <option value="Bioteknologi">Bioteknologi</option>
                                    <option value="PBI">PBI</option>
                                    <option value="Kedokteran">Kedokteran</option>
                                    <option value="Filsafat Keahlian">Filsafat Keahlian</option>
                                    <option value="Arsitektur">Arsitektur</option>
                                    <option value="Desain Produk">Desain Produk</option>
                                    <option value="Humanitas">Humanitas</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sebelumnya</button>
                        <button type="submit" class="btn btn-primary float-right">Selanjutnya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>