<html>
<head>
    <title>FM Player</title>
    <link rel="stylesheet" type="text/css" href="/css/player.css">
</head>
<body>
<div class="container">
    <div class="column center">
        <h1>HTML5 Audio Player</h1>
        <h6>w/ responsive playlist</h6>
    </div>
    <div class="column add-bottom">
        <div id="mainwrap">
            <div id="nowPlay">
                <span class="left" id="npAction">Paused...</span>
                <span class="right" id="npTitle"></span>
            </div>
            <div id="audiowrap">
                <div id="audio0">
                    <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                </div>
                <div id="tracks">
                    <a id="btnPrev">&laquo;</a>
                    <a id="btnNext">&raquo;</a>
                </div>
            </div>
            <div id="plwrap">
                <ul id="plList"></ul>
            </div>
        </div>
    </div>
    <div class="column add-bottom center">
        <p>Created by <a href="http://www.markhillard.com/">mh</a>. Music by <a href="http://www.mythium.net/">Mythium</a>.</p>
        <p>Download: <a href="https://archive.org/download/mythium/mythium_vbr_mp3.zip">zip</a> / <a href="https://archive.org/download/mythium/mythium_archive.torrent">torrent</a></p>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>
<script src="/js/player.js"></script>
</body>
</html>