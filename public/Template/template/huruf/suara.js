function createsoundbite(e){var t=document.createElement("audio");if(t.canPlayType){for(var n=0;n<arguments.length;n++){var r=document.createElement("source");r.setAttribute("src",arguments[n]);if(arguments[n].match(/\.(\w+)$/i))r.setAttribute("type",html5_audiotypes[RegExp.$1]);t.appendChild(r)}t.load();t.playclip=function(){t.pause();t.currentTime=0;t.play()};return t}else{return{playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}}}var html5_audiotypes={mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"};
var mouseoversound=createsoundbite("suara/A.mp3");
var a=createsoundbite("suara/A.mp3");
var b=createsoundbite("suara/B.mp3");
var c=createsoundbite("suara/C.mp3");
var d=createsoundbite("suara/D.mp3");
var e=createsoundbite("suara/E.mp3");
var f=createsoundbite("suara/F.mp3");
var g=createsoundbite("suara/G.mp3");
var h=createsoundbite("suara/H.mp3");
var i=createsoundbite("suara/I.mp3");
var j=createsoundbite("suara/J.mp3");
var k=createsoundbite("suara/K.mp3");
var l=createsoundbite("suara/L.mp3");
var m=createsoundbite("suara/M.mp3");
var n=createsoundbite("suara/N.mp3");
var o=createsoundbite("suara/O.mp3");
var p=createsoundbite("suara/P.mp3");
var q=createsoundbite("suara/Q.mp3");
var r=createsoundbite("suara/R.mp3");
var s=createsoundbite("suara/S.mp3");
var t=createsoundbite("suara/T.mp3");
var u=createsoundbite("suara/U.mp3");
var v=createsoundbite("suara/V.mp3");
var w=createsoundbite("suara/W.mp3");
var x=createsoundbite("suara/X.mp3");
var y=createsoundbite("suara/Y.mp3");
var z=createsoundbite("suara/Z.mp3");