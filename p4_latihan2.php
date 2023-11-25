<html>
    <head><title>Latihan loop</title></head>
    <body>
        <?php
            echo"GANJIL : ";
            for($i=1; $i<=20; $i++){
                if($i % 2 == 1){
                    echo"$i ";
                }
            }

            echo"<br>GENAP : ";
            for($i=1; $i<=20; $i++){
                if($i % 2 == 0){
                    echo"$i ";
                }
            }
        ?>
    </body>
</html>