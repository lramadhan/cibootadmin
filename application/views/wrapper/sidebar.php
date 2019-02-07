        <div class="sidebar sidebar-dark bg-dark">
            <ul class="list-unstyled">
                <li <?php if ($this->uri->segment(1)=='dashboard' || $this->uri->segment(1)=='') { echo "class='active'";}?>><a href="<?=base_url(); ?>"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
<!-- aktif kelas -->
                <li <?php if ($this->uri->segment(1)=='masterBarang' || $this->uri->segment(1)=='masterPropertiBarang' || $this->uri->segment(1)=='masterPropertiPengguna' || $this->uri->segment(1)=='masterPengguna') { echo "class='active'";}?>>
                    <a href="#masterData" data-toggle="collapse">
                        <i class="fa fa-fw fa-list-ul"></i> Master Data
                    </a>
                    <ul id="masterData" class="list-styled collapse">
                        <li><a href="<?=base_url('masterPropertiPengguna'); ?>">Properti Pengguna</a></li>
                        <li><a href="<?=base_url('masterPengguna'); ?>">Pengguna</a></li>
                        <li><a href="<?=base_url('masterPropertiBarang'); ?>">Properti Barang</a></li>
                        <li><a href="<?=base_url('masterBarang'); ?>">Barang</a></li>
                    </ul>
                </li>

                <li <?php if ($this->uri->segment(1)=='kelolaSimpanBarang' || $this->uri->segment(1)=='kelolaPinjamBarang' || $this->uri->segment(1)=='kelolaMutasiBarang' || $this->uri->segment(1)=='kelolaPerawatanBarang' || $this->uri->segment(1)=='kelolaHapusBarang') { echo "class='active'";}?>><a href="#transaksi" data-toggle="collapse"><i class="fa fa-fw fa-shopping-cart"></i> Kelola Barang</a>
                    <ul id="transaksi" class="list-unstyled collapse">
                        <li><a href="<?=base_url('kelolaSimpanBarang'); ?>" title="Penyimpanan Barang">Tambah Stok Barang</a></li>
                        <li><a href="<?=base_url('kelolaTransaksiBarang'); ?>" title="Transaksi Barang">Transaksi Barang</a></li>
                        <li><a href="<?=base_url('kelolaMutasiBarang'); ?>" title="Peminjaman Barang">Mutasi Barang</a></li>
                        <li><a href="<?=base_url('kelolaPerawatanBarang'); ?>" title="Peminjaman Barang">Perawatan Barang</a></li>
                        <li><a href="<?=base_url('kelolaHapusBarang'); ?>" title="Penghapusan Barang">Penghapusan Barang</a></li>
                    </ul>
                </li>

                <li <?php if ($this->uri->segment(1)=='laporanStokBarang' || $this->uri->segment(1)=='laporanBarangMasuk' || $this->uri->segment(1)=='laporanBarangKeluar' || $this->uri->segment(1)=='laporanPeminjaman' || $this->uri->segment(1)=='laporanPerawatan' || $this->uri->segment(1)=='laporanPengguna') { echo "class='active'";}?>><a href="#laporan" data-toggle="collapse"><i class="fa fa-fw fa-chart-area"></i> Laporan</a>
                    <ul id="laporan" class="list-unstyled collapse">
                        <li><a href="<?=base_url('laporanStokBarang'); ?>">Stok Barang</a></li>
                        <li><a href="<?=base_url('laporanTransaksi'); ?>">Laporan Transaksi</a></li>
                        <li><a href="<?=base_url('laporanPerawatan'); ?>">Perawatan & Kerusakan</a></li>
                        <li><a href="<?=base_url('laporanPengguna'); ?>">Pengguna</a></li>
                    </ul>
                </li>

                <li <?php if ($this->uri->segment(1)=='pengaturanGudang' || $this->uri->segment(1)=='pengaturanHakAkses' || $this->uri->segment(1)=='pengaturanBackupDatabase' || $this->uri->segment(1)=='pengaturanRestoreDatabase') { echo "class='active'";}?>>
                    <a href="#pengaturan" data-toggle="collapse"><i class="fa fa-fw fa-cog"></i> Pengaturan</a>
                    <ul id="pengaturan" class="list-unstyled collapse">
                        <li><a href="<?=base_url('pengaturanGudang'); ?>">Gudang</a></li>
                        <li><a href="<?=base_url('pengaturanHakAkses'); ?>">Hak Akses</a></li>
                        <li><a href="<?=base_url('pengaturanDatabase'); ?>">Pengaturan Basis Data</a></li>
                    </ul>
                </li>
            </ul>
        </div>