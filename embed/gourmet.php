<?php 
function randomString($length = 3) { 
    $randomString = ''; 
    $characters = implode("", array_merge(range('a', 'z'), range('A', 'Z'))); 
    for ($i = 0; $i < $length; $i++) $randomString .= $characters[mt_rand(0, strlen($characters) - 1)]; 
    return $randomString; 
} 
function encode($output) {  
   $randomFunc = randomString(); 
    $randomOut = randomString(); 
    $randomNum = randomString(); 
    $randomVal = mt_rand(999999, 99999999); 
    $return = '<!-- CONTINUA LO QUE ESTAS HACIENDO, AQUI NO HAY NADA. --> 
    <script>var ' . $randomOut . ' = ""; var ' . $randomNum . ' = ['; 
    foreach(str_split($output) as $x){ $return .= '"'.base64_encode(randomString().(ord($x) + $randomVal).randomString()) . '", '; if (mt_rand(0, 1)){ $return .= "\n"; } } 
    $return = rtrim($return, ', '); 
    $return .= ']; ' . $randomNum . '.forEach(function ' . $randomFunc . '(value) { ' . $randomOut . ' += String.fromCharCode(parseInt(atob(value).replace(/\D/g,\'\')) - ' . $randomVal . '); } ); document.write(decodeURIComponent(escape(' . $randomOut . '))); </script>'  ;; 
    return $return; 
} 
ob_start("encode"); 
?>

<html lang="es">
<head>
<script type='text/javascript' src='//desperateambient.com/37/b9/35/37b93537576e500d0368e88b69fb3024.js'></script>
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
<script type="text/javascript">
    aclib.runPop({
        zoneId: '7810210',
    });
</script>	      
<meta name="robots" content="noindex" />
<script src="//cdn.jsdelivr.net/npm/@clappr/player@0.4.0/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/mux.js@5.6.7/dist/mux.min.js"></script>
<script src='//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js'></script>
<script src="//cdn.jsdelivr.net/npm/shaka-player@2.5.10/dist/shaka-player.compiled.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.external.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/cdnbye-shaka@latest"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<style> 

.player-poster[data-poster] {
  background-size: cover;
}
body{
  margin:0;
  padding:0;
}

</style>
</head>
<div id="player"></div>
<script>
var player = new Clappr.Player({
        source: '//1093-vos.dtvott.com/DASH/manifest.mpd',
        mimeType: 'application/dash+xml',
        height: '100%',
        width: '100%',
        plugins: [LevelSelector, DashShakaPlayback, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, Clappr.MediaControl],
        events: {onReady: function() {var plugin = this.getPlugin('click_to_pause'); plugin && plugin.disable();},},
        chromecast: {
            appId: '9DFB77C0',
            contentType: 'video/mp4',
        },
        shakaConfiguration: {
            drm: {
            clearKeys: {
                    '21284492c24856068ac991aa728cca90':'d5df004f1f5ad91ab26d5cd1d47fa774','bcf9c722e5e9599f867ec73028d1049d':'15ed8e0399201f14821ceb90bf06acdc','3e872564bb615973890f8b08c1e0ca61':'84e2daf7cdeca4b86684768f6fafd476'
                        ,'adb079bda7cb5a7b8549816ceed3e8d5':'902829b5bdc8f3e224361a8b78b24370'
                        ,'1b6b73ff12215fa9815934bdd9b3805b':'01b58c6bf6c0897ccd94a09a7cd83ab3'
                        ,'3bf6f271859f5ff58abba6c198c1ffbd':'20d05e214385cddab93e4416ea4bdd41'
                        ,'5e07715b02f655ba8c45b4af560d3460':'0718aec47d5b7e3d5065b7f32cd23094'
                        ,'e3c895cfe9545b388fdfa2785350b8d6':'1ab18aaa5750863ebc5fd57647f43d79'
                        ,'3bec0c2b9578595a8e25fb391c0cd7b1':'706ac54cbbdc8fa22b150cad63e1f5f6'
                        ,'9de10ceec7e437bc9fa79d991c64584b':'19d16e9f32226954fc92325784bfd2d8'
                }
            },
            preferredAudioLanguage: 'pt-BR',
        },
        shakaOnBeforeLoad: function (shaka_player) {},
        parentId: '#player'
    });
</script>
