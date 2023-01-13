<!DOTYPE HTML>
<html>
	<head>
		<title>MARI BELAJAR</title>
		<script src='suara.js' type='text/javascript'> </script>
		<link rel="stylesheet" type="text/css" href="{{asset('Template/template/style.css')}}" />
	</head>
	<body>
		<div id="countainer" style="background-image:url({{(asset('Template/template/latar.png'))}}); width:100%; height: 100%; background-size: cover;">
		<div id="table">
		<table>
		<tr>
			<td onclick="merah.playclip()"><a href="#"><div class="warna" style="background-color:red"></div></a></td>
			<td style="width:10px"></td>
			<td onclick="biru.playclip()"><a href="#"><div  class="warna" style="background-color:blue"></div></a></td>
			<td style="width:10px"></td>
			<td onclick="hijau.playclip()"><a href="#"><div class="warna" style="background-color:green"></div></a></td>
			<td style="width:10px"></td>
			<td onclick="oranye.playclip()"><a href="#"><div class="warna" style="background-color:orange"></div></a></td>
			
		</tr>
		<tr>
			<td class="warna1">MERAH</td>
			<td style="width:10px"></td>
			<td class="warna1">BIRU</td>
			<td style="width:10px"></td>
			<td class="warna1">HIJAU</td>
			<td style="width:10px"></td>
			<td class="warna1">ORANYE</td>
			
		</tr>
		<tr>
			<td style="height:10px"></td>
		</tr>
		<tr>
			<td onclick="hitam.playclip()"><a href="#"><div class="warna" style="background-color:black"></div></a></td>
			<td></td>
			<td onclick="coklat.playclip()"><a href="#"><div class="warna" style="background-color:brown"></div></a></td>
			<td></td>
			<td onclick="kuning.playclip()"><a href="#"><div class="warna" style="background-color:yellow"></div></a></td>
			<td></td>
			<td onclick="merahmuda.playclip()"><a href="#"><div class="warna" style="background-color:pink"></div></a></td>
		</tr>
		<tr>
			<td class="warna1">HITAM</td>
			<td></td>
			<td class="warna1">COKLAT</td>
			<td></td>
			<td class="warna1">KUNING</td>
			<td></td>
			<td class="warna1">MERAH MUDA</td>
			
		</tr>
		<tr>
			<td style="height:10px"></td>
		</tr>
		<tr>
			<td onclick="putih.playclip()"><a href="#"><div  class="warna" style="background-color:white"></div></a></td>
			<td></td>
			<td onclick="ungu.playclip()"><a href="#"><div class="warna" style="background-color:purple"></div></a></td>
			<td></td>
			<td onclick="abu.playclip()"><a href="#"><div class="warna" style="background-color:gray"></div></a></td>
			<td></td>
			<td onclick="aqua.playclip()"><a href="#"><div class="warna" style="background-color:aqua"></div></a></td>
			<td></td>
		</tr>
		<tr>
			<td class="warna1">PUTIH</td>
			<td></td>
			<td class="warna1">UNGU</td>
			<td></td>
			<td class="warna1">ABU-ABU</td>
			<td></td>
			<td class="warna1">AQUA</td>
			<td></td>
		</tr>
	</table>
		</div>
		<div style="float:left;margin-top:-40px;margin-left:150px;">
			<div id="navigasi1">
					<ul>
						<li><a href="{{ route('game.index') }}"><< KEMBALI</a></li>
					</ul>
				</div>
		</div>
		</div>

	<script type="text/javascript">
		function createsoundbite(e){var t=document.createElement("audio");if(t.canPlayType){for(var n=0;n<arguments.length;n++){var r=document.createElement("source");r.setAttribute("src",arguments[n]);if(arguments[n].match(/\.(\w+)$/i))r.setAttribute("type",html5_audiotypes[RegExp.$1]);t.appendChild(r)}t.load();t.playclip=function(){t.pause();t.currentTime=0;t.play()};return t}else{return{playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}}}var html5_audiotypes={mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"};
			var mouseoversound=createsoundbite("suara/A.mp3");
			var biru=createsoundbite("{{ URL::asset('Template/template/warna/suara/biru.mp3') }}");
			var coklat=createsoundbite("{{ URL::asset('Template/template/warna/suara/coklat.mp3') }}");
			var hijau=createsoundbite("{{ URL::asset('Template/template/warna/suara/hijau.mp3') }}");
			var hitam=createsoundbite("{{ URL::asset('Template/template/warna/suara/hitam.mp3') }}");
			var kuning=createsoundbite("{{ URL::asset('Template/template/warna/suara/kuning.mp3') }}");
			var merah=createsoundbite("{{ URL::asset('Template/template/warna/suara/merah.mp3') }}");
			var merahmuda=createsoundbite("{{ URL::asset('Template/template/warna/suara/merahMuda.mp3') }}");
			var oranye=createsoundbite("{{ URL::asset('Template/template/warna/suara/oranye.mp3') }}");
			var putih=createsoundbite("{{ URL::asset('Template/template/warna/suara/putih.mp3') }}");
			var ungu=createsoundbite("{{ URL::asset('Template/template/warna/suara/ungu.mp3') }}");
			var abu=createsoundbite("{{ URL::asset('Template/template/warna/suara/abu.mp3') }}");
			var aqua=createsoundbite("{{ URL::asset('Template/template/warna/suara/aqua.mp3') }}");
	</script>

	</body>
</html>