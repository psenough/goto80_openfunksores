<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	        <!-- charset must remain utf-8 to be handled properly by Processing -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
	<script language="JavaScript">
	
	//var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
	
	var tracklist;
	var tracklistUrl;
	var ourtrack;
	var nexttrack;
	var nexttrackid;
	var ourimage;
	var nextimage;
	
	function load() {
		tracklist = new Array();
		tracklist[0] = "3kr";
  		tracklist[1] = "5pyhun73r 3l337 v3r";
 		tracklist[2] = "aaf";
  		tracklist[3] = "alias";
  		tracklist[4] = "audiorosputnick";
  		tracklist[5] = "bong-fogel";
  		tracklist[6] = "datagroove";
  		tracklist[7] = "deluxe-ecs";
  		tracklist[8] = "fonkyspenat";
  		tracklist[9] = "getdowndafunkme";
  		tracklist[10] = "influensa";
  		tracklist[11] = "klassfest";
  		tracklist[12] = "renonsdags-skit";
  		tracklist[13] = "square&enjoy";
  		tracklist[14] = "thismachinethinks";
  		tracklistUrl = new Array();
		tracklistUrl[0] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_3kr.ogg";
  		tracklistUrl[1] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_5pyhun73r_3l337_v3r.ogg";
 		tracklistUrl[2] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_aaf.ogg";
  		tracklistUrl[3] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_alias.ogg";
  		tracklistUrl[4] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_audiorosputnick.ogg";
  		tracklistUrl[5] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_bong-fogel.ogg";
  		tracklistUrl[6] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_datagroove.ogg";
  		tracklistUrl[7] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_deluxe_ecs.ogg";
  		tracklistUrl[8] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_fonky_spenat.ogg";
  		tracklistUrl[9] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_get_down_da_fonk_me.ogg";
  		tracklistUrl[10] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_influensa.ogg";
  		tracklistUrl[11] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_klassfest.ogg";
  		tracklistUrl[12] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_ren_onsdags-skit.ogg";
  		tracklistUrl[13] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_square_and_enjoy.ogg";
  		tracklistUrl[14] = "http://ia700408.us.archive.org/15/items/enrmp151_goto80_-_open_funk_sores/00_goto80_-_this_machine_thinks.ogg";
		nextimage = new Image();
		ourimage = new Image();
		preload();
	}
	
	function next() {
			//	document.getElementById("sound_element").innerHTML= "<embed src='"+tracklistUrl[nexttrack]+"' hidden=true autostart=true loop=true>";

		if (is_chrome) {
			document.getElementById('textMod').innerHTML = 'PortaMod lib is likely not to work on Chrome, so we\'re streaming ogg from archive.org instead<br /><br />';
			document.getElementById("sound_element").innerHTML= "<embed src='"+tracklistUrl[nexttrackid]+"' hidden=true autostart=true loop=true>";
			//document.getElementById('textMod').innerHTML = tracklistUrl[nexttrackid]+' '+nexttrack+'<br /><br />';
			ourimage.src = nextimage.src;
			ourtrack = nexttrack;
			document.getElementById("ourimage").src = ourimage.src;
			preload();
		} else {
			//clean
			document.getElementById("ourimage").src = "loading.png";
			document.getElementById("goto80_openfunksores_container").innerHTML = ''; //<object id="cleaner" type="application/x-java-applet" width="0" height="0"><param name="code" value="" /></object>';
			//prepare for load
			ourimage.src = nextimage.src;
			ourtrack = nexttrack;
			//timeout to dispose properly of openfunk
			setTimeout ( 'playsong()', "2000" );
		}
	}
	
	function playsong() {
		document.getElementById("goto80_openfunksores_container").innerHTML = '<object id="openfunk" classid="java:goto80_openfunksores.class" type="application/x-java-applet" archive="goto80_openfunksores.jar,PortaMod.jar,core.jar" width="0" height="0" standby="Loading Processing software..." ><param name="code" value="goto80_openfunksores" /><param name="archive" value="goto80_openfunksores.jar,PortaMod.jar,core.jar" /><param name="mayscript" value="true" /><param name="scriptable" value="true" /><param name="image" value="loading.gif" /><param name="boxmessage" value="Loading Processing software..." /><param name="boxbgcolor" value="#FFFFFF" /><param name="test_string" value="outer" /><param name="track" value="'+ourtrack+'" /></object>';
		document.getElementById("ourimage").src = ourimage.src;
		
		preload();
	}
	
	function preload() {
		nexttrackid = parseInt(Math.random()*tracklist.length);
		nexttrack = tracklist[nexttrackid];
		nextimage.src = "data/"+nexttrack+".gif";
	}
	
	</script>
		<title>Goto80 - Open Funk Sores</title>
		
		<style type="text/css">
		/* <![CDATA[ */
	
		body {
  		  margin: 60px 0px 0px 55px;
		  font-family: verdana, geneva, arial, helvetica, sans-serif; 
		  font-size: 11px; 
		  background-color: #FFFFFF;
		  text-decoration: none; 
		  font-weight: normal; 
		  line-height: normal; 
		}
		 
		a          { color: #3399cc; }
		a:link     { color: #3399cc; text-decoration: underline; }
		a:visited  { color: #3399cc; text-decoration: underline; }
		a:active   { color: #3399cc; text-decoration: underline; }
		a:hover    { color: #3399cc; text-decoration: underline; }

		
		/* ]]> */
		</style>
	 
	</head>
	<?
	@include_once( '/home/sceneorg/ps/public_html/enough/slimstat/stats_include.php' );
?>
	<body onload="load()" style="padding:0px; margin:0px; text-align:center;">
		<div id="content">
			<br />
			<div style="margin-left: auto; margin-right:auto; height: 300px; width: 500px; text-align:center;">
			<img id="ourimage" src="http://enoughrecords.scene.org/covers/enrmp151.jpg" onclick="next()"/>
			<div id="goto80_openfunksores_container"></div>
			</div>
			<br /><br />
			Click image to play!<br /><br />
			And if you get bored, click again!
			<br /><br />
			<span id="textMod"></span>
			Credits:<br />music - <a href="http://www.goto80.com/">Goto 80</a><br />animations - <a href="http://www.raquelmeyers.com/">Raquel Meyers</a><br />PortaMod lib - <a href="http://crayolon.net/">Crayolon</a><br />webcode hack - <a href="http://tpolm.org/~ps">ps</a>
			<br /><br />
			Also available:<br /><a href="http://http.de.scene.org/pub/music/groups/enough_records/enrmp151_goto80_-_open_funk_sores/00_goto80_-_open_funk_sores__mp3_.zip">MP3 Download</a> :: <a href="http://http.de.scene.org/pub/music/groups/enough_records/enrmp151_goto80_-_open_funk_sores/00_goto80_-_open_funk_sores__psp_.zip">PlayStation Portable version</a>
			<br /><br />
			<a href="http://www.facebook.com/sharer.php?u=http://enoughrecords.scene.org/goto80_openfunksores" target="_blank" title="Share on Facebook"><img border="0" src="../iconss/facebook.png"></a>
<a href="http://twitter.com/home?status=Goto80+-+Open+Funk+Sores,+musicdisk+in+your+browser+http://enoughrecords.scene.org/goto80_openfunksores" target="_blank" title="Share on Twitter"><img border="0" src="../iconss/twitter.png"></a>
			<br /><br />
			<script type="text/javascript">
	var flattr_url = 'http://www.enoughrecords.scene.org/goto80_openfunksores/';
	var flattr_btn='compact';
</script>
<script src="http://api.flattr.com/button/load.js" type="text/javascript"></script>
<br /><br />
			(cc) <a href="http://enoughrecords.scene.org">enoughrecords</a> 2008 - 2011<br />Tested on Firefox, Safari and Chrome
			
		</div>
		<div id="sound_element"></div>
	</body>
</html>
