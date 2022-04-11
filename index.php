<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-wrap">
			<div class="login-html">
				<div class="img" align="center">
					<img src="css/img/logo.png" width="120" height="120" />
				</div>
					</style>
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
					<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
					<div class="login-form">
						<div class="sign-in-htm">

						<!-- Rolling back -->
						<?php
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
								echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
							}else if($_GET['pesan'] == "logout"){
								echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
							}else if($_GET['pesan'] == "belum_login"){
								echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
							}
						}
						?>	
							
							<form method="post" action="prosessignin.php">
								<div class="group">
									<label for="user" class="label">NIK</label>
									<input id="user" type="text" class="input" placeholder="Masuk NIK" name="nik">
								</div>
								<div class="group">
									<label for="namaanda" class="label">Nama</label>
									<input id="namaanda" type="text" class="input" placeholder="Masuk Nama" name="nama">
								</div>
								<div class="group">
									<input type="submit" class="button" value="Sign In">
								</div>
								<div class="hr"></div>
								<div class="foot-lnk">
									<p>Copyright &copy 2022 Dini Syahfitri</p>
								</div>
							</form>
						</div>

						<div class="sign-up-htm">
							<form method="post" action="prosessignup.php">
								<div class="group">
									<label for="user" class="label">NIK</label>
									<input id="user" type="text" class="input" name="nik" placeholder="Masukan NIK Anda">
								</div>
								<div class="group">
									<label for="namaanda" class="label">Nama</label>
									<input id="namaanda" type="text" class="input" name="nama" placeholder="Masukan Nama Anda">
								</div>
								<div class="group">
									<label for="usernameanda" class="label">Username</label>
									<input id="usernameanda" type="text" class="input" name="username" placeholder="Masukan Username Anda">
								</div>
								<div class="group">
									<label for="passwordanda" class="label">Password</label>
									<input id="passwordanda" type="text" class="input" name="password" placeholder="Masukan Password Anda">
								</div>
								<div class="group">
									<input type="submit" class="button" value="Sign Up">
								</div>
								<div class="hr"></div>
								<div class="foot-lnk">
									<label for="tab-1">Already Member?</a></label>
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</body>
</html>