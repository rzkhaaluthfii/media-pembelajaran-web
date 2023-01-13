<!DOTYPE HTML>
<html>
	<head>
		<title>MARI BELAJAR</title>
		<script src='suara.js' type='text/javascript'> </script>
		<link rel="stylesheet" type="text/css" href="{{asset('Template/template/style.css')}}" />
	</head>
	<body>
		<div id="countainer" style="background-image:url( {{asset('Template/template//latar.png') }} ); width:100%; height: 100%; background-size: cover;">
		<div id="table">
		<table>
		<tr>
			<td class="war" onclick="ayam.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/ayam.png')}}" height="150px" /></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="bebek.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/bekbek.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="burung.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/burung.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="kambing.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/kambng.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>

		</tr>
		<tr>
			<td class="warna1">AYAM</td>
			<td></td>
			<td class="warna1">BEBEK</td>
			<td></td>
			<td class="warna1">BURUNG</td>
			<td></td>
			<td class="warna1">KAMBING</td>
			
		</tr>
		<tr>
			<td style="height:10px"></td>
		</tr>
		<tr>
			<td class="war" onclick="kucing.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/kucing.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="kuda.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/kuda.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="anjing.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/njing.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
			<td class="war" onclick="sapi.playclip()"><a href="#"><img src="{{asset('Template/template/hewan/gambar/sapi.png')}}" height="150px"/></a></td>
			<td style="width:5px"></td>
		</tr>
		<tr>
			<td class="warna1">KUCING</td>
			<td></td>
			<td class="warna1">KUDA</td>
			<td></td>
			<td class="warna1">ANJING</td>
			<td></td>
			<td class="warna1">SAPI</td>
			
		</tr>
		
	</table>
		</div>
		<div style="float:left;margin-top:100px;margin-left:150px;">
			<div id="navigasi1">
					<ul>
						<li><a href="{{route('game.index')}}"><< KEMBALI</a></li>
					</ul>
				</div>
		</div>
		</div>

		<script type="text/javascript">
		function createsoundbite(e){var t=document.createElement("audio");if(t.canPlayType){for(var n=0;n<arguments.length;n++){var r=document.createElement("source");r.setAttribute("src",arguments[n]);if(arguments[n].match(/\.(\w+)$/i))r.setAttribute("type",html5_audiotypes[RegExp.$1]);t.appendChild(r)}t.load();t.playclip=function(){t.pause();t.currentTime=0;t.play()};return t}else{return{playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}}}var html5_audiotypes={wav:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"};

				var anjing=createsoundbite("{{ URL::asset('Template/template/hewan/suara/anjeeng.wav')}}");
				var ayam=createsoundbite("{{ URL::asset('Template/template/hewan/suara/ayam.wav')}}");
				var bebek=createsoundbite("{{ URL::asset('Template/template/hewan/suara/bebek.wav')}}");
				var burung=createsoundbite("{{ URL::asset('Template/template/hewan/suara/burung.wav')}}");
				var kucing=createsoundbite("{{ URL::asset('Template/template/hewan/suara/cat.wav')}}");
				var kambing=createsoundbite("{{ URL::asset('Template/template/hewan/suara/kambing.wav')}}");
				var kodok=createsoundbite("{{ URL::asset('Template/template/hewan/suara/kodok.wav') }}");
				var kuda=createsoundbite("{{ URL::asset('Template/template/hewan/suara/kuda.wav')}}");
				var sapi=createsoundbite("{{ URL::asset('Template/template/hewan/suara/sapi.wav')}}");
		</script>


	</body>
</html>