<?php

    include("config.php");

?>

<! DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title> Minha lista de Videos do Youtube.</title>

    </head>
    <body>
        <form action="" method="POST" name="formularioVideo">
        <input type="hidden" name="h" id="urlvideo" value="ok"/>
            <label><span>URL do Video:</span>

                <input type="text" name="url" id="urlvideo" size="40" /><input type="submit" name="btnOK" value="Salvar"/>
            
            </label>

                 </form>
                    <h3>
                         Listando video do Youtube
                    </h3>
                        <div id="videos-youtube">

            <?php
            $sql = "SELECT * FROM videos";
            $result = mysqli_query($conectar, $sql) or die( mysqli_error($conectar));
            
            while ( $ln =  mysqli_fetch_array($result) )
                {
                

            ?>
        
                <img src="<?php echo $ln["imagem"]?>" width="120" height="90" style="clear:both; float: left; padding: 3px; border: 1px solid #999; margin-top: 2px;"/>
                <span style="margin-left: 3px; margin-top: 2px"><?php echo $ln ["titulo"];?> / <strong><?php echo $ln["descricao"]; ?></strong></span>
                <p>&nbsp;</p>
                <br><br>
                <?php } ?>

        </div>
    </body>
</html>

<?php
    if(isset($_POST["h"])  && $_POST["h"] == "ok") {

        $url = $_POST["url"];
        $conteudo = get_meta_tags($url);
        $imagem = substr($url, 31, 11);

        $urlimagem = "http://img.youtube.com/vi/$imagem/default.jpg";

        $sql = mysqli_query($conectar, "INSERT INTO videos(titulo, descricao, url, imagem) values ('".utf8_decode($conteudo["title"])."', '".utf8_decode($conteudo["descriptiom"])."', '$url', '$urlimagem')");
        if($sql){
        header("Location: ./");
        }
}


?>
