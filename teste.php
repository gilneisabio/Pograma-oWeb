<?php

include("config.php");

            $sql = "SELECT * FROM videos";
            mysqli_query($conectar, $sql);
            if( mysqli_query($conectar, $sql)){
                $result =  mysqli_fetch_array($conectar, $sql);
                mysqli_close($conectar);
                }else{
                    die ("Error:". $conectar -> error);
                    mysqli_close($conectar);
                }
                while ( $ln =  mysqli_fetch_array($conectar, $sql) ){
                }
                

?>