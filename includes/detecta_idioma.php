<?php 
   $text = "";

   // Selecciona els idiomes i textos de la base de dades.
   require_once('includes/consulta.php');

   if(isset($_GET['lang']) && $_GET['lang'] != ''){

        $lang = $_GET['lang'];

        if (in_array($lang, $idiomes)) {

               $text = utf8_encode($textos[$lang]);

        }else{
            if(!in_array($lang, $idiomes)){
                $text = "Idioma ($lang) no disponible...";
            }
            else{
            ?>
            <script src="funcions/ajax.js"></script>
        <?php
            }
        }
   }else{
    ?>
        <script src="funcions/ajax.js"></script>
    <?php
   }
?>

