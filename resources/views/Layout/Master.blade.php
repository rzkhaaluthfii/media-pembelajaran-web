<!DOTYPE HTML>
<html>
	<head>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<audio controls autoplay hidden="hidden" loop>
		<source src="{{'Template/template'}}/back.mp3" type="audio/mpeg" >
		
	</audio>
		<title>BBM</title>
		<script type="text/javascript" src="{{'Template/template'}}/jquery-1.11.3.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('a.closeC').click(function(eve){
					eve.preventDefault();
					$(this).parents('div.popupC').fadeOut('slow');
				});
			});
		</script>
		<link rel="stylesheet" type="text/css" href="{{'Template/template'}}/style.css" />
	</head>
	<body>
		<div id="countainer" style="background-image:url({{'Template/template'}}/1.jpg); width:100%; height: 100%; background-size: cover;">
			<!--ini logo-->
			<!-- <img src="{{'Template/template'}}/logo.png" class="logonya" width="250px"> -->
			
			<!--ANIMASI AWAN-->
				<div class="aw no1"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no2"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no3"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no4"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no5"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no1"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no2"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no3"><img src="{{'Template/template'}}/awan2.png" /></div>
				<div class="aw no4"><img src="{{'Template/template'}}/awan2.png" /></div>
				
			<div id="menu">
				<div id="navigasi">
					<ul>
						<!-- <li><a href="{{'Template/template'}}/tutorial/tutorial.html">Video Tutorial</a></li> -->
						<li><a href="{{ route('huruf.index') }}">Belajar Huruf</a></li>
						<br>
						<li><a href="{{ route('angka.index') }}">Belajar Angka</a></li>
						<br>
						<li><a href="{{	route('warna.index') }}">Belajar Warna</a></li>
						<br>
						<li><a href="{{ route('hewan.index') }}">Belajar Suara Hewan</a></li>
						<br>
						<!--<li><a href="{{'Template/template'}}/about/indexa.html">Tentang Kami</a></li> -->
						<li><a href="#popup">Berikan penilaian</a></li>
					</ul>
				</div>
			</div>
                

		<!--popup Untuk Cauntion..............................................................................-->
	<div class="popupC">
		<div id="boxC">
			<a class="closeC" href="#"><h5 style="border:1px solid black;background:black;color:white;">Close</h5></a>
			<h1 style="color:red;text-align:center;">MOHON PERHATIAN..!!</h1>
              <hr/><br/>
			<h4>Aplikasi ini ditujukan untuk anak usia dini namun dengan bimbingan dari Orang Tua.<br/>  
				Sehingga Orang Tua dapat membimbing kepada anaknya yang sedang berada di tahap mengenal.
				<br/><center><img src="{{'Template/template'}}/berita-kasus-penyimpangan-oleh-remaja-meningkat-pengawasan-anak-harus-ditingkatkan-3562_a.jpg" width="200px" style="border-radius:10px;border:2px solid white;"/></center><hr/></h4><br/>
			<h3 style="color:blue;text-align:center;">UNTUK PERHATIANNYA KAMI UCAPKAN TERIMAKASIH</h3>
		</div>		
	</div>
			
			<!--popup Untuk Penilaian..............................................................................-->
		<div id="popup">
           <div class="window">
               <a href="#" class="close-button" title="Close">X</a>
               <h3>Mohon Berikan Penilaian Anda</h3>
               <hr/>
			   <iframe src="https://docs.google.com/forms/d/1_0FbT-MzYvankOrnrqWmv5Smo9aQmD4Cch2KtuAQBCA/viewform?embedded=true" width="760" height="450" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
				<hr/>
			</div>
		</div>
			
			
		</div>
	</body>
</html>