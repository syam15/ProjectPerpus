<?php
//memasukkan file config.php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN SMEDA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/pmg/jpg" href="icon.png">
</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,600,700,700i');
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400');

	body{
		font-family: 'Poppins', sans-serif;
		margin: 0px;
	}
	.slider{
		background: #67bef991;
	}
	section.slider{
		background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("perpus1.jpg") fixed;
		background-position: center;
		background-size: 100%;
		height: 50vh;
	}
	.font-slider{
		margin-top: 10%;
		text-align: center;
	}
	.judulsejarah{

		color: #3498db;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.paragraph{
		text-align: justify;
		border-left: 7px solid #3498db;
		padding-left: 30px;
	}
	.paragraph2{
		margin-top: 30%;
		text-align: justify;
		border-right: 7px solid #3498db;
		padding-right: 30px;
	}
	.komentest{
	    padding: 10px 0px;
	    border-top: 1px solid #ccc;
	    border-bottom: 1px solid #ccc;
	    font-family: poppins;
	    font-size: 11pt;
	    text-align: justify;
	}
	.mark{
		background: linear-gradient(to bottom right, #eaeaeab0, whitesmoke);
	    text-align: center;
	    padding: 20px;
	    box-shadow: 0px 4px #ccc;
	    border-radius: 11px;
	    margin: 50px 0px 0px 0px;
	    margin-bottom: 15px;
	}
	.sejarah{
		padding-top: 6%;
	}

	.informasi{
		background: #f9f9f9;
		padding-bottom: 15px;
	}
	.visi{
		padding: 20px;
	    background: #dcdcd8;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.misi{
		padding: 20px;
	    background: #fdf3e5;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}

	.kontak-informasi{
		padding: 20px;
	    background: #d6e4fc;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.top{
		margin-top: 5px;
		padding: 10px;
		background: #eee1b9;
	}
	.link{
		background: #4ca2e1;
		text-decoration: none;
		color: #ffffff;
	}
	.link2{
		background: #DDB538;
		text-decoration: none;
		color: white;
	}
	.link3{
		background: #e3875f;
		text-decoration: none;
		color: white;
	}
	.link4{
		background: #91d97b;
		text-decoration: none;
		color: white;
	}
	.link5{
		background: #06D8D3;
		text-decoration: none;
		color: white;
	}
	.link6{
		background: #CE95BD;
		text-decoration: none;
		color: white;
	}

	.footer{
		background: #333;
	    color: white;
	    text-align: center;
	    padding: 20px 0px;
	    margin-top: 30px;
	}

	.footer h6{
		margin: 0px;
	}
</style>
<body>
<?php 
include 'navbar.php';
?>
<section class="top">
	<marquee>SELAMAT DATANG DI PERPUSTAKAAN SMK SWADAYA TEMANGGUNG SELAMAT DATANG DI PERPUSTAKAAN SMK SWADAYA TEMANGGUNG SELAMAT DATANG DI PERPUSTAKAAN SMK SWADAYA TEMANGGUNG</marquee>
</section>

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="font-slider" style="color: #fff;">Perpustakaan<br> <span style="color: #1E90FF; font-weight: bold;">SMK SWADAYA TEMANGGUNG</span></h1>
			</div>
		</div>
	</div>
</section>

<section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
				<h5 class="judulsejarah">Sejarah</h5>
				<p class="paragraph">SMK Swadaya Temanggung berdiri pada 14 Juni 1984. Dulunya sebelum adanya SMK Swadaya Temanggung adalah SPG (Sekolah Pendidikan Guru) yang berdiri pada tahun 1976. Tetapi, karena kebijakan pemerintah atas pengurangan Sekolah Pendidikan Guru, maka sekolah SPG ditutup oleh pemerintah. Pada tahun 1984-1990, SMEA dan SMA Swadaya lahir untuk menggantikan SPG dikarenakan masih memiliki surat ijin dari pemerintah untuk mendirikan sekolah. Pada tahun 1998, nama SMEA diganti menjadi SMK Swadaya Temanggung. Alasan terbentuknya SMK Swadaya Temanggung adalah atas dasar memenuhi kebutuhan dan melayani masyarakat Temanggung yang membutuhkan sekolah kejuruan. Pendiri SMK Swadaya Temanggung adalah Bapak H. Bajuri dan kepala sekolah pertama pada saat itu adalah Bapak H. Muhasyim, S.Pd, dan Ibu H. Tri Hartati, BA. Memiliki jurusan awal yaitu: TU (Tata Usaha) pada tahun 1984, TB (Tata Buku), dan TN (Tata Niaga) pada tahun 1985. Alasan ditambahnya jurusan adalah menyesuaikan kemampuan & lahan yang ada dan tingginya permintaan & minat oleh masyarakat Temanggung.</p>
			</div>
			<div class="col text-center">
				<p class="paragraph2">Pada saat Angkatan pertama / pada tahun 1984 SMK Swadaya Temanggung dibuka dan memiliki 34 siswa, salah satu lulusannya adalah Bapak Subandi yang saat ini menjadi karyawan di sini karena memiliki prestasi yang memuaskan. Pada saat ini, SMK Swadaya Temanggung memiliki 5 jurusan yaitu: AKL (Akuntansi), BDP (Bisnis Daring dan Pemasaran), OTKP (Otomatisasi dan Tata Kelola Perkantoran), Kuliner, dan TKJ (Teknik Komputer dan Jaringan). Saat ini SMK Swadaya Temanggung memiliki 1549 siswa. Pengurus inti SMK Swadaya Temanggung adalah Bapak H. Muhasyim, S.Pd sebagai Pembina Yayasan, Bapak Drs H. Humam Sabroni, M.Si sebagai Ketua Yayasan, dan Ibu Hj. Tri Hartati, BA. Saat ini Kepala Sekolah SMK Swadaya Temanggung adalah Bapak H. Bambang Suwito Hadi, S.pd, M.Si.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>SMEDA</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Visi</h3>
					<div>
						<p>Terwujudnya Sekolah Menengah Kejuruan yang tamatanya beriman, bertaqwa, berkarakter, berbudaya, profesional, berwirausaha, serta memiliki jiwa nasionalisme yang kuat dan berwawasan lingkungan</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Misi</h3>
					<div>
						<p>
							<ol>
								<li>Mewujudkan tamatan yang berkarakter, berbudaya, beriman, dan bertaqwa kepada Tuhan Yang Maha Esa.</li>
								<li>Meningkatkan kompetensi peserta didik yang profesional, kreatif, inovatif.</li>
								<li>Menjadikan tamatan yang berwirausaha.</li>
								<li>Mendidik peserta didik memiliki jiwa nasionalisme dan berwawasan lingkungan.</li>
							</ol>
						</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="kontak-informasi">
					<h3>Kontak Informasi</h3>
					<div>
						<h6>No Telepon : (0293) 492338<br>Email : smkswadayatmg@gmail.com</h6>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>SMEDA</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Media Sosial</h3>
					<div>
						<a class="link" href=" http://www.smkswadayatmg.sch.id">Web SMEDA</a>
						<a class="link2" href=" smkswadayatmg84@gmail.com">E-Mail SMEDA</a>
						<a class="link3" href=" https://instagram.com/swadayahighschool">IG SMEDA</a>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Alamat</h3>
					<div>
						<p>
							<ol>
								<b>Jl. Gilingsari No. 2, Pacarsari, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56213</b><br>
							</ol>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<h6>Copyright &copy MUHAMMAD FAHRUN NASYIT</h6>
			</div>
		</div>
	</div>
</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>