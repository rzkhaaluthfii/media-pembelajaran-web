<!DOTYPE HTML>
<html>
	<head>
	<script src='{{'file'}}/suara.js' type='text/javascript'> </script>
		<title>MARI BELAJAR</title>
		<link rel="stylesheet" type="text/css" href="{{'Template/template/style.css'}}" />
	</head>
	<body>
		<div id="countainer" style="background-image:url( {{asset('Template/template//latar.png') }} ); width:100%; height: 100%; background-size: cover;">
		<div id="table">
		<table>
		<tr>
			<td class="awan" onclick="a.playclip()"><a href="#">A</a></td>
			<td></td>
			<td class="awan" onclick="b.playclip()"><a href="#">B</a></td>
			<td></td>
			<td class="awan" onclick="c.playclip()"><a href="#">C</a></td>
			<td></td>
			<td class="awan" onclick="d.playclip()"><a href="#">D</a></td>
			<td></td>
			<td class="awan" onclick="e.playclip()"><a href="#">E</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="awan" onclick="f.playclip()"><a href="#">F</a></td>
			<td></td>
			<td class="awan" onclick="g.playclip()"><a href="#">G</a></td>
			<td></td>
			<td class="awan" onclick="h.playclip()"><a href="#">H</a></td>
			<td></td>
			<td class="awan" onclick="i.playclip()"><a href="#">I</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td class="awan" onclick="j.playclip()"><a href="#">J</a></td>
			<td></td>
			<td class="awan" onclick="k.playclip()"><a href="#">K</a></td>
			<td></td>
			<td class="awan" onclick="l.playclip()"><a href="#">L</a></td>
			<td></td>
			<td class="awan" onclick="m.playclip()"><a href="#">M</a></td>
			<td></td>
			<td class="awan" onclick="n.playclip()"><a href="#">N</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="awan" onclick="o.playclip()"><a href="#">O</a></td>
			<td></td>
			<td class="awan" onclick="p.playclip()"><a href="#">P</a></td>
			<td></td>
			<td class="awan" onclick="q.playclip()"><a href="#">Q</a></td>
			<td></td>
			<td class="awan" onclick="r.playclip()"><a href="#">R</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td class="awan" onclick="s.playclip()"><a href="#">S</a></td>
			<td></td>
			<td class="awan" onclick="t.playclip()"><a href="#">T</a></td>
			<td></td>
			<td class="awan" onclick="u.playclip()"><a href="#">U</a></td>
			<td></td>
			<td class="awan" onclick="v.playclip()"><a href="#">V</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="awan" onclick="w.playclip()"><a href="#">W</a></td>
			<td></td>
			<td class="awan" onclick="x.playclip()"><a href="#">X</a></td>
			<td></td>
			<td class="awan" onclick="y.playclip()"><a href="#">Y</a></td>
			<td></td>
			<td class="awan" onclick="z.playclip()"><a href="#">Z</a></td>
		</tr>
	</table>
		</div>
		<div style="float:left;margin-top:10px;margin-left:150px;">
			<div id="navigasi1">
					<ul>
						<li><a href="{{route('game.index')}}"><< KEMBALI</a></li>
					</ul>
				</div>
		</div>
		</div>

	<script>
function createsoundbite(e){var t=document.createElement("audio");if(t.canPlayType){for(var n=0;n<arguments.length;n++){var r=document.createElement("source");r.setAttribute("src",arguments[n]);if(arguments[n].match(/\.(\w+)$/i))r.setAttribute("type",html5_audiotypes[RegExp.$1]);t.appendChild(r)}t.load();t.playclip=function(){t.pause();t.currentTime=0;t.play()};return t}else{return{playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}}}var html5_audiotypes={mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"};
	var mouseoversound=createsoundbite("suara/A.mp3");
	var a=createsoundbite("{{ URL::asset('Template/template/huruf/suara/A.mp3') }}");
	var b=createsoundbite("{{ URL::asset('Template/template/huruf/suara/B.mp3') }}");
	var c=createsoundbite("{{ URL::asset('Template/template/huruf/suara/C.mp3') }}");
	var d=createsoundbite("{{ URL::asset('Template/template/huruf/suara/D.mp3') }}");
	var e=createsoundbite("{{ URL::asset('Template/template/huruf/suara/E.mp3') }}");
	var f=createsoundbite("{{ URL::asset('Template/template/huruf/suara/F.mp3') }}");
	var g=createsoundbite("{{ URL::asset('Template/template/huruf/suara/G.mp3') }}");
	var h=createsoundbite("{{ URL::asset('Template/template/huruf/suara/H.mp3') }}");
	var i=createsoundbite("{{ URL::asset('Template/template/huruf/suara/I.mp3') }}");
	var j=createsoundbite("{{ URL::asset('Template/template/huruf/suara/J.mp3') }}");
	var k=createsoundbite("{{ URL::asset('Template/template/huruf/suara/K.mp3') }}");
	var l=createsoundbite("{{ URL::asset('Template/template/huruf/suara/L.mp3') }}");
	var m=createsoundbite("{{ URL::asset('Template/template/huruf/suara/M.mp3') }}");
	var n=createsoundbite("{{ URL::asset('Template/template/huruf/suara/N.mp3') }}");
	var o=createsoundbite("{{ URL::asset('Template/template/huruf/suara/O.mp3') }}");
	var p=createsoundbite("{{ URL::asset('Template/template/huruf/suara/P.mp3') }}");
	var q=createsoundbite("{{ URL::asset('Template/template/huruf/suara/Q.mp3') }}");
	var r=createsoundbite("{{ URL::asset('Template/template/huruf/suara/R.mp3') }}");
	var s=createsoundbite("{{ URL::asset('Template/template/huruf/suara/S.mp3') }}");
	var t=createsoundbite("{{ URL::asset('Template/template/huruf/suara/T.mp3') }}");
	var u=createsoundbite("{{ URL::asset('Template/template/huruf/suara/U.mp3') }}");
	var v=createsoundbite("{{ URL::asset('Template/template/huruf/suara/V.mp3') }}");
	var w=createsoundbite("{{ URL::asset('Template/template/huruf/suara/W.mp3') }}");
	var x=createsoundbite("{{ URL::asset('Template/template/huruf/suara/X.mp3') }}");
	var y=createsoundbite("{{ URL::asset('Template/template/huruf/suara/Y.mp3') }}");
	var z=createsoundbite("{{ URL::asset('Template/template/huruf/suara/Z.mp3') }}");
	</script>

	</body>
</html>