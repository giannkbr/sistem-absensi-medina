
<div class="row">

	<div class="col-sm-12 col-xl-12">
		<!-- Map card -->
		<div class="card">
			<div class="card-header"> Notifikasi </h3>
			</div>
			<form method="post" action="<?= base_url('user/proses_absen'); ?>">
				<div class="card-body">
					<div class="form-group row">
						<div class="col-sm-10">
							<?php if ($waktu != 'dilarang') { ?>
								<h4>Hai, <?= $this->session->userdata('nama') ?> Anda hari ini belum melakukan absen <b><?= $waktu ?></b>.
									<input type="hidden" name="ket" id="ket" value="<?= $waktu ?>">
								<?php } else { ?>
									<h4>Hai, <?= $this->session->userdata('nama') ?> anda hari ini sudah melakukan absensi <b>Masuk</b> dan <b>Pulang</b></h4>
								<?php }  ?>
						</div>
					</div>
					
					
					
					
				</div>

			</form>
		</div>
		</section>
	</div>
</div>
