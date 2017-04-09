<div class="container">
    <div class="row">
        <div class="form-download">
            <h1 class="form-download-heading">Resultados</h1>
            <div id="info">
                <img src="<?php echo $arrRes['thumbnail_url'] ?>" border="0" hspace="2" vspace="2" />
                <p><?php echo $arrRes['title'] ?></p>
            </div>
            <p align="center">Formatos disponíveis:</p>
            <ul>
                <?php foreach ($arrRes['links'] as $key => $value) {
                    echo '<li>';
                    echo '<a title="download" href="download.php?' .
                            'mime=' . $value['type'] .
                            '&title=' . urlencode($arrRes['title']) .
                            '&size=' . $value['size'] .
                            '&token=' . base64_encode(urlencode($value['url'])) . '">' .
                        $value['type'] . ' | ' . $value['format'] . '</a> => ' . $value['formatedSize'];
                    echo '</li>';
                } ?>
            </ul>
            <div class="row text-center">
                <a class="btn btn-primary" href="/ytb">Voltar</a>
            </div>
        </div>
    </div>
</div>