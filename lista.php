<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Baixe vídeos públicos do YouTube</title>
        <meta name="keywords" content="Wilhan Botelho, youtube downloader"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta id="mvp" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href="css/custom.css" rel="stylesheet" media="screen" />
    </head>
    <body>
        <?php
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if($user !== 'b0mb@' || $pass !== '123987'){
                throw new Exception('Acesso negado');
            }
            require 'lib.php';
            $yt = new YouTubeDownloader();
            $video_id = $_POST['videoid'];
            $arrRes = $yt->getDownloadLinks($video_id);
            
            require($arrRes) ? 'lista_found.php' : 'lista_not_found.php';
        ?>
    </body>
    <script>
        window.onload = function () {
            var mvp = document.getElementById('mvp');
            mvp.setAttribute('content','width=' + window.innerWidth );
        }
    </script>
</html>
