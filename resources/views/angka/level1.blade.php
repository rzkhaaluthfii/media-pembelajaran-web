<!DOTYPE HTML>
<html>
	<head>
		<title>MARI BELAJAR</title>
		<script src="{{asset('suara.js')}}" type='text/javascript'> </script>
		<link rel="stylesheet" type="text/css" href="{{asset('Template/template/style.css')}}" />
	</head>
	<body>
		
		<div id="countainer" style="background-image:url({{asset('Template/template/latar.png')}}); width:100%; height: 100%; background-size: cover;">
		<div id="table">
		<table>
		<tr>
			<td class="awan" onclick="a.playclip()"><a href="#">1</a></td>
			<td></td>
			<td class="awan" onclick="b.playclip()"><a href="#">2</a></td>
			<td></td>
			<td class="awan" onclick="c.playclip()"><a href="#">3</a></td>
			<td></td>
			<td class="awan" onclick="d.playclip()"><a href="#">4</a></td>
			
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="awan" onclick="e.playclip()"><a href="#">5</a></td>
			<td></td>
			<td class="awan" onclick="f.playclip()"><a href="#">6</a></td>
			<td></td>
			<td class="awan" onclick="g.playclip()"><a href="#">7</a></td>
			<td></td>
			<td class="awan" onclick="h.playclip()"><a href="#">8</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td class="awan" onclick="i.playclip()"><a href="#">9</a></td>
			<td></td>
			<td class="awan" onclick="j.playclip()"><a href="#">10</a></td>
			<td></td>
			<td class="awan" onclick="k.playclip()"><a href="#">11</a></td>
			<td></td>
			<td class="awan" onclick="l.playclip()"><a href="#">12</a></td>
			
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="awan" onclick="m.playclip()"><a href="#">13</a></td>
			<td></td>
			<td class="awan" onclick="n.playclip()"><a href="#">14</a></td>
			<td></td>
			<td class="awan" onclick="o.playclip()"><a href="#">15</a></td>
			<td></td>
			<td class="awan" onclick="p.playclip()"><a href="#">16</a></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td class="awan" onclick="q.playclip()"><a href="#">17</a></td>
			<td></td>
			<td class="awan" onclick="r.playclip()"><a href="#">18</a></td>
			<td></td>
			<td class="awan" onclick="s.playclip()"><a href="#">19</a></td>
			<td></td>
			<td class="awan" onclick="t.playclip()"><a href="#">20</a></td>
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
	</body>

	<script type="text/javascript">
		function createsoundbite(e){var t=document.createElement("audio");if(t.canPlayType){for(var n=0;n<arguments.length;n++){var r=document.createElement("source");r.setAttribute("src",arguments[n]);if(arguments[n].match(/\.(\w+)$/i))r.setAttribute("type",html5_audiotypes[RegExp.$1]);t.appendChild(r)}t.load();t.playclip=function(){t.pause();t.currentTime=0;t.play()};return t}else{return{playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}}}var html5_audiotypes={mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"};
			var mouseoversound=createsoundbite("{{ URL::asset('Template/template/angka/suara/A.mp3')}}");
			var a=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka1.mp3') }}");
			var b=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka2.mp3') }}");
			var c=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka3.mp3') }}");
			var d=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka4.mp3') }}");
			var e=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka5.mp3') }}");
			var f=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka6.mp3') }}");
			var g=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka7.mp3') }}");
			var h=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka8.mp3') }}");
			var i=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka9.mp3') }}");
			var j=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka10.mp3') }}");
			var k=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka11.mp3') }}");
			var l=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka12.mp3') }}");
			var m=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka13.mp3') }}");
			var n=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka14.mp3') }}");
			var o=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka15.mp3') }}");
			var p=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka16.mp3') }}");
			var q=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka17.mp3') }}");
			var r=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka18.mp3') }}");
			var s=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka19.mp3') }}");
			var t=createsoundbite("{{ URL::asset('Template/template/angka/suara/angka20.mp3') }}");
		</script>


</html>