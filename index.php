<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Baixe vídeos públicos do YouTube</title>
        <meta name="keywords" content="Wilhan Botelho, youtube downloader"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta id="mvp" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link href="css/custom.css" rel="stylesheet" media="screen"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form class="form-download" method="post" action="lista.php">
                    <h1 class="form-download-heading">Download do Youtube</h1>
                    <input type="text" name="videoid" placeholder="Link do YoutTube ou Id do Vídeo" />
                    <input type="text" name="user" autocomplete="off" placeholder="Usuário" />
                    <input type="password" name="pass" placeholder="Senha" />
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="Buscar opções" />
                    </div>
                    <p>Exemplos de IDs válidos:</p>
                    <ul>
                        <li>youtube.com/watch?v=<b>aBCdEFGhIJk</b></li>
                        <li><b>youtube.com/watch?v=aBCdEFGhIJk</b></li>
                        <li><b>youtu.be/aBCdEFGhIJk</b></li>
                        <li><b>m.youtube.com/watch?v=aBCdEFGhIJk</b></li>
                    </ul>
                </form>
            </div>
        </div>
    </body>
    <script>
        window.onload = function () {
            var mvp = document.getElementById('mvp');
            mvp.setAttribute('content','width=' + window.innerWidth );
        }
    </script>
</html>