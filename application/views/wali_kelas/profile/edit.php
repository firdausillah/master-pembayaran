                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10"><?= $title ? $title : 'Judul Page' ?></h5>
                                            <p class="m-b-0">Halaman <?= $title ? $title : 'Judul Page' ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 'data_identitas';
                        }
                        ?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Hover table card start -->
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form <?= $title ? $title : 'Judul Page' ?></h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="col-lg-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs  tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_identitas' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_identitas" role="tab" aria-selected="false">Identitas</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_pribadi' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_pribadi" role="tab" aria-selected="false">Pribadi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_foto' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_foto" role="tab" aria-selected="false">Foto</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_kepegawaian' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_kepegawaian" role="tab" aria-selected="false">Kepegawaian</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_penugasan' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_penugasan" role="tab" aria-selected="true">Penugasan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'riwayat_sertifikasi' ? 'active show' : ''; ?>" data-toggle="tab" href="#riwayat_sertifikasi" role="tab" aria-selected="true">Riwayat Sertifikasi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'riwayat_pendidikan' ? 'active show' : ''; ?>" data-toggle="tab" href="#riwayat_pendidikan" role="tab" aria-selected="true">Riwayat Pendidikan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'tugas_tambahan' ? 'active show' : ''; ?>" data-toggle="tab" href="#tugas_tambahan" role="tab" aria-selected="true">Tugas Tambahan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_inpasing' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_inpasing" role="tab" aria-selected="true">inpasing</a>
                                                                </li>
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content tabs card-block">
                                                                <div class="tab-pane<?= $page == 'data_identitas' ? ' active show' : ''; ?>" id="data_identitas" role="tabpanel">
                                                                    <form method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->nama_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->nik_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" readonly id="jenis_kelamin_ptk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->jenis_kelamin_ptk == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                                                                        <option <?= $ptk->jenis_kelamin_ptk == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->tempat_lahir_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tanggal_lahir_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->nama_ibu_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Username <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->username ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->password ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_pribadi' ? ' active show' : ''; ?>" id="data_pribadi" role="tabpanel">
                                                                    <form action="<?= base_url('wali_kelas/profile/save_pribadi/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_ptk" value="<?= $ptk->alamat_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RT</label>
                                                                                    <input type="text" class="form-control" name="rt_ptk" value="<?= $ptk->rt_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RW</label>
                                                                                    <input type="text" class="form-control" name="rw_ptk" value="<?= $ptk->rw_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Dusun</label>
                                                                                    <input type="text" class="form-control" name="dusun_ptk" value="<?= $ptk->dusun_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Desa</label>
                                                                                    <input type="text" class="form-control" name="desa_ptk" value="<?= $ptk->desa_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kecamatan</label>
                                                                                    <input type="text" class="form-control" name="kecamatan_ptk" value="<?= $ptk->kecamatan_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Lintang</label>
                                                                                    <input type="text" class="form-control" name="lintang_ptk" value="<?= $ptk->lintang_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bujur</label>
                                                                                    <input type="text" class="form-control" name="bujur_ptk" value="<?= $ptk->bujur_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kode Pos</label>
                                                                                    <input type="text" class="form-control" name="kode_pos_ptk" value="<?= $ptk->kode_pos_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP</label>
                                                                                    <input type="number" class="form-control" name="nomor_hp_ptk" value="<?= $ptk->nomor_hp_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Agama</label>
                                                                                    <select class="form-control" name="agama_ptk" id="agama_ptk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Islam' ? 'selected' : '' ?> value="Islam">Islam</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Kristen/Protenstan' ? 'selected' : '' ?> value="Kristen/Protenstan">Kristen/Protenstan</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Katholik' ? 'selected' : '' ?> value="Katholik">Khatolik</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Hindu' ? 'selected' : '' ?> value="Hindu">Hindu</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Budha' ? 'selected' : '' ?> value="Budha">Budha</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Khong Hu Chu' ? 'selected' : '' ?> value="Khong Hu Chu">Khong Hu Chu</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Kepercayaan Kpd Tuhan YME' ? 'selected' : '' ?> value="Kepercayaan Kpd Tuhan YME">Kepercayaan Kpd Tuhan YME</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NPWP</label>
                                                                                    <input type="number" class="form-control" name="npwp" value="<?= $ptk->npwp ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Wajib Pajak</label>
                                                                                    <input type="text" class="form-control" name="nama_wajib_pajak" value="<?= $ptk->nama_wajib_pajak ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan_ptk" value="<?= $ptk->kewarganegaraan_ptk ?>" placeholder="contoh : INDONESIA">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Perkawinan</label>
                                                                                    <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Kawin' ? 'selected' : '' ?> value="Kawin">Kawin</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Belum Kawin' ? 'selected' : '' ?> value="Belum Kawin">Belum Kawin</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Janda / Duda' ? 'selected' : '' ?> value="Janda / Duda">Janda / Duda</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Suami / Isteri</label>
                                                                                    <input type="text" class="form-control" name="nama_suami_isteri" value="<?= $ptk->nama_suami_isteri ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pekerjaan Suami / Isteri</label>
                                                                                    <input type="text" class="form-control" name="pekerjaan_suami_isteri" value="<?= $ptk->pekerjaan_suami_isteri ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_foto' ? ' active show' : ''; ?>" id="data_foto" role="tabpanel">
                                                                    <form action="<?= base_url('wali_kelas/profile/save_foto/' . $ptk->id) ?>" method="POST" enctype="multipart/form-data">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="">Foto Profile</label>
                                                                                    <input class="form-control foto" type="file" name="foto">
                                                                                    <input type="hidden" class="form-control" value="<?= $ptk->foto ?>" name="gambar">
                                                                                    <input type="hidden" class="form-control" value="<?= $ptk->nama_ptk ?>" name="nama">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <img src="<?= base_url('uploads/img/ptk/' . $ptk->foto) ?>" height="200px" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_kepegawaian' ? ' active show' : ''; ?>" id="data_kepegawaian" role="tabpanel">
                                                                    <form action="" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Kepegawaian</label>
                                                                                    <select class="form-control" readonly id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS' ? 'selected' : '' ?> value="PNS">PNS</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS Diperbantukan' ? 'selected' : '' ?> value="PNS Diperbantukan">PNS Diperbantukan</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS DEPAG' ? 'selected' : '' ?> value="PNS DEPAG">PNS DEPAG</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTY/PTY' ? 'selected' : '' ?> value="GTY/PTY">GTY/PTY</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTT/PTT Provinsi' ? 'selected' : '' ?> value="GTT/PTT Provinsi">GTT/PTT Provinsi</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTT/PTT Kabupaten/Kota' ? 'selected' : '' ?> value="GTT/PTT Kabupaten/Kota">GTT/PTT Kabupaten/Kota</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Guru Bantu Pusat' ? 'selected' : '' ?> value="Guru Bantu Pusat">Guru Bantu Pusat</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Guru Honor Sekolah' ? 'selected' : '' ?> value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Tenaga Honor Sekolah' ? 'selected' : '' ?> value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'CPNS' ? 'selected' : '' ?> value="CPNS">CPNS</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Induk Yayasan</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->niy ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NUPTK</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->nuptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis PTK</label>
                                                                                    <select class="form-control" readonly id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Kelas ' ? 'selected' : '' ?> value="Guru Kelas ">Guru Kelas </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Mata Pelajaran ' ? 'selected' : '' ?> value="Guru Mata Pelajaran ">Guru Mata Pelajaran </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru BK ' ? 'selected' : '' ?> value="Guru BK ">Guru BK </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Inklusi ' ? 'selected' : '' ?> value="Guru Inklusi ">Guru Inklusi </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Tenaga Administrasi Sekolah' ? 'selected' : '' ?> value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Pendamping ' ? 'selected' : '' ?> value="Guru Pendamping ">Guru Pendamping </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Magang ' ? 'selected' : '' ?> value="Guru Magang ">Guru Magang </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru TIK ' ? 'selected' : '' ?> value="Guru TIK ">Guru TIK </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Kepala Sekolah ' ? 'selected' : '' ?> value="Kepala Sekolah ">Kepala Sekolah </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Laboran ' ? 'selected' : '' ?> value="Laboran ">Laboran </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Pustakawan ' ? 'selected' : '' ?> value="Pustakawan ">Pustakawan </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor SK Pengangkatan</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->sk_pengangkatan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT Pengangkatan</label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tmt_pengangkatan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Lembaga Pengangkatan</label>
                                                                                    <select class="form-control" readonly id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Pusat' ? 'selected' : '' ?> value="Pemerintah Pusat">Pemerintah Pusat</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Provinsi' ? 'selected' : '' ?> value="Pemerintah Provinsi">Pemerintah Provinsi</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Kab/Kota' ? 'selected' : '' ?> value="Pemerintah Kab/Kota">Pemerintah Kab/Kota</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Ketua yaysan' ? 'selected' : '' ?> value="Ketua yaysan">Ketua yaysan</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Kepala Sekolah' ? 'selected' : '' ?> value="Kepala Sekolah">Kepala Sekolah</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Komite Sekolah' ? 'selected' : '' ?> value="Komite Sekolah">Komite Sekolah</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_penugasan' ? ' active show' : ''; ?>" id="data_penugasan" role="tabpanel">
                                                                    <form action="<?= base_url('wali_kelas/profile/save_penugasan/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Surat Tugas</label>
                                                                                    <input type="number" class="form-control" readonly value="<?= $ptk->nomr_surat_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Surat Tugas</label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tanggal_surat_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT Tugas</label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tmt_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Sekolah Induk</label>
                                                                                    <select class="form-control" readonly id="status_sekolah_induk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_sekolah_induk == 'Ya' ? 'Ya' : '' ?> value="Ya">Ya</option>
                                                                                        <option <?= $ptk->status_sekolah_induk == 'Tidak' ? 'Tidak' : '' ?> value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'riwayat_sertifikasi' ? ' active show' : ''; ?>" id="riwayat_sertifikasi" role="tabpanel">
                                                                    <div class="table-responsive">
                                                                        <table id="myTable" class="table table-hover table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle">Jenis Sertifikasi</th>
                                                                                    <th class="text-midle">Nomor Sertifikasi</th>
                                                                                    <th class="text-midle">Tahun Sertifikasi</th>
                                                                                    <th class="text-midle">Bidang Studi</th>
                                                                                    <th class="text-midle">NRG</th>
                                                                                    <th class="text-midle">Nomor Peserta</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($riwayat_sertifikasi as $no => $rs) : ?>
                                                                                    <tr>
                                                                                        <form action="" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="jenis_sertifikasi" value="<?= $rs->jenis_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nomor_sertifikasi" value="<?= $rs->nomor_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="thn_sertifikasi" value="<?= $rs->thn_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="bidang_studi_sertifikasi" value="<?= $rs->bidang_studi_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nrg" value="<?= $rs->nrg ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nomor_peserta" value="<?= $rs->nomor_peserta ?>"></td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'riwayat_pendidikan' ? ' active show' : ''; ?>" id="riwayat_pendidikan" role="tabpanel">
                                                                    <div class="m-2">
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                                            Tambah Riwayat Pendidikan
                                                                        </button>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table id="myTable2" class="table table-hover table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle" style="width: 30%;">Bidang Studi</th>
                                                                                    <th class="text-midle">Jenjang Pendidikan</th>
                                                                                    <th class="text-midle">Gelar Akademik</th>
                                                                                    <th class="text-midle">Satuan Pendidikan</th>
                                                                                    <th class="text-midle">Tahun Masuk</th>
                                                                                    <th class="text-midle">Tahun Lulus</th>
                                                                                    <th class="text-midle">NIM</th>
                                                                                    <th class="text-midle">Mata Kuliah</th>
                                                                                    <th class="text-midle">Semester</th>
                                                                                    <th class="text-midle">IPK</th>
                                                                                    <th class="text-midle">Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($riwayat_pendidikan as $no => $rp) : ?>
                                                                                    <tr>
                                                                                        <form action="" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="bidang_studi" value="<?= $rp->bidang_studi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="jenjang_pendidikan" value="<?= $rp->jenjang_pendidikan ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="gelar_akademik" value="<?= $rp->gelar_akademik ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="satuan_pendidikan" value="<?= $rp->satuan_pendidikan ?>"></td>
                                                                                            <td><input type="number" min="1900" max="2099" step="1" class="form-control form-control-sm" name="tahun_masuk" value="<?= $rp->tahun_masuk ?>"></td>
                                                                                            <td><input type="number" min="1900" max="2099" step="1" class="form-control form-control-sm" name="tahun_lulus" value="<?= $rp->tahun_lulus ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nim" value="<?= $rp->nim ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="mata_kuliah" value="<?= $rp->mata_kuliah ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="semester" value="<?= $rp->semester ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="ipk" value="<?= $rp->ipk ?>"></td>
                                                                                            <td style="width: 15%;">
                                                                                                <button type="submit" class="btn btn-success btn-small"><i class="fas fa-save"></i> Simpan</button>
                                                                                                <a href="<?= base_url('admin/ptk/delete_rp/' . $rp->id) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                                                            </td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'tugas_tambahan' ? ' active show' : ''; ?>" id="tugas_tambahan" role="tabpanel">
                                                                    <div class="table-responsive">
                                                                        <table id="myTable3" class="table table-hover table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle">Jabatan PTK</th>
                                                                                    <th class="text-midle">Nomor SK</th>
                                                                                    <th class="text-midle">TMT Tugas Tambahan</th>
                                                                                    <th class="text-midle">TST Tugas Tambahan</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($tugas_tambahan as $no => $tt) : ?>
                                                                                    <tr>
                                                                                        <form action="" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="jabatan_ptk" value="<?= $tt->jabatan_ptk ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nomorsk_tugastambahan" value="<?= $tt->nomorsk_tugastambahan ?>"></td>
                                                                                            <td><input type="date" class="form-control form-control-sm" name="tmt_tugas_tambahan" value="<?= $tt->tmt_tugas_tambahan ?>"></td>
                                                                                            <td><input type="date" class="form-control form-control-sm" name="tst_tugas_tambahan" value="<?= $tt->tst_tugas_tambahan ?>"></td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_inpasing' ? ' active show' : ''; ?>" id="data_inpasing" role="tabpanel">
                                                                    <form action="" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pangkat Golongan</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->pangkat_golongan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor SK Inpasing</label>
                                                                                    <input type="number" class="form-control" readonly value="<?= $ptk->no_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal SK Inpasing</label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tgl_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT SK Inpasing</label>
                                                                                    <input type="date" class="form-control" readonly value="<?= $ptk->tmt_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Angka Kredit</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->angka_kredit ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Masa Kerja Tahun</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->masa_kerja_tahun ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Masa Kerja Bulan</label>
                                                                                    <input type="text" class="form-control" readonly value="<?= $ptk->masa_kerja_bulan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <!-- <div id="styleSelector"> </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Modal Riwayat pendidikan -->
                    <div class="modal fade bd-example-modal-lg " id="riwayat_pendidikan_modal" tabindex="-1" role="dialog" aria-labelledby="riwayat_pendidikan_modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="riwayat_pendidikan_modalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('wali_kelas/profile/save_rp/' . $ptk->id) ?>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Bidang Studi</label>
                                                <input type="text" class="form-control" name="bidang_studi">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Jenjang Pendidikan</label>
                                                <input type="text" class="form-control" name="jenjang_pendidikan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gelar Akademik</label>
                                                <input type="text" class="form-control" name="gelar_akademik">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Satuan Pendidikan</label>
                                                <input type="text" class="form-control" name="satuan_pendidikan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tahun Masuk</label>
                                                <input type="number" min="1900" max="2099" step="1" class="form-control" name="tahun_masuk">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tahun Lulus</label>
                                                <input type="number" min="1900" max="2099" step="1" class="form-control" name="tahun_lulus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">NIM</label>
                                                <input type="text" class="form-control" name="nim">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Mata Kuliah</label>
                                                <input type="text" class="form-control" name="mata_kuliah">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Semester</label>
                                                <input type="text" class="form-control" name="semester">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">IPK</label>
                                                <input type="text" class="form-control" name="ipk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Upload Gambar -->
                    <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modalUploadLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Crop image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <!--  default image where we will set the src via jquery-->
                                                <img class="cropper" id="foto">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary" id="crop">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    <script src="https://fengyuanchen.github.io/cropperjs/js/cropper.js" type="text/javascript"></script>

                    <script>
                        var bs_modal = $('#modalUpload');
                        var foto = document.getElementById('foto');
                        var cropper, reader, file;


                        $("body").on("change", ".foto", function(e) {
                            var files = e.target.files;
                            var done = function(url) {
                                foto.src = url;
                                bs_modal.modal('show');
                            };


                            if (files && files.length > 0) {
                                file = files[0];

                                if (URL) {
                                    done(URL.createObjectURL(file));
                                } else if (FileReader) {
                                    reader = new FileReader();
                                    reader.onload = function(e) {
                                        done(reader.result);
                                    };
                                    reader.readAsDataURL(file);
                                }
                            }
                        });

                        bs_modal.on('shown.bs.modal', function() {
                            cropper = new Cropper(foto, {
                                aspectRatio: 1,
                                viewMode: 3,
                                preview: '.preview'
                            });
                        }).on('hidden.bs.modal', function() {
                            cropper.destroy();
                            cropper = null;
                        });

                        $("#crop").click(function() {
                            canvas = cropper.getCroppedCanvas({
                                width: 500,
                                height: 500,
                            });
                            canv = cropper.getCroppedCanvas();

                            canvas.toBlob(function(blob) {
                                url = URL.createObjectURL(blob);
                                var reader = new FileReader();
                                reader.readAsDataURL(blob);
                                reader.onloadend = function() {
                                    var base64data = reader.result;

                                    $.ajax({
                                        type: "POST",
                                        dataType: "json",
                                        url: "<?= base_url('wali_kelas/profile/save_foto/' . $ptk->id) ?>",
                                        data: {
                                            foto: base64data,
                                            nama: "<?= $ptk->nama_ptk ?>",
                                            gambar: "<?= $ptk->foto ?>"
                                        },
                                        success: function(data) {
                                            bs_modal.modal('hide');
                                            location.reload();
                                        }
                                    });
                                };
                            });
                        });
                    </script>