	<div class="navbar-custom">
		<div class="container-fluid">

			<div id="navigation">

				<!-- Navigation Menu-->
				<ul class="navigation-menu">

					<li class="has-submenu">
						<a href="<?= base_url('admin'); ?>"><i class="icon-accelerator"></i> Dashboard</a>
					</li>

					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Master Data <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('data-karyawan'); ?>">Data Karyawan</a></li>
									<li><a href="<?= base_url('data-jabatan'); ?>">Data Jabatan</a></li>
									<li><a href="<?= base_url('data-jam'); ?>">Data Jam</a></li>

								</ul>
							</li>
						</ul>
					</li>
					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Master Absensi <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('data-absensi'); ?>">Data Absensi</a></li>
									<li><a href="<?= base_url('rekap-absensi'); ?>">Rekap Absensi</a></li>
									<li><a href="<?= base_url('ambil-qr-code'); ?>">Ambil QR Code</a></li>
									<li><a href="<?= base_url('scan-qr-code'); ?>">Scan QR Code</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- <li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Laporan <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('rekap-absensi'); ?>">Data Absensi</a></li>
								</ul>
							</li>
						</ul>
					</li> -->
				</ul>
				<!-- End navigation menu -->
			</div>
			<!-- end #navigation -->
		</div>
		<!-- end container -->
	</div>
