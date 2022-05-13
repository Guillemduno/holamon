<?php 
   $text = "";
   $idiomes = ["ca", "es", "en"]; 

   if(isset($_GET['lang'])&& $_GET['lang'] !=''){

        $lang = $_GET['lang'];

        if (in_array($lang, $idiomes)) {

            if ($lang === 'es') {
                $text = 'Hola Mundo!';
            } 
            else if($lang === 'en'){
                $text = 'Hello World!';
            }
            else {
                $text = "Hola Món!";
            }
        }else{
            ?>
            <script src="funcions/ajax.js"></script>
        <?php
        }
   }else{
    ?>
        <script src="funcions/ajax.js"></script>
    <?php
   }
?>