<!--login modal-->
<div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Login Member</h5>
				<button type="button"class="close"data-dismiss="modal"aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?=base_url('member');?>"method="post">
				<div class="modal-body">
					<div class="form-grouprow">
						<label for="email"class="col-sm-2col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="text"class="form-control"id="email"name="email"placeholder="AlamatEmail">
						</div>
					</div>
					<div class="form-grouprow">
						<label for="inputPassword"class="col-sm-2col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password"class="form-control"id="password"name="password"placeholder="Password">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button"class="btnbtn-outline-secondary"data-dismiss="modal">Close</button>
					<button type="submit"class="btnbtn-outline-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--/login modal-->
<!--daftar modal-->
<div class="modal fade"tabindex="-1" id="daftarModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Daftar Anggota</h5>
				<button type="button"class="close"data-dismiss="modal"aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?=base_url('member/daftar');?>"method="post">
				<div class="modal-body">
					<div class="form-group"> 
						<input type="text"class="form-controlform-control-user"id="nama"name="nama"placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<input type="text"class="form-controlform-control-user"id="alamat"name="alamat"placeholder="Alamat Tempat Tinggal">
					</div>
					<div class="form-group">
						<input type="text"class="form-controlform-control-user"id="email"name="email"placeholder="Alamat Email">
					</div>
					<div class="form-group">
					<input type="password"class="form-controlform-control-user"id="password1"name="password1"placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password"class="form-controlform-control-user"id="password2"name="password2"placeholder="Ulangi Password">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button"class="btnbtn-outline-secondary"data-dismiss="modal">Close</button>
				<button type="submit"class="btnbtn-outline-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
</div>
<!--/end of Modal Daftar-->
<!--modal info-->
<div class="modalfade"tabindex="-1"id="modalinfo"role="dialog">
	<div class="modal-dialog"role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Informasi</h5>
				<button type="button"class="close"data-dismiss="modal"aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<span class="alertalert-messagealert-success">Waktu Pengambilan Buku 1x24 jam dari Booking!!!</span>
			</div>
			<div class="modal-footer">
			<a class="btnbtn-outline-info"href="<?=base_url();?>">Ok</a>
		</div>
	</div>
</div>
</div>
			<!--/modal info-->